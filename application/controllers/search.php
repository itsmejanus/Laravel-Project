<?php
class Search_Controller extends Base_Controller {
	
	public $restful = true;
	
	public function get_createsearchview(){
		$user = Sentry::user();
		$View = View::make('admin.search');
		$View->title = "Administrative search and info section";
		
		$View->usStates = DB::QUery('SELECT * FROM us_states ORDER BY state_name ASC');
		$View->accountType = DB::QUery('SELECT * FROM account_type ORDER BY account_type ASC');
		$View->accountBalance = DB::QUery('SELECT * FROM account_balance');
		
		$View->updateRecords="";
		$View->recordCount=0;
		$View->name="";
		$View->email="";
		$View->state_filter="";
		$View->type_filter="";
		$View->balance_filter="";
		$View->status_filter="";
		$View->method="get";
		return $View;
		
	}
	
	public function post_searchresults(){
		$user = Sentry::user();
		$View = View::make('admin.search');
		$View->title = "Administrative search and info section";
		
		$View->usStates 	= DB::QUery('SELECT * FROM us_states ORDER BY state_name ASC');
		$View->accountType  = DB::QUery('SELECT * FROM account_type ORDER BY account_type ASC');
		$View->accountBalance  = DB::QUery('SELECT * FROM account_balance');
		
		//if(Input::get('name')!="" || Input::get('email')!="" || Input::get('state_filter')!="" || Input::get('type_filter')!="" || Input::get('balance_filter')!="" || Input::get('status_filter')!=""){
			$name=Input::get('name');
			$email=Input::get('email');
			$state_filter=Input::get('state_filter');
			$type_filter=Input::get('type_filter');
			$balance_filter=Input::get('balance_filter');
			$status_filter=Input::get('status_filter');
			
			$sql="select CONCAT_WS(' ', um.first_name, um.last_name) as name,um.phone,um.type,um.account_balance,u.email,u.password,u.status,u.activated from users u, users_metadata um where ";
			$where="";
			if($name!=""){
				$where.="CONCAT_WS(' ', um.first_name, um.last_name)='".$name."'";
			}
			
			if($email!=""){
				if($where==""){
					$where.="u.email='".$email."'";
				}
				else{
					$where.=" and u.email='".$email."'";
				}
			}
			
			if($state_filter!=""){
				if($where==""){
					$where.="um.state='".$state_filter."'";
				}
				else{
					$where.=" and um.state='".$state_filter."'";
				}
			}
			
			if($type_filter!=""){
				if($where==""){
					$where.="um.type='".$type_filter."'";
				}
				else{
					$where.=" and um.type='".$type_filter."'";
				}
			}
			
			if($balance_filter!=""){
				if($where==""){
					$where.="um.account_balance='".$balance_filter."'";
				}
				else{
					$where.=" and um.account_balance='".$balance_filter."'";
				}
			}
			
			if($status_filter!=""){
				if($where==""){
					$where.="u.status='".$status_filter."'";
				}
				else{
					$where.=" and u.status='".$status_filter."'";
				}
			}
			
			$sql_final=$sql.$where;
			
		$mockup_data = new stdClass();
		$mockup_data->name = 'raheel mirza';
		$mockup_data->phone = '123-456-7890';
		$mockup_data->type = 'Test type';
		$mockup_data->account_balance = '10';
		$mockup_data->email = 'raheel@gmail.com';
		$mockup_data->password = '123456';
		$mockup_data->status = 'Activated';
		$mockup_data->activated = 'Activated';
		$mockup_array=array();
		$mockup_array[]=$mockup_data;
		$mockup_array[]=$mockup_data;
		$mockup_array[]=$mockup_data;
		$mockup_array[]=$mockup_data;
		$mockup_array[]=$mockup_data;
		$mockup_array[]=$mockup_data;
		$mockup_array[]=$mockup_data;
		$mockup_array[]=$mockup_data;
		$mockup_array[]=$mockup_data;
		$mockup_array[]=$mockup_data;
			//echo "<pre>";print_r($mockup_array);
			//$View->updateRecords = DB::QUery($sql_final);
			$View->updateRecords=$mockup_array;
			$View->recordCount=count($View->updateRecords);
			$View->name=$name;
			$View->email=$email;
			$View->state_filter=$state_filter;
			$View->type_filter=$type_filter;
			$View->balance_filter=$balance_filter;
			$View->status_filter=$status_filter;
			$View->method="post";
		/*}
		else{
		
		$View->updateRecords="";
		$View->recordCount=0;
		$View->name="";
		$View->email="";
		$View->state_filter="";
		$View->type_filter="";
		$View->balance_filter="";
		$View->status_filter="";
		$View->method="post";
		
		}*/
		
		
						
		
		return $View;
		
	}
	
