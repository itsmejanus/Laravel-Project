<?php

class TestCT_Controller extends Base_Controller {
	public $restful = true;
	public function get_testdata()
	{	
		$user = Sentry::user();
		$View = View::make('testview.testpage');
		$View->title = "My jobs";
		if(count($user["user"])>0){
		$View->username = $user["metadata"]["first_name"]." ".$user["metadata"]["last_name"];
		$View->image = $user["metadata"]["pic"];
		$View->hospitals = DB::QUery('select j.created_at date_posted, j.position job_title, j.hname, j.location, h.alias,j.JobID,h.id 
										from hospitals h, jobs_edw j 
										where h.id in (select target from connections where type = \'hospital\' and Follower = ?) and h.id = j.hospid order by j.created_at desc;',
				$user['id']);
		
		$View->userUpdate = DB::QUery('select u.email,um.*
										from users u, users_metadata um 
										where u.id =um.user_id and u.id=?',
				$user['id']);		
		}
		else
		{
			$View->username="";
			$View->image="";
			$View->hospitals=array();
			$View->userUpdate=array();
		}
		return $View;
	}
	public function post_deletejob(){
		#echo Input::get('jobid');exit;
		if (Input::get('id')  )
		{
			try
			{
				DB::QUery('delete from jobs_edw where JobID=?',Input::get('id'));
				return Redirect::to(Session::get('login_redirect', '/testpage'));					
				}
			catch (Sentry\SentryException $e)
			{
			    // issue logging in via Sentry - lets catch the sentry error thrown
			    // store/set and display caught exceptions such as a suspended user with limit attempts feature.
			    $errors = $e->getMessage();
			}
		}
		else
		{
			$View = View::make('account.login');
			$View->title = 'login';
			return $View;
		}
	}
}