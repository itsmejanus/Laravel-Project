@layout('layouts.public')
@section('content')
<style type="text/css">
body {
	margin:0px;
	padding:0px;
	font-family:Calibri;
	font-size:12px;
}

img {
	border:0px;
}

h1,h2,h3,h4,h5,h7,p,strong {
	margin:0px;
	padding:0px;
}

.Wrapper {
	width:999px;
	margin:0px auto;
}

.Header {
	width:100%;
	float:left;
	margin:25px 0px 0px 0px;
}

.Logo {
	width:auto;
	float:left;
	font-size:42px;
	clear:both;
}

.Logo a{
	color:#ED1921;
	text-decoration:none;
}

.Logo a span{
	color:#000000;
}

.Menu {
	width:100%;
	float:left;
	margin:25px 0px 0px 0px;
}

.nav {
	width:100%;
	float:left;
}

.nav ul {
	margin:0px;
	padding:0px;
}

.nav li{
	width:auto;
	float:left;
	font-size:15px;
	list-style:none;
	margin-right:50px;
}

.nav li a{
	color:#000000;
	text-decoration:none;
}

.nav li a img{
	float:left;
	margin:-5px 5px 0px 0px;
}

.nav li a:hover{
	color:#ED1921;
	text-decoration:none;
}

.nav li a.active{
	color:#ED1921;
	text-decoration:none;
	font-family:"Courier New", Courier, monospace;
}


.Content {
	width:100%;
	float:left;
	background:#DDE4EE;
	padding:30px 0px 33px 0px;
	margin:20px 0px 0px 0px;
}

.ContentHeading {
	width:100%;
	float:left;
	font-size:18px;
	color:#6DB0DB;
}

.ContentDataBlock {
	width:997px;
	float:left;
	margin:20px 0px 0px 0px;
	border:1px solid #9B9B9B;
	font-size:14px;
}

.TableCalss1 {
	font-size:19px;
	color:#000000;
	padding:5px 0px 5px 10px;
	font-weight:bold;
}

.TableCalss2 {
	font-size:15px;
	color:#000000;
	padding:4px 0px 4px 10px;
	font-weight:bold;
}

.TableCalss3 {
	color:#000000;
	padding:6px 0px 6px 10px;
}

.TableCalss4 {
	color:#569FCE;
	padding:6px 0px 6px 10px;
}

.TableCalss4 a{
	color:#569FCE;
	text-decoration:underline;
}

.TableCalss4 a:hover{
	color:#569FCE;
	text-decoration:none;
}

.TableCalss5 {
	color:#EC1A24;
	padding:6px 0px 6px 10px;
}

.TableCalss5 a{
	color:#EC1A24;
	text-decoration:underline;
}

.TableCalss5 a:hover{
	color:#EC1A24;
	text-decoration:none;
}


.Footer {
	width:100%;
	float:left;
	background:#64656A;
	padding:50px 0px 25px 0px;
	color:#A1A1A1;
}

.Footer a{
	color:#A1A1A1;
	text-decoration:none;
	margin-left:13px;
}

.Footer a:hover{
	color:#A1A1A1;
	text-decoration:underline;
}

.Footerlink {
	width:100%;
	float:left;
	margin:5px 0px 5px 0px;
}

.Footerlink a{
	color:#ffffff;
	text-decoration:none;
	margin-right:10px;
	margin-left:0px;
}

.Footerlink a:hover{
	color:#ffffff;
	text-decoration:underline;
}
.ContentPageData {
	width:999px;
	float:left;
	margin:20px 0px 0px 0px;
	font-size:14px;
}

.HospitalsPageLeft {
	width:250px;
	float:left;
	margin:10px 0px 0px 0px;
} 

.TopProfileBlock {
	width:100%;
	float:left;
}

.Useriocn {
	width:24px;
	float:left;
	padding:4px 4px 0px 4px;
	border:1px solid #616161;
}

.UsericonInfo {
	width:200px;
	float:left;
	margin:6px 0px 0px 10px;
}

.PageleftMenu {
	width:100%;
	float:left;
	margin:30px 0px 0px 0px;
}

.PageleftMenu ul{
	margin:0px;
	padding:0px;
}