	public function post_searchmap(){
		$user = Sentry::user();
		$View = View::make('admin.map');
		$View->title = "Map";
		if(count($user["user"])>0){
			$View->username = $user["metadata"]["first_name"]." ".$user["metadata"]["last_name"];
			$View->image = $user["metadata"]["pic"];
		}
		else{
			$View->username="";
			$View->image="";
		}
		
		if(Input::get('filter')!="")
		{
			try
			{
			    $fall='';
				$fno='';
				$f1day='';
				$f1week='';
				$f1month='';
				$f6month='';
				$filter= Input::get('filter');
				if($filter=='all'):
				$fall='selected="selected"';
				$sql='SELECT h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID 
          			FROM hospitals h INNER JOIN jobs_edw j
					ON(h.id=j.hospid)';
				elseif($filter==0):
				$fno='selected="selected"';
				$sql='SELECT h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID
          				FROM hospitals h INNER JOIN jobs_edw j
					ON(h.id!=j.hospid)';
				elseif($filter=='1 day'):
				$f1day='selected="selected"';
				$sdate=date('Y-m-d',strtotime("- $filter"));
				$sql="SELECT h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID
          				FROM hospitals h INNER JOIN jobs_edw j
					ON(h.id=j.hospid) WHERE j.created_at='$sdate'";
				elseif($filter=='1 week'):
				$f1week='selected="selected"';
				$week=date('W',strtotime("- $filter"));
				$edate=date('Y-m-d');
				 $sql="SELECT h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID
          			FROM hospitals h INNER JOIN jobs_edw j
					ON(h.id=j.hospid) WHERE week(j.created_at) ='$week'";
				elseif($filter=='1 month'):
				$f1month='selected="selected"';
				$month=date('m',strtotime("- $filter"));
				$sql="SELECT h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID
						  FROM hospitals h INNER JOIN jobs_edw j
				ON(h.id=j.hospid) WHERE month(j.created_at) ='$month'";
				elseif($filter=='6 month'):
				$f6month='selected="selected"';
				$month=date('m',strtotime("- $filter"));
				$month1=date('m',strtotime("- 1 month"));
				$sql="SELECT h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID
						  FROM hospitals h INNER JOIN jobs_edw j
				ON(h.id=j.hospid) WHERE month(j.created_at) between '$month' and '$month1'";
				endif;
				#echo $sql;
				$View->userUpdate = DB::QUery($sql);
				$i=1;
				$html="";
				foreach($View->userUpdate as $userlist){
					$html.="['".addslashes($userlist->name)."', ".$userlist->lat.", ".$userlist->lng.", ".$i."],";
					$i++;
				}
				
				$html=substr($html,0,-1);
				$View->mapHtml=$html;
				$View->fall=$fall;
				$View->fno=$fno;
				$View->f1day=$f1day;
				$View->f1week=$f1week;
				$View->f1month=$f1month;
				$View->f6month=$f6month;
				$View->Record=count($View->userUpdate);
				//print_r($user);
				return $View;
			}
			catch (Sentry\SentryException $e)
			{

			    $errors = $e->getMessage();
			}
		}
		else
		{
			$View = View::make('admin.map');
			$View->title = 'Map';
			if(count($user["user"])>0){
				$View->username = $user["metadata"]["first_name"]." ".$user["metadata"]["last_name"];
				$View->image = $user["metadata"]["pic"];
			}
			else{
				$View->username="";
				$View->image="";
			}
			return $View;
		}
		
		
	}
	
	public function post_hospitaleditable(){
		$View = View::make('admin.map');
		if(Input::get('id')!=""){
			
			$id=Input::get('id');
			$View->getRecords = DB::QUery('SELECT CPara,LPara,admin_notes
          			FROM jobs_edw
					Where JobID="'.intval($id).'"');
			foreach($View->getRecords as $rec){
				$rec_arr=array("cpara"=>$rec->cpara,"lpara"=>$rec->lpara,"admin_notes"=>$rec->admin_notes);
			}		
			echo json_encode($rec_arr);
			
		}
		
		
	}
	
	public function post_hospitalsave(){
		$View = View::make('admin.map');
		if(Input::get('job_id')!=""){
			$job_id=Input::get('job_id');
			$textData=Input::get('textData');
			$db_field=Input::get('db_field');
			$View->updateRecords = DB::QUery("update jobs_edw set ".$db_field."='".addslashes($textData)."' where JobID='".$job_id."'");
		}
	}
	
	
}