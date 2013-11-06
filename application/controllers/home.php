<?php

class Home_Controller extends Base_Controller {
	public $restful = true;
	public function get_index()
	{	
		return View::make('home.index')->with('title','Home');
	}
	
	public function get_recruitersignup()
	{
		$View = View::make('home.recruitersignup');	
		$View->title = "Recruiter Signup";
		return $View;
	}
	
	public function get_overview()
	{
		$View = View::make('home.overview');
		$View->title = "Overview";
		return $View;
	}
	public function get_overview_old() {
		$messages = DB::Query("SELECT
								m.id,
								concat(uf.first_name, ' ', uf.last_name) as `from`,
								uf.pic as pic,
								h.name as hospname,
								m.message,m.subject 	
								FROM messages m
								join users_metadata uf on m.from = uf.user_id
								join hospitals h on m.hospid = h.id
								where new=1
								and m.to_id = '" . $user->id . "'
								order by m.created_at desc;");
		//connected physicians
		$sqlConnectedDocs = '
				Select d.doc_release, count(m.subject) as msg_count, a.iid as docid, a.iwho as docname, a.iref as docalias, h.id as hospid, h.alias as halias, h.State, a.owho as hospname, max(a.created_at)
							from activity a
							join hospitals h on a.oref = h.alias
							join doc_perms d on d.doc_id = a.iid
                            left join messages m on m.from = a.iid and m.to_id = ? and m.new = 1
							where iid = (select target from connections where Follower = ? and type = \'physician\')
							and opredicate = \'hospital\'
							group by iwho, owho;';
		$connectedDocs = DB::query($sqlConnectedDocs, array($userId, $userId));
		//new docs
		$hospZips = DB::query('select h.zip from connections c, hospitals h where c.target = h.id and Follower = ? and c.type = \'hospital\';', $userId);
		$count = 0;
		$docsByHome = array();
		$docsByDesired = array();
		$docsByVisited = array();
		foreach ($hospZips as $hospZip):
		$searchResults = $this->find_doc_by_loc ($hospZip->zip, "home" );
		foreach ($searchResults as $searchResult):
		$docsByHome[$searchResult->name]= $searchResult->alias;
		endforeach;
			
		$searchResults = $this->find_doc_by_loc ($hospZip->zip, "desired" );
		foreach ($searchResults as $searchResult):
		$docsByDesired[$searchResult->name]= $searchResult->alias;
		endforeach;
			
		$searchResults = $this->find_doc_by_loc ($hospZip->zip, "visited" );
		foreach ($searchResults as $searchResult):
		$docsByVisited[$searchResult->name]= $searchResult->alias;
		endforeach;
		endforeach;
		ksort($docsByHome);
		ksort($docsByDesired);
		ksort($docsByVisited);
		$docsByFaved = DB::query('
        		SELECT DISTINCT CONCAT( um.first_name,  \' \', um.last_name ) AS name, um.alias
        		FROM users_metadata um, connections c WHERE c.Follower = um.user_id AND c.type = \'hospital\' AND c.target IN
                (SELECT h.id FROM hospitals h WHERE h.owner_id = ?) ORDER BY name;
        		', $userId);
	
		$View->connectedDocs = $connectedDocs;
		$View-> docsByHome = $docsByHome;
		$View-> docsByDesired = $docsByDesired;
		$View-> docsByVisited = $docsByVisited;
		$View->docsByFaved = $docsByFaved;
		$View->messages = $messages;
		return $View;
	}
	private function find_doc_by_loc($hospZip, $type)
	{
		$db = DB::connection();
		$stmt = $db->pdo->prepare("CALL sp_find_docs_by_location(:zipcode,25,:locType)");
		$stmt->bindParam(':zipcode', $hospZip, PDO::PARAM_STR);
		$stmt->bindParam(':locType', $type, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}
	
	public function post_newmessages(){
		$user = Sentry::user();
		$View = View::make('home.newmessages');
		$messages = DB::Query("SELECT
								m.id,
								concat(uf.first_name, ' ', uf.last_name) as `from`,
								uf.pic as pic,
								h.name as hospname,
								m.message,m.subject 	
								FROM messages m
								join users_metadata uf on m.from_id = uf.user_id
								join hospitals h on m.hospid = h.id
								where new=1
								and m.to_id = '" . $user->id . "'
								order by m.created_at desc limit 0,3;");
		$View->messages = $messages;
		//echo "<pre>";print_r($messages);exit;
		return $View;
		
	}
	
	public function post_connectedphyscians(){
		$user = Sentry::user();
		$userId = $user->id;
		$View = View::make('home.connectedphyscians');
		$sqlConnectedDocs = '
				Select d.doc_release, count(m.subject) as msg_count, a.iid as docid, a.iwho as docname, a.iref as docalias, h.id as hospid, h.alias as halias, h.State, a.owho as hospname, max(a.created_at)
							from activity a
							join hospitals h on a.oref = h.alias
							join doc_perms d on d.doc_id = a.iid
                            left join messages m on m.from_id = a.iid and m.to_id = ? and m.new = 1
							where iid IN (select target from connections where Follower = ? and type = \'physician\')
							and opredicate = \'hospital\'
							group by iwho, owho limit 0,3;';
		$connectedDocs = DB::query($sqlConnectedDocs, array($userId, $userId));
		
		$View->connectedDocs = $connectedDocs;
		//echo "<pre>";print_r($connectedDocs);exit;
		return $View;	
	}
	
	public function post_faveddocs(){
		$user = Sentry::user();
		$userId = $user->id;
		$View = View::make('home.faveddocs');
		$docsByFaved = DB::query('
        		SELECT DISTINCT CONCAT( um.first_name,  \' \', um.last_name ) AS name, CONCAT( um.city,  \', \', um.state ) AS location, um.user_id
        		FROM users_metadata um, connections c WHERE c.Follower = um.user_id AND c.type = \'hospital\' AND c.target IN
                (SELECT h.id FROM hospitals h WHERE h.owner_id = ?) ORDER BY name;
        		', $userId);
		$View->docsByFaved = $docsByFaved;
		//echo "<pre>";print_r($docsByFaved);exit;
		return $View;
	}
	
	public function post_docsnearhome(){
		$user = Sentry::user();
		$userId = $user->id;
		$View = View::make('home.docsnearhome');
		
		$hospZips = DB::query('select h.zip from connections c, hospitals h where c.target = h.id and Follower = ? and c.type = \'hospital\';', $userId);
		$count = 0;
		$docsByHome = array();
		foreach ($hospZips as $hospZip):
		$searchResults = $this->find_doc_by_loc ($hospZip->zip, "home" );
		foreach ($searchResults as $searchResult):
		$docsByHome[]= array("name"=>$searchResult->name,"alias"=>$searchResult->alias);
		endforeach;
		endforeach;
		$View->docsByHome = $docsByHome;
		//echo "<pre>";print_r($docsByHome);exit;
		return $View;
	}
	
	public function post_docsdesired(){
		$user = Sentry::user();
		$userId = $user->id;
		$View = View::make('home.docsdesired');
		
		$hospZips = DB::query('select h.zip from connections c, hospitals h where c.target = h.id and Follower = ? and c.type = \'hospital\';', $userId);
		$count = 0;
		$docsByDesired = array();
		foreach ($hospZips as $hospZip):
		$searchResults = $this->find_doc_by_loc ($hospZip->zip, "desired" );
		foreach ($searchResults as $searchResult):
		$docsByDesired[]= array("name"=>$searchResult->name,"alias"=>$searchResult->alias);
		endforeach;
		endforeach;
		$View->docsByDesired = $docsByDesired;
		//echo "<pre>";print_r($docsByDesired);exit;
		return $View;
	}
	
	public function post_docsvisited(){
		$user = Sentry::user();
		$userId = $user->id;
		$View = View::make('home.docsvisited');
		
		$hospZips = DB::query('select h.zip from connections c, hospitals h where c.target = h.id and Follower = ? and c.type = \'hospital\';', $userId);
		$count = 0;
		$docsByVisited = array();
		foreach ($hospZips as $hospZip):	
		$searchResults = $this->find_doc_by_loc ($hospZip->zip, "visited" );
		foreach ($searchResults as $searchResult):
		$docsByVisited[]= array("name"=>$searchResult->name,"alias"=>$searchResult->alias);
		endforeach;
		endforeach;
		$View->docsByVisited = $docsByVisited;
		//echo "<pre>";print_r($docsByVisited);exit;
		return $View;
	}
	
	public function post_requestconnection(){
			$user = Sentry::user();
			$userId = $user->id;
			$View = View::make('home.requestconnection');
			$comm_status=Input::get('comm_status');
			
			$connection_request=array();
			$sql_connection_requests="Select * from doc_perms where comm_status ='".$comm_status."' and doc_id='".$userId."'";
		    $res_requests = DB::QUery($sql_connection_requests);
			foreach($res_requests as $req){
				$hospital_detail = DB::QUery("Select id,name,address,city,state from hospitals where id='".$req->hosp_id."'");
				$recruiter_detail = DB::QUery("Select user_id,first_name,last_name from users_metadata where user_id='".$req->visitor_id."'");
				$connection_request[]=array("hospital_id"=>$hospital_detail[0]->id,"hospital_name"=>$hospital_detail[0]->name,"location"=>$hospital_detail[0]->address,"recruiter_id"=>$recruiter_detail[0]->user_id,"recruiter_name"=>$recruiter_detail[0]->first_name." ".$recruiter_detail[0]->last_name,"record_id"=>$req->id,"comm_status"=>$req->comm_status,"doc_release"=>$req->doc_release);
			}
			$View->connection_request=$connection_request;
			$View->count_request=count($connection_request);
			
			return $View;
	}
	
	public function post_connectphysician(){
		$user = Sentry::user();
		$userId = $user->id;
		$doc_id=Input::get('doc_id');
		$connect_physician = DB::QUery("Insert into connections set target='".$doc_id."', Follower='".$userId."', type='physician'");
	}
	
	public function get_allmessages(){
		$user = Sentry::user();
		$View = View::make('home.allmessages');
		$View->title = "All Messages";
		$type=1;
		if($type==1){
			$where="and m.to_id = '" . $user->id . "'";
		}
		
		$messages_count = DB::Query("SELECT
								m.id,
								m.from_id,
								m.to_id,
								concat(uf.first_name, ' ', uf.last_name) as `from`,
								uf.pic as pic,
								h.name as hospname,
								m.message,m.subject 	
								FROM messages m
								join users_metadata uf on m.from_id = uf.user_id
								join hospitals h on m.hospid = h.id
								where new=1
								$where
								and delete_status=0 
								order by m.created_at desc;");
								
		$messages = DB::Query("SELECT
								m.id,
								m.from_id,
								m.to_id,
								concat(uf.first_name, ' ', uf.last_name) as `from`,
								uf.pic as pic,
								h.name as hospname,
								m.message,m.subject 	
								FROM messages m
								join users_metadata uf on m.from_id = uf.user_id
								join hospitals h on m.hospid = h.id
								where new=1
								$where
								and delete_status=0
								order by m.created_at desc limit 0,5;");
														
		$View->messages = $messages;
		
		$total_count = count($messages_count);
		if($total_count==0){
			$View->start = 0;
		}
		else{
		$View->start = 1;
		}
		
		if($total_count < 5){
			$View->limit = $total_count;
		}
		else{
			$View->limit = 5;
		}
		$View->total_count = $total_count;
		$View->message_type=$type;
		return $View;
	}
	
	public function post_messagepaging(){
		$user = Sentry::user();
		$View = View::make('home.messagepaging');
		
		$message_type=Input::get('message_type');
		
		if($message_type==1){
			$where="new=1 and m.to_id = '" . $user->id . "' and delete_status=0";
		}
		elseif($message_type==2){
			$where="new=1 and m.from_id = '" . $user->id . "' and delete_status=0";
		}
		elseif($message_type==3){
			$where="(new=1 OR new=0) and (m.to_id = '" . $user->id . "') and delete_status=0";
		}
		elseif($message_type==4){
			$where="(new=1 OR new=0) and (m.from_id = '" . $user->id . "' OR m.to_id = '" . $user->id . "') and delete_status=1";
		}
		
		$limit=Input::get('limit');
		$start=Input::get('start');
		$type=Input::get('type');
		
		if($start > 0){
		$start1=$start-1;
		}
		else{
		$start1=$start;
		}
		
		if($type=='previous'){
			if($start1 > 0){
				$start1=$start1-5;
			}
			if($limit > 5){
				$end=$limit-5;
			}
			else{
				$end=$limit;
			}
		}
		else{
			$start1=$start1+5;
			$end=$limit+5;
		}
		
		$messages_count = DB::Query("SELECT
								m.id,
								m.from_id,
								m.to_id,
								concat(uf.first_name, ' ', uf.last_name) as `from`,
								uf.pic as pic,
								h.name as hospname,
								m.message,m.subject 	
								FROM messages m
								join users_metadata uf on m.from_id = uf.user_id
								join hospitals h on m.hospid = h.id
								where
								$where
								order by m.created_at desc;");
							
		$messages = DB::Query("SELECT
								m.id,
								m.from_id,
								m.to_id,
								concat(uf.first_name, ' ', uf.last_name) as `from`,
								uf.pic as pic,
								h.name as hospname,
								m.message,m.subject 	
								FROM messages m
								join users_metadata uf on m.from_id = uf.user_id
								join hospitals h on m.hospid = h.id
								where
								$where
								order by m.created_at desc limit $start1,5;");
		$total_count=count($messages_count);					
		
		$View->messages = $messages;
		
		
		if($total_count==0){
			$View->start = 0;
		}
		else{
			$View->start = $start1+1;
		}
		
		if($end > $total_count){
			$View->limit = $total_count;
		}
		elseif($end < 5){
			$View->limit = 5;
		}
		else{
			$View->limit = $end;
		}
		
		$View->total_count = $total_count;
		
		return $View;
	}
	
	public function post_changemessagestatus(){
		$action=Input::get('action');
		$message_ids=Input::get('message_ids');
		
		if($action=='read'){
			$messages = DB::Query("update messages set new=0 where id IN ($message_ids)");
		}
		elseif($action=='unread'){
			echo "update messages set new=1 where id IN ($message_ids)";
			$messages = DB::Query("update messages set new=1 where id IN ($message_ids)");	
		}
		elseif($action=='delete'){
			$messages = DB::Query("update messages set delete_status=1 where id IN ($message_ids)");	
		}
		
	}
	
	public function post_send_reply(){
		$user = Sentry::user();
		
		$reply_text=Input::get('reply_text');
		$from_id=Input::get('from_id');
		$messages = DB::Query("insert into messages set new=1, from_id='".$user->id."', to_id='".$from_id."', message='".addslashes($reply_text)."', created_at='".date("Y-m-d H:i:s")."', updated_at='".date("Y-m-d H:i:s")."', hospid=1");
		
	}

}