.PageleftMenu li{
	width:100%;
	float:left;
	list-style:none;
	margin:10px 0px 0px 0px;
}

.PageleftMenu li a{
	color:#3E3E3E;
	text-decoration:none;
}

.PageleftMenu li a:hover,.PageleftMenu li a.active{
	color:#FF0000;
	text-decoration:none;
}

.PageConetentRight {
	width:728px;
	float:right;
	border:1px solid #4B4B4B;
}

.RightHead {
	width:720px;
	float:left;
	background:#ffffff;
	padding:4px 0px 4px 8px;
	font-size:16px;
}

.RightContentInner {
	width:698px;
	float:left;
	background:#CBD0D6;
	padding:15px;
}

.Formdata {
	width:320px;
	float:left;
	margin:15px 0px 0px 0px;
}

.Formdata p {
	width:100%;
	float:left;
}

.Formdata span{
	width:100%;
	float:left;
	margin:7px 0px 0px 0px;
}

.TextFiledinner {
	width:313px;
	float:left;
	background:#ffffff;
	border:1px solid #A8A9AA;
	height:22px;
	line-height:22px;
	padding-left:5px;
	font-size:13px;
}

.FormDataRight {
	float:right;
}

.FormDataRightA {
	width:100%;
}



.FormDataRightB {
	width:690px;
}

.FormDataRightC {
	width:150px;
}

.FormDataRightD {
	width:150px;
	margin-right:9px;
	float:right;
}

.FormDataRightE {
	margin-left:29px;
}

.FormButton {
	width:auto;
	float:left;
	background:#BAD9ED;
	padding:5px 10px 5px 10px;
	color:#454545;
	font-size:14px;
	cursor:pointer;
	display:block;
	border:1px solid #808080;
}

.FormButton:hover {
	color:#FF0000;
}

.navmarginA {
	float:right !important;
	margin-right:0px !important;
}

.navmargin {
	float:right !important;
}

.SearchFormTitle{
	
	width: 98%; text-align: center; font-weight: bold; height:35px; line-height:35px; font-family: Calibri; font-size: 8px;
}

.MainTable {
	width:999px;
	margin:0px auto;
}


.Maindata {
	width:100%;
	float:left;
}

.BlockMain {
	width:190px;
	float:left;
}

.Heading {
	color:#272727;
	font-size:12px;
	float:left;
	margin:0;
	width:100%;
	font-family:Calibri;
}

.DataBlock {
	width:178px;
	float:left;
	border:1px solid #272727;
	padding:5px;
}

.BlockStyle {
	margin-left:12px;
}

.BlockStyleA {
	float:right;
}


.ContentData {
	width:322px;
	float:left;
}

.DataBlock_new {
	width:320px;
	float:left;
	border:1px solid #272727;
}

.ButtonDiv {
	width:100%;
	float:left;
	margin-top:6px;
}

.Button {
	width:auto;
	float:left;
	padding:4px 10px 4px 10px;
	cursor:pointer;
	border:1px solid #C3C3C3;
	color:#272727;
	font-size:11px;
	background:#F0F0F0;
}

.Button:hover {
	background:#CCCCCC;
}
</style>
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
<script language="javascript">
function validate_form(){
	var email=document.getElementById("email").value;
	var first_name=document.getElementById("first_name").value;
	var last_name=document.getElementById("last_name").value;
	var password=document.getElementById("password").value;
	var re_password=document.getElementById("re_password").value;
	var individual=document.getElementById("individual").checked;
	var company=document.getElementById("company").checked;
	var display_name=document.getElementById("display_name").value;
	var hear_about=document.getElementById("hear_about").value;
	var terms=document.getElementById("terms").checked;
	var valid_email=validateEmail(email);
	
		if(email==""){
			alert("Please enter email address");
			return false;
		}
		else if(valid_email==false){
			alert("Please enter a valid email.");
			return false;
		}
		else if(first_name==""){
			alert("Please enter first name.");
			return false;
		}
		else if(last_name==""){
			alert("Please enter last name.");
			return false;
		}
		else if(password==""){
			alert("Please enter password.");
			return false;
		}
		else if(re_password==""){
			alert("Please retype password.");
			return false;
		}
		else if(password!=re_password){
			alert("Passwords do not match.");
			return false;
		}
		else if(individual==false && company==false){
			alert("Please choose an account type.");
			return false;
		}
		else if(display_name==""){
			alert("Please enter display name.");
			return false;
		}
		else if(terms==false){
			alert("Please accept our terms of service.");
			return false;
		}
		else
		{
			document.signup_form.submit();
		}
}

