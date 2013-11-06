<?php

class Admin_Controller extends Base_Controller {
	public $restful = true;
	public function get_createmap(){
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
		
		$lat_min ='30.52159162050178';
		$lat_max ='31.930736876124634';
		$lng_min ='-88.42243896484376';
		$lng_max ='-82.30854736328126';
		
		$sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng, j.created_at date_posted,j.Position,j.JobID,j.Contact_Name,j.Contact_Phone,j.Contact_Email
          			FROM hospitals h INNER JOIN jobs_edw j
					ON(h.id=j.hospid) where (h.lat BETWEEN $lat_min AND $lat_max) and (h.lng BETWEEN $lng_min AND $lng_max)";
		
		$View->userUpdate = DB::QUery($sql);
		$i=1;
		$html="";		
		foreach($View->userUpdate as $userlist){
			$html.="['".addslashes($userlist->name)."', ".$userlist->lat.", ".$userlist->lng.", ".$i."],";
			$i++;
		}
		
		$html=substr($html,0,-1);
		$fall='';
				$fno='';
				$f1day='';
				$f1week='';
				$f1month='';
				$f6month='';
				$View->fall=$fall;
				$View->fno=$fno;
				$View->f1day=$f1day;
				$View->f1week=$f1week;
				$View->f1month=$f1month;
				$View->f6month=$f6month;
		$View->Record=count($View->userUpdate);
		$View->lat ='31.210000000';
		$View->lng ='-85.360000000';
		$View->latbox_min =$lat_min;
		$View->latbox_max =$lat_max;
		$View->lngbox_min =$lng_min;
		$View->lngbox_max =$lng_max;
		$View->zoom_level ='8';
		$View->tier1or2 ='';
		$View->cmpsn200plus ='';
		$View->mjdblcvg ='';
		$View->noihcdcvg ='';
		$View->academic ='';
		$View->cme ='';
		$View->mdlvlcvg ='';
		$View->noadmordrs ='';
		$View->anystlic ='';
		$View->reprentation ='';
		$View->recstatus ='';
		$View->prisnglcvg ='';
		$View->emr ='';

		$View->mapHtml=$html;
		//print_r($user);
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
				//echo "<pre>";print_r($_POST);
			    $fall='';
				$fno='';
				$f1day='';
				$f1week='';
				$f1month='';
				$f6month='';
				$filter= Input::get('filter');
				$lat= Input::get('latbox');
				$lng= Input::get('lngbox');
				$lat_min= Input::get('latbox_min');
				$lat_max= Input::get('latbox_max');
				$lng_min= Input::get('lngbox_min');
				$lng_max= Input::get('lngbox_max');
				$zoom_level= Input::get('zoom_level');
				
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
					
					if($lat_min==0 && $lat_max==0 && $lng_min==0 && $lng_max==0){
					if($checkboxes_query_cr!=""){
						$checkboxes_query="($checkboxes_query_cr)";
					}
					$distance_query="";
					}
					else{
					if($checkboxes_query_cr!=""){
						$checkboxes_query=" and ($checkboxes_query_cr)";
					}
					$distance_query="(h.lat BETWEEN $lat_min AND $lat_max) and (h.lng BETWEEN $lng_min AND $lng_max)";
					}
				// End of checkboxes filter
				
				if($filter=='all'):
				$fall='selected="selected"';
				$sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng, j.created_at date_posted,j.Position,j.JobID,j.Contact_Name,j.Contact_Phone,j.Contact_Email
          			FROM hospitals h INNER JOIN jobs_edw j
					ON(h.id=j.hospid) where $distance_query$checkboxes_query";
				elseif($filter==0):
				$fno='selected="selected"';
				/*$sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng
          				FROM hospitals h where h.id NOT IN (Select hospid from jobs_edw) and $distance_query$checkboxes_query";*/
				$sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng
          				FROM hospitals h LEFT JOIN jobs_edw j on h.id NOT IN (Select hospid from jobs_edw) limit 0,10";
				elseif($filter=='1 day'):
				$f1day='selected="selected"';
				$sdate=date('Y-m-d',strtotime("- $filter"));
				$sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID,j.Contact_Name,j.Contact_Phone,j.Contact_Email
          				FROM hospitals h INNER JOIN jobs_edw j
					ON(h.id=j.hospid) WHERE j.created_at='$sdate' and $distance_query$checkboxes_query";
				elseif($filter=='1 week'):
				$f1week='selected="selected"';
				$week=date('W',strtotime("- $filter"));
				$edate=date('Y-m-d');
				 $sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID,j.Contact_Name,j.Contact_Phone,j.Contact_Email
          			FROM hospitals h INNER JOIN jobs_edw j
					ON(h.id=j.hospid) WHERE week(j.created_at) ='$week' and $distance_query$checkboxes_query";
				elseif($filter=='1 month'):
				$f1month='selected="selected"';
				$month=date('m',strtotime("- $filter"));
				$sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID,j.Contact_Name,j.Contact_Phone,j.Contact_Email
						  FROM hospitals h INNER JOIN jobs_edw j
				ON(h.id=j.hospid) WHERE month(j.created_at) ='$month' and $distance_query$checkboxes_query";
				elseif($filter=='6 month'):
				$f6month='selected="selected"';
				$month=date('m',strtotime("- $filter"));
				$month1=date('m',strtotime("- 1 month"));
				$sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID,j.Contact_Name,j.Contact_Phone,j.Contact_Email
						  FROM hospitals h INNER JOIN jobs_edw j
				ON(h.id=j.hospid) WHERE month(j.created_at) between '$month' and '$month1' and $distance_query$checkboxes_query";
				endif;
				//echo $sql;exit;
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
				$View->lat =$lat;
				$View->lng =$lng;
				$View->latbox_min =$lat_min;
				$View->latbox_max =$lat_max;
				$View->lngbox_min =$lng_min;
				$View->lngbox_max =$lng_max;
				$View->zoom_level =$zoom_level;
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
	
	public function post_search_list(){
		
		$View = View::make('admin.search_list');
		
		$fall='';
		$fno='';
		$f1day='';
		$f1week='';
		$f1month='';
		$f6month='';
		$filter= Input::get('filter');
		$lat= Input::get('latbox');
		$lng= Input::get('lngbox');
		$lat_min= Input::get('latbox_min');
		$lat_max= Input::get('latbox_max');
		$lng_min= Input::get('lngbox_min');
		$lng_max= Input::get('lngbox_max');
		$zoom_level= Input::get('zoom_level');
				
				if($filter=='all'):
				$fall='selected="selected"';
				$sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng, j.created_at date_posted,j.Position,j.JobID,j.Contact_Name,j.Contact_Phone,j.Contact_Email 
          			FROM hospitals h INNER JOIN jobs_edw j
					ON(h.id=j.hospid) where (h.lat BETWEEN $lat_min AND $lat_max) and (h.lng BETWEEN $lng_min AND $lng_max)";
				elseif($filter==0):
				$fno='selected="selected"';
				$sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng
          				FROM hospitals h LEFT JOIN jobs_edw j on h.id NOT IN (Select hospid from jobs_edw) limit 0,10";
				elseif($filter=='1 day'):
				$f1day='selected="selected"';
				$sdate=date('Y-m-d',strtotime("- $filter"));
				$sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID,j.Contact_Name,j.Contact_Phone,j.Contact_Email
          				FROM hospitals h INNER JOIN jobs_edw j
					ON(h.id=j.hospid) WHERE j.created_at='$sdate' and (h.lat BETWEEN $lat_min AND $lat_max) and (h.lng BETWEEN $lng_min AND $lng_max)";
				elseif($filter=='1 week'):
				$f1week='selected="selected"';
				$week=date('W',strtotime("- $filter"));
				$edate=date('Y-m-d');
				 $sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID,j.Contact_Name,j.Contact_Phone,j.Contact_Email
          			FROM hospitals h INNER JOIN jobs_edw j
					ON(h.id=j.hospid) WHERE week(j.created_at) ='$week' and (h.lat BETWEEN $lat_min AND $lat_max) and (h.lng BETWEEN $lng_min AND $lng_max)";
				elseif($filter=='1 month'):
				$f1month='selected="selected"';
				$month=date('m',strtotime("- $filter"));
				$sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID,j.Contact_Name,j.Contact_Phone,j.Contact_Email
						  FROM hospitals h INNER JOIN jobs_edw j
				ON(h.id=j.hospid) WHERE month(j.created_at) ='$month' and (h.lat BETWEEN $lat_min AND $lat_max) and (h.lng BETWEEN $lng_min AND $lng_max)";
				elseif($filter=='6 month'):
				$f6month='selected="selected"';
				$month=date('m',strtotime("- $filter"));
				$month1=date('m',strtotime("- 1 month"));
				$sql="SELECT h.id,h.name,h.address,h.city,h.lat,h.lng,j.created_at date_posted,j.Position,j.JobID,j.Contact_Name,j.Contact_Phone,j.Contact_Email
						  FROM hospitals h INNER JOIN jobs_edw j
				ON(h.id=j.hospid) WHERE month(j.created_at) between '$month' and '$month1' and (h.lat BETWEEN $lat_min AND $lat_max) and (h.lng BETWEEN $lng_min AND $lng_max)";
				endif;
				//echo $sql;exit;
				$View->userUpdate = DB::QUery($sql);
				
				$View->Record=count($View->userUpdate);
				$View->fall=$fall;
				$View->fno=$fno;
				$View->f1day=$f1day;
				$View->f1week=$f1week;
				$View->f1month=$f1month;
				$View->f6month=$f6month;
				
				return $View;	
		
	}
	
	public function post_hospitaleditable(){
		$View = View::make('admin.map');
		if(Input::get('id')!=""){
			
			$id=Input::get('id');
			$View->getRecords = DB::QUery('SELECT CPara,LPara,admin_notes
          			FROM jobs_edw
					Where hospid="'.intval($id).'"');
			foreach($View->getRecords as $rec){
				$rec_arr=array("cpara"=>$rec->cpara,"lpara"=>$rec->lpara,"admin_notes"=>$rec->admin_notes);
			}		
			echo json_encode($rec_arr);
			
		}
		
		
	}
	
	public function post_hospitalsave(){
		$View = View::make('admin.map');
		if(Input::get('hospital_id')!=""){
			$hospital_id=Input::get('hospital_id');
			$textData=Input::get('textData');
			$db_field=Input::get('db_field');
			$job_id=time();
			$selectRecords = DB::QUery("select * from jobs_edw where hospid='".$hospital_id."'");
			if(count($selectRecords)==0){
				$updateRecords = DB::QUery("insert into jobs_edw set ".$db_field."='".addslashes($textData)."',hospid='".$hospital_id."',JobID='".$job_id."'");
			}
			else{
				$updateRecords = DB::QUery("update jobs_edw set ".$db_field."='".addslashes($textData)."' where hospid='".$hospital_id."'");
			}
		}
	}
	
	public function get_userdata(){
		$user = Sentry::user();
		$View = View::make('admin.userdata');
		$View->title = "User Data";
		
		
		$data_analysis = new stdClass();
		$data_analysis->userNumber = '123';
		$data_analysis->recruiterNumber = '456';
		$data_analysis->companyNumber = '123';
		$data_analysis->newListingNumber = '456';
		$data_analysis->newUserNumber = '123';
		$data_analysis->newRecruiterNumber = '456';
		$data_analysis->newCompanyNumber = '123';
		$data_analysis->userVisitNumber = '456';
		$data_analysis->positionFilledNumber = '123';
		$data_analysis->contractRequestedNumber = '456';
		$data_analysis->marriedContractNumber = '456';
		
		$dailyData = array();
		$monthlyData = array();
		$totalData = array();
		
		$View->dailyData = $data_analysis;
		
		$View->monthlyData = $data_analysis;
		
		$View->totalData = $data_analysis;
		
		$company_array = array();
		$data = new stdClass();
		$data->id = '1';
		$data->name = 'CompanyA';
		
		$company_array[] = $data;
		$company_array[] = $data;
		$company_array[] = $data;
		$company_array[] = $data;
		$company_array[] = $data;
		$company_array[] = $data;
		$company_array[] = $data;
		
		$View->newCompanyList = $company_array;
		$View->dailyCompanyList = $company_array;
		$View->newRecruiterList = $company_array;
		$View->dailyRecruiterList = $company_array;
		$View->newUserList = $company_array;
		$View->dailyUserList = $company_array;
		$View->newReferalList = $company_array;
		$View->dailyReferalList = $company_array;
		$View->newAdvertisorList = $company_array;
		$View->dailyAdvertisorList = $company_array;
		
		
		$email_list1 = array();
		$email_list2 = array();
		$email_list3 = array();
		$email_list4 = array();
		$email_list5 = array();
		$email_list6 = array();
		$data_email = new stdClass();
		$data_email->senderName = 'iamthe44';
		$data_email->emailID = 'dr@a.a';
		
		$email_list1[] = $data_email;
		$email_list1[] = $data_email;
		$email_list1[] = $data_email;
		$email_list1[] = $data_email;
		
		$email_list2[] = $data_email;
		$email_list2[] = $data_email;
		$email_list2[] = $data_email;
		$email_list2[] = $data_email;
		
		$email_list3[] = $data_email;
		$email_list3[] = $data_email;
		$email_list3[] = $data_email;
		$email_list3[] = $data_email;
		
		$email_list4[] = $data_email;
		$email_list4[] = $data_email;
		$email_list4[] = $data_email;
		$email_list4[] = $data_email;
		
		$email_list5[] = $data_email;
		$email_list5[] = $data_email;
		$email_list5[] = $data_email;
		$email_list5[] = $data_email;
		
		$email_list6[] = $data_email;
		$email_list6[] = $data_email;
		$email_list6[] = $data_email;
		$email_list6[] = $data_email;
		
		
		$View->EmailAssociate1 = $email_list1;
		$View->EmailAssociate2 = $email_list2;
		$View->EmailAssociate3 = $email_list3;
		$View->EmailAssociate4 = $email_list4;
		$View->EmailAssociate5 = $email_list5;
		$View->EmailAssociate6 = $email_list6;
		
		
		$data_comment = new stdClass();
		$data_comment->Comment = 'This is a test comment';
		$data_comment->timeStamp = '2013-06-23';
		$comment_list = array();
		$comment_list[] = $data_comment;
		$comment_list[] = $data_comment;
		$comment_list[] = $data_comment;
		$comment_list[] = $data_comment;
		$comment_list[] = $data_comment;
		$comment_list[] = $data_comment;
		
		$View->commmentList = $comment_list;
		return $View;
		
	}
	
	public function post_emailcontent(){
		$View = View::make('admin.userdata');
		if(Input::get('email_id')!=""){
			
			$email_id=Input::get('email_id');
			if($email_id==1){
				$email_content=" Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,";
			}
			elseif($email_id==2){
				$email_content="Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.";
			}
			elseif($email_id==3){
				$email_content="In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.";
			}
			elseif($email_id==4){
				$email_content="Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,";
			}
			
			$rec_arr=array("email_content"=>$email_content);
				
			echo json_encode($rec_arr);
			
		}
	}
	
	public function get_adminmanagement(){
		$user = Sentry::user();
		$View = View::make('admin.adminmanagement');
		$View->title = "Admin Management";
		$View->recordCount=0;
		$View->hospital_name="";
		$View->company_name="";
		$View->recruiter_name="";
		$View->needs_attention=0;
		$View->method='get';
		return $View;
	}
	
	public function post_adminmanagement(){
		$user = Sentry::user();
		$View = View::make('admin.adminmanagement');
		$View->title = "Admin Management";
		
		$hospital_name=Input::get('hospital_name');
		$company_name=Input::get('company_name');
		$recruiter_name=Input::get('recruiter_name');
		$needs_attention=Input::get('needs_attention');
		
		if($needs_attention=='on'){
			$needs_attention=1;
		}
		else{
			$needs_attention=0;
		}
		
		$where="";
		
		if($hospital_name!=""){
			$where.="where hospitalName='".$hospital_name."'";
		}
		
		if($company_name!=""){
			if($where==""){
			$where.="where companyName='".$company_name."'";
			}
			else{
			$where.=" and companyName='".$company_name."'";	
			}
		}
		
		if($recruiter_name!=""){
			if($where==""){
			$where.="where recruiterName='".$recruiter_name."'";
			}
			else{
			$where.=" and recruiterName='".$recruiter_name."'";	
			}
		}
		
		
			if($where==""){
			$where.="where needsAttention='".$needs_attention."'";
			}
			else{
			$where.=" and needsAttention='".$needs_attention."'";	
			}
		
		
		$sql="Select * from admin_management $where";
		$View->summaryTable = DB::QUery($sql);
		// Summary table data ends here
		$View->recordCount=count($View->summaryTable);
		$View->hospital_name=$hospital_name;
		$View->company_name=$company_name;
		$View->recruiter_name=$recruiter_name;
		$View->needs_attention=$needs_attention;
		$View->method='post';
		
		return $View;
	}
	
	public function post_managementdetail(){
		
		$View = View::make('admin.managementdetail');
		
		// Detail table data start here
		$hospital_id=Input::get('hospital_id');
		
		$sql1="Select * from recruited_physicians where hospital_id='".$hospital_id."'";
		$View->recruitedPhysician = DB::QUery($sql1);
		
		
		$sql2="Select * from company_history where hospital_id='".$hospital_id."'";
		$View->companyHistory = DB::QUery($sql2);
		
		
		$sql3="Select * from hospital_comments where hospital_id='".$hospital_id."' order by id desc";
		$View->commmentList = DB::QUery($sql3);
		
		$View->hospital_id= $hospital_id;
		// Detail table data ends here
		
		return $View;
		
	}
	
	public function post_updatehospitalrelationship(){
		
		$hospital_id=Input::get('hospital_id');
		$relationship_status=Input::get('relationship_status');
		$db_field=Input::get('db_field');
		$table_name=Input::get('table_name');
		
		$sql="update $table_name set $db_field='".$relationship_status."' where id='".$hospital_id."'";
		$View->summaryTable = DB::QUery($sql);
		
	}
	
	public function post_savecomment(){
		$View = View::make('admin.savecomment');
		$hospital_id=Input::get('hospital_id');
		$comment=Input::get('comment');
		
		$sql="insert into hospital_comments set comment='".addslashes($comment)."', hospital_id='".$hospital_id."'";
		$View->insertComment = DB::QUery($sql);
		
		$sql3="Select * from hospital_comments where hospital_id='".$hospital_id."' order by id desc";
		$View->commmentList = DB::QUery($sql3);
		return $View;
	}
	
	public function post_jobsave(){
		if(Input::get('field_value')!=""){
			$hospital_id=Input::get('hospital_id');
			$field_value=Input::get('field_value');
			$db_field=Input::get('db_field');
			$job_id=time();
			$selectRecords = DB::QUery("select * from jobs_edw where hospid='".$hospital_id."'");
			if(count($selectRecords)==0){
				$updateRecords = DB::QUery("insert into jobs_edw set ".$db_field."='".addslashes($field_value)."',hospid='".$hospital_id."',JobID='".$job_id."'");
			}
			else{
				$updateRecords = DB::QUery("update jobs_edw set ".$db_field."='".addslashes($field_value)."' where hospid='".$hospital_id."'");
			}
		}
	}
	
	public function post_emaillist(){
		$View = View::make('admin.emaillist');
		$email=Input::get('email');
		$key_value=Input::get('key_value');
		$hospital_id=Input::get('hospital_id');
		$View->emailList = DB::QUery("select Contact_Email,JobID from jobs_edw where Contact_Email Like '%".$email."%' group by Contact_Email");
		$View->key_value= $key_value;
		$View->hospital_id= $hospital_id;
		return $View;
	}
	
	public function post_savefields(){
		$job_id=Input::get('job_id');
		$hospital_id=Input::get('hospital_id');
		$jobid=time();
		$result = DB::QUery("select Contact_Email,Contact_Name,Contact_Phone from jobs_edw where JobID ='".$job_id."'");
		foreach($result as $rec){
				$rec_arr=array("contact_email"=>$rec->contact_email,"contact_name"=>$rec->contact_name,"contact_phone"=>$rec->contact_phone);
		}
		
		$selectRecords = DB::QUery("select * from jobs_edw where hospid='".$hospital_id."'");
		if(count($selectRecords)==0){
	$updateRecords = DB::QUery("insert into jobs_edw set Contact_Email='".addslashes($rec_arr["contact_email"])."',Contact_Name='".addslashes($rec_arr["contact_name"])."',Contact_Phone='".addslashes($rec_arr["contact_phone"])."',JobID='".$jobid."'");
		}
		else{
	$updateRecords = DB::QUery("update jobs_edw set Contact_Email='".addslashes($rec_arr["contact_email"])."',Contact_Name='".addslashes($rec_arr["contact_name"])."',Contact_Phone='".addslashes($rec_arr["contact_phone"])."' where hospid='".$hospital_id."'");
		}
		
		echo json_encode($rec_arr);
		
		
	}
	
	public function post_savepopup(){
		$jobid=time();
		$hospital_id=Input::get('hospital_id');
		$email=Input::get('email');
		$first_name=Input::get('first_name');
		$last_name=Input::get('last_name');
		$ph_number=Input::get('ph_number');
		$company_name=Input::get('company_name');
		$association=Input::get('association');
		$username=$first_name." ".$last_name;
		
		$rec_arr=array("contact_email"=>$email,"contact_name"=>$username,"contact_phone"=>$ph_number,"company_name"=>$company_name,"association"=>$association);
		
		$selectRecords = DB::QUery("select * from jobs_edw where hospid='".$hospital_id."'");
		if(count($selectRecords)==0){
	$updateRecords = DB::QUery("insert into jobs_edw set Contact_Email='".addslashes($email)."',Contact_Name='".addslashes($username)."',Contact_Phone='".addslashes($ph_number)."',JobID='".$jobid."'");
		}
		else{
	$updateRecords = DB::QUery("update jobs_edw set Contact_Email='".addslashes($email)."',Contact_Name='".addslashes($username)."',Contact_Phone='".addslashes($ph_number)."' where hospid='".$hospital_id."'");
		}
		
		$result1 = DB::QUery("Insert into users set email='".addslashes($email)."',username='".addslashes($username)."'");
		$us_id=DB::Query('SELECT id from users order by id desc limit 1');
		$user_id=$us_id[0]->id;
		$result2 = DB::QUery("Insert into users_metadata set first_name='".addslashes($first_name)."', last_name='".addslashes($last_name)."', phone='".addslashes($ph_number)."', user_id='".$user_id."'");
		$result3 = DB::QUery("Insert into recruiter set id='".$user_id."',Company='".addslashes($company_name)."',association='".addslashes($association)."'");
		
		echo json_encode($rec_arr);
		
	}
	
}