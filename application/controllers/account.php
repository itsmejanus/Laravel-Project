<?PHP

class Account_Controller extends Base_Controller {

	public $restful = true;
	public $layout = 'layouts.default';
	
	public function get_login($message=NULL) {
			$View = View::make('account.login');
			$View->title = 'login';
			$View->message = $message;
			return $View;
	}
	
	public function post_login() {
		if (Input::get('email')  &&  Input::get('password'))
		{
			try
			{
			    // log the user in
				#echo 'aaaaaa';
				#return Redirect::to(Session::get('login_redirect', '/testpage'));
				#exit;
			    $valid_login = Sentry::login(Input::get('email'), Input::get('password'), Input::get('remember-me'));
			    if ($valid_login)
			    {
			    	return Redirect::to(Session::get('login_redirect', '/testpage'));
					
					
			        // the user is now logged in - do your own logic
			    }
			    else
			    {
			    	$View = View::make('account.login')->with('Error', 'That login/password was not recognized.  Please try again.');;
					$View->title = 'login';
					return $View;
			    }
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
	
	public function get_logout() {
		Sentry::logout();
		return Redirect::to('/')->with('message', 'You have been logged out.');		
	}
	
	public function get_resetpassword() {
			$View = View::make('account.resetpassword');
			$View->title = 'Reset Password';
			return $View;
		

	}
	
	public function post_resetpassword() {
			$View = View::make('account.newpassword');
			$View->title = 'Create new password';
			
			$email=Input::get('email');
			$View->userData = DB::QUery("select username,id
										from users 
										where email ='".addslashes($email)."'");
			$View->email=$email;							
			return $View;
		

	}
	
	public function post_changepassword() {
			
			$password=Input::get('new_pass');
			$email=Input::get('email');
			$res=Sentry::reset_password($email,$password);
			Sentry::reset_password_confirm(base64_encode($email),$res["password_reset_hash"]);
			return Redirect::to('/login')->with('message', 'Your password has been changed.');	
	}
	
	public function get_userprofile($user_id){
		$user = Sentry::user();
		$View = View::make('account.userprofile');
		$View->title = "Profile Page";
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
	
	public function get_updateprofile(){
		$user = Sentry::user();
		$View = View::make('account.updateprofile');
		$View->title = "My jobs";
		if(count($user["user"])>0){
			$View->username = $user["metadata"]["first_name"]." ".$user["metadata"]["last_name"];
			$View->image = $user["metadata"]["pic"];
			$View->userUpdate = DB::QUery('select u.email,um.*
										from users u, users_metadata um 
										where u.id =um.user_id and u.id=?',
				$user['id']);
		}
		else{
			$View->username="";
			$View->image="";
			$View->userUpdate=array();
		}
		
		return $View;
		
	}
	
	public function post_updateprofile(){
		$user = Sentry::user();
		If (Input::get('email'))
		{
			try
			{
				
				$credentials = array('first_name' => Input::get('first_name'),'last_name' => Input::get('last_name'),'email' => Input::get('email'),'phone' => Input::get('phone'),'address' => Input::get('address'),'city' => Input::get('city'),'state' => Input::get('state'),'zip' => Input::get('zip'));
				DB::QUery('update users_metadata set first_name="'.$credentials["first_name"].'",last_name="'.$credentials["last_name"].'",phone="'.$credentials["phone"].'",address="'.$credentials["address"].'",city="'.$credentials["city"].'",state="'.$credentials["state"].'",zip="'.$credentials["zip"].'" where user_id=?',
				$user['id']);   
				
				return Redirect::to(Session::get('login_redirect', '/updateprofile'));
				
			}
			catch (Sentry\SentryException $e)
			{
			    $errors = $e->getMessage();
			}
		}
		else
		{
			$View = View::make('account.updateprofile');
			$View->title = 'updateprofile';
			return $View;
		}
			
	}
	
	public function get_signup() {
			$View = View::make('account.signup');
			$View->title = 'Recruiter Signup';
			return $View;
		

	}
	
	public function post_signup() {
		$user = Sentry::user();
		$View = View::make('account.signup');
		$View->title = 'Recruiter Signup';
		
		if (Input::get('email')  &&  Input::get('password'))
		{
			$email=Input::get('email');
			$first_name=Input::get('first_name');
			$last_name=Input::get('last_name');
			$password=Input::get('password');
			$account_type=Input::get('account_type');
			$display_name=Input::get('display_name');
			$hear_about=Input::get('hear_about');
			$metadata=array("first_name"=>$first_name,"last_name"=>$last_name,"type"=>$account_type);
			$user_array=array("email"=>$email,"username"=>$display_name,"password"=>$password,"metadata"=>$metadata);
			try
			{
				Sentry::register_user($user_array);
				$valid_login = Sentry::login($email, $password, 1);
				if ($valid_login)
			    {
			    	return Redirect::to(Session::get('login_redirect', '/testpage'));
			    }
				
			}
			catch (Sentry\SentryException $e)
			{
			    $errors = $e->getMessage();
			}
		}
		
		return $View;
	}

}