function validateEmail(email) 
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
</script>
@include('layouts.header')
<div class="MianContent">
<div style="margin-top:20px;" class="AccountPage">
    
	<div class="Signinheading">Create a Recruiter Account</div>
	 <div class="Sigindata">Already have a account? <a href="login">Sign in</a>.</div>
     <form action="signup" method="post" name="signup_form" id="signup_form">
   
     <div class="AccountLeft">
	  <span style="float:left; width:100%; margin-top:5px;">Email Address</span>
	  <span style="float:left; width:98%; margin-top:5px;"><input name="email" id="email" type="text" class="TextFieldAdmin" /></span>
	  <span style="float:left; width:100%; margin-top:5px;">First name</span>
	  <span style="float:left; width:98%; margin-top:5px;"><input name="first_name" id="first_name" type="text" class="TextFieldAdmin" /></span>
	  <span style="float:left; width:100%; margin-top:5px;">Last name</span>
	  <span style="float:left; width:98%; margin-top:5px;"><input name="last_name" id="last_name" type="text" class="TextFieldAdmin" /></span>
	  <span style="float:left; width:100%; margin-top:5px;">Password</span>
	  <span style="float:left; width:98%; margin-top:5px;"><input name="password" id="password" type="password" class="TextFieldAdmin" /></span>
	  <span style="float:left; width:100%; margin-top:5px;">Retype Password</span>
	  <span style="float:left; width:98%; margin-top:5px;"><input name="re_password" id="re_password" type="password" class="TextFieldAdmin" /></span>
	 </div>
	 
	 <div class="AccountRight">
	 <span style="float:left; width:100%; margin-top:5px;">Account Type</span>
	 <span style="float:left; width:100%; margin-top:5px;">how do you want to register your self</span>
	 <span style="float:left; width:100%; margin-top:5px;">
	 <span style="float:left;"><input name="account_type" id="individual" type="radio" value="1" /> </span>
	   <span style="float:left; margin:3px 0px 0px 5px;"> Individual</span>
	   <span style="float:left; margin-left:10px;"><input name="account_type" id="company" type="radio" value="2" /> </span>
	   <span style="float:left; margin:3px 0px 0px 5px;"> Company</span>
	   
	 </span>
	 <span style="float:left; width:100%; margin-top:10px;">Display name</span>
	 <span style="float:left; width:98%; margin-top:8px;"><input name="display_name" id="display_name" type="text" class="TextFieldAdmin" /></span>
	  <span style="float:left; width:98%; margin-top:5px;"><span style="float:left;"><input name="display_check" id="display_check" type="checkbox" value="" /> </span>
	   <span style="float:left; margin:3px 0px 0px 5px;">Display last name only</span></span>
	  <span style="float:left; width:100%; margin-top:10px;">how did you hear about us</span>
	 <span style="float:left; width:98%; margin-top:8px;">
     <select name="hear_about" id="hear_about" style="width:99%;">
     <option value="-1">Select</option>
     <option value="1">Friend</option>
     <option value="2">Family</option>
     <option value="3">News Paper</option>
     <option value="4">Other Website</option>
     <option value="5">Other</option>
     </select>
     </span>
     <span style="float:left; width:98%; margin-top:5px;"><span style="float:left;"><input name="terms" id="terms" type="checkbox" value="" /> </span>
	   <span style="float:left; margin:3px 0px 0px 5px;">I have read and accept the terms of service.</span></span>
	   
	 <span style="float:left; width:100%; margin-top:10px;">
	   <input name="btn_submit" id="btn_submit" type="button" value="Register" class="ButtonSignin" onclick="validate_form();"/>
	  </span>
	 </div>
	 </form>
	
   </div>
</div>
@endsection