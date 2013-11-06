@layout('layouts.public')
@section('content')
<style>

body {
	margin:0px;
	padding:0px;
	font-family:Calibri;
	font-size:11px;
}

.MianContent {
	width:999px;
	margin:0px auto;
}

.TopAdmin {
	width:100%;
	float:left;
}


.MainForm {
	width:18%;
	float:left;
	margin-right:1%;
}

.MainFormA {
	width:82px;
	float:left;
	margin-top:19px;
}

.MainFormB {
	width:15%;
	float:left;
}


.TextFieldAdmin {
	width:99%;
	float:left;
	border:1px solid #cccccc;
	height:24px;
	line-height:24px;
}

.StyleAdmin1 {
	float:left; width:100%;
}

.StyleAdmin2 {
	float:left; width:100%;margin-top:6px;
}

.StyleAdmin3 {
	float:left; width:100%;margin-top:23px;
}

.ButtonAdmin {
	width:80px;
	float:left;
	border:1px solid #cccccc;
	height:22px;
	text-align:center;
	background:#cccccc;
	cursor:pointer;
	text-align:center;
	font-size:12px;
	font-family:Calibri;
}

.ButtonAdmin:hover {
	border:1px solid #353535;
}


.AdminTable {
	width:100%;
	float:left;
	margin-top:15px;
	border:1px solid #cccccc;
	border-bottom:none;
}

.TableStyle {
	padding-left:5px; border-right:1px solid #cccccc; border-bottom:1px solid #cccccc;
}

.TableStyle1 {
	padding-left:5px; border-bottom:1px solid #cccccc;
}

.AttentionDiv {
	width:35%;
	float:right;
	border:1px solid #cccccc;
	margin-top:15px;
}

.innerTable {
	width:98%;
	float:left;
	border:1px solid #cccccc;
	margin:10px 0px 0px 1%;
	border-bottom:none;
}

.TableWidthLeft {
	width:64%;
	float:left;
	margin-top:15px;
	border:1px solid #cccccc;
	border-bottom:none;
	
}


.Siginpage {
	width:300px;
	float:left;
	border:1px solid #3C8C28;
	padding:10px;
}

.Signinheading {
	width:100%;
	float:left;
	font-size:14px;
	font-weight:bold;
}

.Signinsocial {
	width:auto;
	float:right;
	font-size:11px;
}

.Signinsocial img {
	width:22px;
	height:22px;
	float:left;
	margin-left:4px;
}

.Sigindata {
	width:100%;
	float:left;
	margin:10px 0px 0px 0px;
}

.ButtonSignin {
	width:80px;
	float:left;
	border:1px solid #ffffff;
	height:22px;
	text-align:center;
	background:#519B3E;
	cursor:pointer;
	text-align:center;
	font-size:12px;
	font-family:Calibri;
	color:#ffffff;
}

.ButtonSignin:hover {
	background:#3C8C28;
}


.passwordPage {
	width:450px;
	float:left;
	margin-left:20px;
	border:1px solid #3C8C28;
	padding:10px;
}


.AccountPage {
	width:978px;
	float:left;
	border:1px solid #3C8C28;
	padding:10px;
}


.AccountLeft {
	width:350px;
	float:left;
	margin-top:20px;
}

.AccountRight {
	width:550px;
	float:right;
	margin-top:20px;
}
	

</style>
<div class="MianContent">
<div style="margin-top:20px;" class="AccountPage">
    
	<div class="Signinheading">Create a Recruiter Account</div>
	 <div class="Sigindata">Already have an account? Sign in.Looking to hire? Register as a client</div>
   
     <div class="AccountLeft">
	  <span style="float:left; width:100%; margin-top:5px;">Email Address</span>
	  <span style="float:left; width:98%; margin-top:5px;"><input name="" type="text" class="TextFieldAdmin" /></span>
	  <span style="float:left; width:100%; margin-top:5px;">First name</span>
	  <span style="float:left; width:98%; margin-top:5px;"><input name="" type="text" class="TextFieldAdmin" /></span>
	  <span style="float:left; width:100%; margin-top:5px;">Last name</span>
	  <span style="float:left; width:98%; margin-top:5px;"><input name="" type="text" class="TextFieldAdmin" /></span>
	  <span style="float:left; width:100%; margin-top:5px;">Password</span>
	  <span style="float:left; width:98%; margin-top:5px;"><input name="" type="text" class="TextFieldAdmin" /></span>
	  <span style="float:left; width:100%; margin-top:5px;">Retype Password</span>
	  <span style="float:left; width:98%; margin-top:5px;"><input name="" type="text" class="TextFieldAdmin" /></span>
	 </div>
	 
	 <div class="AccountRight">
	 <span style="float:left; width:100%; margin-top:5px;">Account Type</span>
	 <span style="float:left; width:100%; margin-top:5px;">how do you want toregister your self</span>
	 <span style="float:left; width:100%; margin-top:5px;">
	 <span style="float:left;"><input name="" type="radio" value="" /> </span>
	   <span style="float:left; margin:3px 0px 0px 5px;"> Individual</span>
	   <span style="float:left; margin-left:10px;"><input name="" type="radio" value="" /> </span>
	   <span style="float:left; margin:3px 0px 0px 5px;"> Company</span>
	   
	 </span>
	 <span style="float:left; width:100%; margin-top:10px;">Display name</span>
	 <span style="float:left; width:98%; margin-top:8px;"><input name="" type="text" class="TextFieldAdmin" /></span>
	  <span style="float:left; width:98%; margin-top:5px;"><span style="float:left;"><input name="" type="checkbox" value="" /> </span>
	   <span style="float:left; margin:3px 0px 0px 5px;">Display last name only</span></span>
	  <span style="float:left; width:100%; margin-top:10px;">how did you hear about us</span>
	 <span style="float:left; width:98%; margin-top:8px;"><input name="" type="text" class="TextFieldAdmin" /></span>
	 <span style="float:left; width:98%; margin-top:5px;"><span style="float:left;"><input name="" type="checkbox" value="" /> </span>
	   <span style="float:left; margin:3px 0px 0px 5px;">Display last name only</span></span>
	   
	 <span style="float:left; width:100%; margin-top:10px;">
	   <input name="" type="button" value="Register" class="ButtonSignin" />
	  </span>
	 </div>
	 
	
   </div>
</div>
@endsection