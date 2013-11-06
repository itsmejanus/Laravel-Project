<?PHP

class Hospital_Controller extends Base_Controller {

	public $restful = true;
	
	public function get_search_old(){
		$View = View::make('hospital.search');
		$View->title = 'Search Hospital';
		return $View;
	}
	public function post_search_old(){
		$term = Input::get( 'Search' );
		$Radius = Input::get('Radius');
		$type = 'hospital';
		if ($Radius == 'Radius')
		{
			$search = DB::query("
					select *
					from hospitals
					where match(name, city, state, county, zip)
					against('+*{$term}*' IN BOOLEAN MODE)
					");
					//dd($search);
		}
		else
		{
		$db = DB::connection();
			$stmt = $db->pdo->prepare("CALL geodist(?,?,?, null, null, null)");
			$stmt->bindParam(1, $term);
			$stmt->bindParam(2, $Radius);
			$stmt->bindParam(3, $type);
			$stmt->execute();
			$search = $stmt->fetchAll();
			}
			$View = View::make('hospital.results');
			$View->hospitals = json_encode($search);
			$View->search = Input::get('Search');
			$View->title = 'Search Results';
			return $View;
	}
	public function get_search() {
		$View = View::make('hospital.search_v2');
		$View->title = 'Hospital Search';
		$term="AL";
		
		$search = DB::query("select * 
		from hospitals 
		where match(name, city, state, county, zip)
		against('+*{$term}*' IN BOOLEAN MODE)"
		);
		$View->hospitals = json_encode($search);
		return $View;
	}
	
	public function post_search() {
		$View = View::make('hospital.search_v2');
		$View->title = 'Search Results';
		
		$term = Input::get( 'search_field' );
		$Radius = Input::get('radius_search');
		$type = 'hospital';
		
		
		//checkboxes filter
				$tier1or2= "";
				$cmpsn200plus= "";
				$mjdblcvg= "";
				$noihcdcvg= "";
				$academic= "";
				$cme= "";
				$mdlvlcvg= "";
				$noadmordrs= "";
				$anystlic= "";
				$reprentation= "";
				$recstatus= "";
				$prisnglcvg= "";
				$emr= "";
				
				$tier1or2= Input::get('tier1or2');
				$cmpsn200plus= Input::get('cmpsn200plus');
				$mjdblcvg= Input::get('mjdblcvg');
				$noihcdcvg= Input::get('noihcdcvg');
				$academic= Input::get('academic');
				$cme= Input::get('cme');
				$mdlvlcvg= Input::get('mdlvlcvg');
				$noadmordrs= Input::get('noadmordrs');
				$anystlic= Input::get('anystlic');
				$reprentation= Input::get('reprentation');
				$recstatus= Input::get('recstatus');
				$prisnglcvg= Input::get('prisnglcvg');
				$emr= Input::get('emr');
					$checkboxes_query_cr="";
					$checkboxes_query="";
					if($tier1or2==""){
						$tier1or2=0;
						$View->tier1or2 ='';
					}
					else{
						$tier1or2=1;
						$View->tier1or2 ='checked="checked"';
					}
					$checkboxes_query_cr.="tier1or2='".$tier1or2."'";
					
					if($cmpsn200plus==""){
						$cmpsn200plus=0;
						$View->cmpsn200plus ='';
					}
					else{
						$cmpsn200plus=1;
						$View->cmpsn200plus ='checked="checked"';
					}
					$checkboxes_query_cr.=" and cmpsn200plus='".$cmpsn200plus."'";
					
					if($mjdblcvg==""){
						$mjdblcvg=0;
						$View->mjdblcvg ='';
					}
					else{
						$mjdblcvg=1;
						$View->mjdblcvg ='checked="checked"';
					}
					$checkboxes_query_cr.=" and mjdblcvg='".$mjdblcvg."'";
					
					if($noihcdcvg==""){
						$noihcdcvg=0;
						$View->noihcdcvg ='';
					}
					else{
						$noihcdcvg=1;
						$View->noihcdcvg ='checked="checked"';
					}
					$checkboxes_query_cr.=" and noihcdcvg='".$noihcdcvg."'";
					
					if($academic==""){
						$academic=0;
						$View->academic ='';
					}
					else{
						$academic=1;
						$View->academic ='checked="checked"';
					}
					$checkboxes_query_cr.=" and academic='".$academic."'";
					
					if($cme==""){
						$cme=0;
						$View->cme ='';
					}
					else{
						$cme=1;
						$View->cme ='checked="checked"';
					}
					$checkboxes_query_cr.=" and cme='".$cme."'";
					
					if($mdlvlcvg==""){
						$mdlvlcvg=0;
						$View->mdlvlcvg ='';
					}
					else{
						$mdlvlcvg=1;
						$View->mdlvlcvg ='checked="checked"';	
					}
					$checkboxes_query_cr.=" and mdlvlcvg='".$mdlvlcvg."'";
					
					if($noadmordrs==""){
						$noadmordrs=0;
						$View->noadmordrs ='';
					}
					else{
						$noadmordrs=1;
						$View->noadmordrs ='checked="checked"';
					}
					$checkboxes_query_cr.=" and noadmordrs='".$noadmordrs."'";
					
					if($anystlic==""){
						$anystlic=0;
						$View->anystlic ='';
					}
					else{
						$anystlic=1;
						$View->anystlic ='checked="checked"';
					}
					$checkboxes_query_cr.=" and anystlic='".$anystlic."'";
					
					if($reprentation==""){
						$reprentation=0;
						$View->reprentation ='';
					}
					else{
						$reprentation=1;
						$View->reprentation ='checked="checked"';
					}
					$checkboxes_query_cr.=" and reprentation='".$reprentation."'";
					
					if($recstatus==""){
						$recstatus=0;
						$View->recstatus ='';
					}
					else{
						$recstatus=1;
						$View->recstatus ='checked="checked"';
					}
					$checkboxes_query_cr.=" and recstatus='".$recstatus."'";
					
					if($prisnglcvg==""){
						$prisnglcvg=0;
						$View->prisnglcvg ='';
					}
					else{
						$prisnglcvg=1;
						$View->prisnglcvg ='checked="checked"';
					}
					$checkboxes_query_cr.=" and prisnglcvg='".$prisnglcvg."'";
					
					if($emr==""){
						$emr=0;
						$View->emr ='';
					}
					else{
						$emr=1;
						$View->emr ='checked="checked"';
					}
					$checkboxes_query_cr.=" and emr='".$emr."'";
		
		
		
		
		
		if ($Radius == 'Radius'){
			$search = DB::query("select *
					from hospitals
					where match(name, city, state, county, zip)
					against('+*{$term}*' IN BOOLEAN MODE)
					");
		}
		else{
			$db = DB::connection();
			$stmt = $db->pdo->prepare("CALL geodist(?,?,?, null, null, null)");
			$stmt->bindParam(1, $term);
			$stmt->bindParam(2, $Radius);
			$stmt->bindParam(3, $type);
			$stmt->execute();
			$search = $stmt->fetchAll();
		}
			$View->hospitals = json_encode($search);
			$View->search = Input::get('Search');
			return $View;
	}
	
	public function get_hospitaldetail() {
			$View = View::make('hospital.hospitaldetail');
			$View->title = 'Hospital Detail';
			
			
			$View->HospitalList = DB::QUery('SELECT id,name FROM hospitals');
			
			$View->HospitalCount=0;
			return $View;
	}

	public function post_hospitaldetail() {
			$user = Sentry::user();
			$View = View::make('hospital.hospitaldetail');
			$View->title = 'Hospital Detail';
			
			$View->HospitalList = DB::QUery('SELECT id,name FROM hospitals');
			
			
			if(Input::get('hospital_id')!="")
			{
			try
			{
				$hospital_id=Input::get('hospital_id');
				$View->HospitalDetailData = DB::QUery("SELECT name,city,state,zip,phnnum,email FROM hospitals where id='".$hospital_id."'");
				
				$View->JobDetailData = DB::QUery("SELECT Position,CPara,LPara,Created_at,Contact_Name,JobID FROM jobs_edw where hospid='".$hospital_id."'");
				
				/*echo "<pre>";print_r($View->HospitalDetailData);
				exit;*/
				
			}
			catch (Sentry\SentryException $e)
			{
			    $errors = $e->getMessage();
			}
		}
			
			
			// Hospital detail object
			$hospital_detail = new stdClass();
			$hospital_detail->id  = $hospital_id;
			$hospital_detail->name = $View->HospitalDetailData[0]->name;
			$hospital_detail->contactName  = $View->JobDetailData[0]->contact_name;
			$hospital_detail->contactEmail = $View->HospitalDetailData[0]->email;
			$hospital_detail->contactPhone  = $View->HospitalDetailData[0]->phnnum;
			$hospital_detail->city = $View->HospitalDetailData[0]->city;
			$hospital_detail->state = $View->HospitalDetailData[0]->state;
			$hospital_detail->zip = $View->HospitalDetailData[0]->zip;
			$hospital_detail->startDateOfManagement = $View->JobDetailData[0]->created_at;
			$hospital_detail->jobTitile = $View->JobDetailData[0]->position;
			$hospital_detail->aboutHosp = $View->JobDetailData[0]->lpara;
			$hospital_detail->aboutJob = $View->JobDetailData[0]->cpara;
			$hospital_detail_array[] = $hospital_detail;
			$View->HospitalDetailArray = $hospital_detail_array;
			// End of hospital detail object
			
			// List of users related to a hospital
			$users_list = new stdClass();
			$users_list->userName  = 'Raheel';
			$users_list->countOfNewMsgs = '5';
			$users_list->isDocumentReleased  = 'Yes';
			$users_list->isUserConnected = 'Yes';
			$users_list->notes  = 'Test notes';
			$users_list_array[] = $users_list;
			$users_list_array[] = $users_list;
			$users_list_array[] = $users_list;
			$users_list_array[] = $users_list;
			$users_list_array[] = $users_list;
			$View->UsersListArray = $users_list_array;
			// End of list of users
			$View->HospitalCount=count($hospital_detail_array);
			$View->job_id=$View->JobDetailData[0]->jobid;
			
			return $View;
	}
	
	public function get_hospitalprofile($hospital_id){
		$user = Sentry::user();
		$View = View::make('hospital.hospitalprofile');
		$View->title = "Hospital Profile Page";
		$record = hospital::where_id($hospital_id)->first();
		//echo "<pre>";print_r($record);exit;
		if ($record){
			$connection = 0;
			if($user->in_Group('Physician'))
			{
				$connect = DB::Table('connections')->where('follower', '=', $user->id)->where('type', '=', 'hospital')->where('target', '=', $record->attributes['id'])->first();
				if($connect)
				{
					$connection = 1;
				}
				
			}
			$View->connection=$connection;
			$View->owner = People::find($record->attributes['owner_id']);
			/*$View->Viewed = DB::Query('select
									a.id,
									itype, iwho, iref, iid, ipic as pic, ipredicate,
									`action`,
									otype, owho, oref, opredicate,
									object,
									unix_timestamp(a.created_at) as `timestamp` from activity a
									where oref = ?
									order by a.created_at desc
									LIMIT 10;', $record->attributes['alias']);*/
			$View->comments = DB::Query('Select c.author, c.recipient, c.message, unix_timestamp(c.created_at) as created_at, m.type as `group`,
									m.first_name, m.last_name, m.pic, m.alias
									from hospcomments c
									join users_metadata m on c.author = m.user_id
								where recipient = ? and approved = 1 order by created_at desc', $record->attributes['id']);
			//echo "<pre>";print_r($View->comments);exit;				
								
			/*$event = new activity();
			$event->itype = $user->metadata['type'];
			$event->iwho = $user->metadata['first_name'] . ' ' . $user->metadata['last_name'];
			$event->ipic = $user->metadata['pic'];
			$event->iid = $user['id'];
			$event->ipredicate = DB::only('select name from groups g join users_groups ug on  g.id = ug.group_id where user_id = ?', $user['id']);
			$event->iref = $user->metadata['alias'];
			$event->action = 'visited';
			$event->otype = $record->attributes['type'];
			$event->owho = $record->attributes['name'];
			$event->oref = $record->attributes['alias'];
			$event->opredicate = 'hospital';
			$event->object = 'profile page';
			$event->save();*/
		
			$View->Jobs = DB::Table('jobs_edw')->where('hospid', '=', $record->attributes['id'])->get();
			$View->Jobcount = DB::Table('jobs_edw')->where('hospid', '=', $record->attributes['id'])->count();
		}
		
		$View->hospitalDetail=$record->original;
		$View->recipient = $record->attributes['id']; 
		
		return $View;
		
	}
	
	public function get_hospitals(){
		$user = Sentry::user();
		$View = View::make('hospital.hospitals');
		$View->title = 'My Hospitals';
		
		return $View;
	}
	
	public function post_connecthospital(){
		$user = Sentry::user();
		
		$hospital_id=Input::get('hospital_id');
		$type=Input::get('type');
		$action_type=Input::get('action_type');
		
		if($action_type=='connect'){
			$res = DB::QUery("insert into connections set type = '".$type."', target='".$user['id']."', reference='".$hospital_id."',Follower='".$user['id']."'");
		}
		elseif($action_type=='unconnect'){
			$res = DB::QUery("delete from connections where type = '".$type."' and target='".$user['id']."' and reference='".$hospital_id."' and Follower='".$user['id']."'");
		}
		elseif($action_type=='like'){
			$res = DB::QUery("insert into connections set type = '".$type."', Follower='".$user['id']."', target='".$hospital_id."', reference='".$hospital_id."'");
		}
		elseif($action_type=='unlike'){
			$res = DB::QUery("delete from connections where type = '".$type."' and Follower='".$user['id']."' and target='".$hospital_id."'");
		}
		
		
	}
	
	public function post_removehospital(){
		$user = Sentry::user();
		$hospital_id=Input::get('hospital_id');
		
		$res1 = DB::QUery("delete from connections where type = 'physician' and target='".$user['id']."' and reference='".$hospital_id."' and Follower='".$user['id']."'");
		
		$res2 = DB::QUery("delete from connections where type = 'hospital' and Follower='".$user['id']."' and target='".$hospital_id."'");
		
		$res2 = DB::QUery("update user_recomended_hospitals set status=1 where user_id='".$user['id']."' and hospid='".$hospital_id."'");
		
		
		
	}
	
	public function post_likedhospitals(){
		$user = Sentry::user();
		$View = View::make('hospital.likedhospitals');
		
		$View->likedHosps = DB::QUery('select j.created_at date_posted, j.position job_title, j.hname, j.location, h.alias, j.hospid id
 										from hospitals h, jobs_edw j
 										where h.id in (select target from connections where type = \'hospital\' and Follower = ?) and h.id = j.hospid order by j.created_at desc;',
 				$user['id']);
		
		return $View;
		
	}
	
	public function post_connectedhospitals(){
		$user = Sentry::user();
		$View = View::make('hospital.connectedhospitals');
$View->connectedHosps = DB::QUery('select j.created_at date_posted, j.position job_title, j.hname,j.contact_name, j.location, h.alias, j.hospid id
 										from hospitals h, jobs_edw j
										where h.id in (select reference from connections where type = \'physician\' and target = ?) and h.id = j.hospid order by j.created_at desc;',
 				$user['id']);
		return $View;					
	}
	
	public function post_recommendedhospitals(){
		$user = Sentry::user();
		$View = View::make('hospital.recommendedhospitals');
		
		$user_id=$user['id'];
 		$db = DB::connection();
 		$stmt = $db->pdo->prepare("CALL sp_recommended_hospitals(:userId)");
		$stmt->bindParam(':userId', $user_id, PDO::PARAM_INT);
 		$stmt->execute();
 		$recommendedHosps = $stmt->fetchAll(PDO::FETCH_OBJ);
		unset($stmt);
		foreach($recommendedHosps as $hospitals){
			$dup_hosp = DB::QUery("select * from user_recomended_hospitals where user_id ='".$user_id."' and hospid='".$hospitals->id."'");
			if(count($dup_hosp)==0){
				$insert_hosp = DB::QUery("insert into user_recomended_hospitals set user_id ='".$user_id."', hospid='".$hospitals->id."', date_posted='".$hospitals->date_posted."', job_title='".$hospitals->job_title."', hospital_name='".$hospitals->hname."', location='".$hospitals->location."', alias='".$hospitals->alias."'");
			}
			
		}
		
		
		$View->recommendedHosps = DB::QUery('select date_posted,hospid id,job_title,hospital_name hname, location,alias
 										from user_recomended_hospitals
 										where user_id="'.$user_id.'" and status=0');
		return $View;								
	}
	
	public function get_profile(){
		$user = Sentry::User();
		$record = hospital::where_id($data)->first();
		
		
		if ($record){
			$connection = 0;
			if($user->in_Group('physician'))
			{
				$connect = DB::Table('connections')->where('follower', '=', $user['id'])->where('type', '=', 'hospital')->where('target', '=', $record->attributes['id'])->first();
				if($connect)
				{
					$connection = 1;
				}
			}
			$owner = People::find($record->attributes['owner_id']);
			$Viewed = DB::Query('select
									a.id,
									itype, iwho, iref, iid, ipic as pic, ipredicate,
									`action`,
									otype, owho, oref, opredicate,
									object,
									unix_timestamp(a.created_at) as `timestamp` from activity a
									where oref = ?
									order by a.created_at desc
									LIMIT 10;', $record->attributes['alias']);
			$comments = DB::Query('Select c.author, c.recipient, c.message, unix_timestamp(c.created_at) as created_at, m.type as `group`,
									m.first_name, m.last_name, m.pic, m.alias
									from hospcomments c
									join users_metadata m on c.author = m.user_id
								where recipient = ? and approved = 1', $record->attributes['id']);
		
			$event = new activity();
			$event->itype = $user->metadata['type'];
			$event->iwho = $user->metadata['first_name'] . ' ' . $user->metadata['last_name'];
			$event->ipic = $user->metadata['pic'];
			$event->iid = $user['id'];
			$event->ipredicate = DB::only('select name from groups g join users_groups ug on  g.id = ug.group_id where user_id = ?', $user['id']);
			$event->iref = $user->metadata['alias'];
			$event->action = 'visited';
			$event->otype = $record->attributes['type'];
			$event->owho = $record->attributes['name'];
			$event->oref = $record->attributes['alias'];
			$event->opredicate = 'hospital';
			$event->object = 'profile page';
			$event->save();
		
			$Jobs = DB::Table('jobs_edw')->where('hospid', '=', $record->attributes['id'])->get();
			$Jobcount = DB::Table('jobs_edw')->where('hospid', '=', $record->attributes['id'])->count();
		
			return $View;
		}
		
		// return 'record not found';
	}
	
	public function post_addcomment(){
		$user = Sentry::user();
		$comment=Input::get('comment');
		$recipient=Input::get('recipient');
		
		DB::table('hospcomments')->insert(array(
			    'author' => $user->id,
			    'recipient'  => $recipient,
			    'message'  => addslashes($comment),
				'approved' => 1,
			    'created_at' => date('Y-m-d H:i:s'),
			    'updated_at' => date('Y-m-d H:i:s')
			));
	}
	
	public function post_addfavorites(){
		$user = Sentry::user();
		$target=Input::get('target');
		
		DB::table('connections')->insert(array(
			    'follower' => $user->id,
			    'target'  => $target,
			    'type'  => 'hospital'
			));
	}
	
	public function get_rewrite(){
		$user = Sentry::user();
		$View = View::make('hospital.rewrite');
		$View->title = "Rewrite Page";
	$hospital_list_query="SELECT `HName` , `Location` , JobID, CPara, CPara_Clean, LPara, LPara_Clean FROM `jobs_edw` WHERE HName!='' and Attached_at is null ORDER BY `jobs_edw`.`HName` ASC";
		
	$View->hospital_list = DB::Query($hospital_list_query);
	
	$View->hospital_count= count($View->hospital_list);
		
		
		return $View;
	}
	
	public function post_jobdata(){
		$user = Sentry::user();
		$job_id=Input::get('job_id');
		
		$hospital_detail_query="SELECT `HName` , `Location` , JobID, CPara, CPara_Clean, LPara, LPara_Clean FROM `jobs_edw` WHERE JobID='$job_id'";
		$result = DB::Query($hospital_detail_query);
		foreach($result as $rec){
			$rec_arr=array("hospital_name"=>$rec->hname,"location"=>$rec->location,"job_id"=>$rec->jobid,"cpara"=>$rec->cpara,"cpara_clean"=>$rec->cpara_clean,"lpara_clean"=>$rec->lpara_clean,"lpara"=>$rec->lpara);
		}
		echo json_encode($rec_arr);
		
	}
	
	public function post_savejobdata(){
		$user = Sentry::user();
		$job_id=Input::get('job_id');
		$about_hospital=Input::get('about_hospital');
		$about_area=Input::get('about_area');
		
		$hospital_detail_query="Update `jobs_edw` set LPara ='".addslashes(strip_tags($about_area))."', LPara_Clean='".addslashes($about_area)."', CPara='".addslashes(strip_tags($about_hospital))."', CPara_Clean='".addslashes($about_hospital)."' WHERE JobID='$job_id'";
		$result = DB::Query($hospital_detail_query);
		$rec_arr=array("cpara"=>$about_hospital,"lpara"=>$about_area);
		echo json_encode($rec_arr);
		
	}
	
}