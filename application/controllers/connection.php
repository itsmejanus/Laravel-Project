<?PHP

class Connection_Controller extends Base_Controller {

	public $restful = true;
	public $layout = 'layouts.public';
	
	public function get_myconnections() {
			$View = View::make('connection.myconnections');
			$View->title = 'My Connections';
			return $View;
	}

	public function post_myconnections() {
			$View = View::make('connection.myconnections');
			$View->title = 'My Connections';
			return $View;
	}
	
	public function post_ajaxconnection(){
			$View = View::make('connection.ajaxconnection');
			$comm_status=Input::get('comm_status');
			
			if($comm_status==0){
				$View->status="request";
			}
			elseif($comm_status==2){
				$View->status="current";
			}
			elseif($comm_status==-99999){
				$View->status="deleted";
			}
			
			$connection_request=array();
			$sql_connection_requests="Select * from doc_perms where comm_status ='".$comm_status."'";
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
}