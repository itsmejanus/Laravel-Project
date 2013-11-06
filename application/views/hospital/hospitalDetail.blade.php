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
	padding:10px 0px 33px 0px;
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
	margin:0px 0px 0px 0px;
	font-size:14px;
}

.HospitalsPageLeft {
	width:250px;
	float:left;
	margin:0px 0px 0px 0px;
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
	margin:0px 0px 0px 0px;
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

div.container {
	width: 100%;
	float:left;
}
div.pop-up {
	display: none;
	position: absolute;
	width: 200px;
	padding: 10px;
	background: #eeeeee;
	color: #000000;
	border: 1px solid #1a1a1a;
	font-size: 90%;
}
</style>
<script language="javascript" type="text/javascript">
function get_detail(id){
	document.getElementById("hospital_id").value=id;
	document.detail_form.submit();
}

$(function() {
	var moveLeft = 20;
	var moveDown = 10;
	$('a.trigger').hover(function(e) {
		$('div.pop-up').show();
		
        }, function() {
          $('div.pop-up').hide();
        });
        
        $('a.trigger').mousemove(function(e) {
          $("div.pop-up").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
        });
        
      });
	  
function save_data(textarea_id,db_field){
	var textareaVal=document.getElementById(textarea_id).value,
		job_id=document.getElementById("job_id").value;
		
        $.ajax({
             type: "POST",
             url: "hospitalsave",
             data: {textData:textareaVal,db_field:db_field,job_id:job_id},
             success: function(msg) {
             }
       });
}	  
	  
</script>
@include('layouts.header')
<!--- Content --->
 <div class="Content">
    <div class="Wrapper">
	 <!--<h1 class="ContentHeading">Hello Dr. Michael Gray</h1>-->
     <div class="ContentPageData">
     <!--- HospitalsPageLeft --->
	    <div class="HospitalsPageLeft">
	     <div class="PageleftMenu">
		  <ul>
          @foreach ($HospitalList as $key=>$hospital)
          	@if($key % 2 == 0)
		   <li><div style="float:left;"><a href="#" title="{{$hospital->name}}" onclick="get_detail('{{$hospital->id}}');">{{$hospital->name}}</a></div><div style="float:left;margin-left:5px;"><img src="images/activity.png" /></div></li>
           @endif
           @if($key % 2 != 0)
		   <li><a href="#" title="{{$hospital->name}}" onclick="get_detail('{{$hospital->id}}');">{{$hospital->name}}</a></li>
           @endif
		  @endforeach
		  </ul>
		 </div>
		 
	    
		</div>
	   <!--- /HospitalsPageLeft --->
<div class="PageConetentRight" style="border:0px;" id="main_hospital_div">
<form action="hospitaldetail" method="post" name="detail_form" id="detail_form">
<input type="hidden" name="hospital_id" id="hospital_id"  value=""/>
</form>
<div style="float:left;width:100%;">
@if($HospitalCount>0)
@foreach ($HospitalDetailArray as $hospital)
<table width="100%">
<tr>
<td colspan="3" align="center" style="font-weight:bold;">{{$hospital->name}}</td>
</tr>
<tr>
<td align="left" style="font-weight:bold;">Hospital Contact</td>
<td align="left">{{$hospital->city}}, {{$hospital->state}} {{$hospital->zip}}</td>
<td align="left"><span style="font-weight:bold;float:left;">Date Hospital Management Began:</span> <span style="float:left;">{{$hospital->startDateOfManagement}}</span></td>
</tr>
<tr>
<td align="left" style="font-weight:bold;">Name</td>
<td align="left">{{$hospital->contactName}}</td>
<td>&nbsp;</td>
</tr>
<tr>
<td align="left" style="font-weight:bold;">Email</td>
<td align="left">{{$hospital->contactEmail}}</td>
<td>&nbsp;</td>
</tr>
<tr>
<td align="left" style="font-weight:bold;">Phone</td>
<td align="left">{{$hospital->contactPhone}}</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td align="left"><span style="font-weight:bold;float:left;margin-left:14px;"><input type="text" name="job_type" id="job_type" value="{{$hospital->jobTitile}}" onblur="save_data('job_type','Position')"/></span></td>
</tr>
<tr>
<td colspan="3">
<table width="100%">
<tr>
<td><textarea rows="10" name="about_hospital" id="about_hospital" style="width:96%; margin-bottom:0; border-radius:0px;" onblur="save_data('about_hospital','LPara')">{{$hospital->aboutHosp}}</textarea></td>
<td><textarea rows="10" name="about_position" id="about_position" style="width:96%; margin-bottom:0; border-radius:0px;" onblur="save_data('about_position','CPara')">{{$hospital->aboutJob}}</textarea><input type="hidden" name="job_id" id="job_id"  value="{{$job_id}}"/></td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan="3">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
         <td>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="16%" class="TableCalss2" style="text-align:center;" valign="top">User Name</td>
    <td width="10%" class="TableCalss2" style="text-align:center;" valign="top">Mail</td>
    <td width="22%" class="TableCalss2" style="text-align:center;" valign="top">Document Release</td>
    <td width="16%" class="TableCalss2" style="text-align:center;" valign="top">Connected</td>
    <td width="16%" class="TableCalss2" style="text-align:center;" valign="top">Notes</td>
    <td width="16%" class="TableCalss2" style="text-align:center;" valign="top">Remove</td>
  </tr>
  @foreach ($UsersListArray as $key=>$users)
  <tr>
    <td class="TableCalss3" style="text-align:center;">{{ $users-> userName}} </td>
    <td class="TableCalss4" style="text-align:center;">{{ $users-> countOfNewMsgs}} </td>
    @if($key % 2 == 0)
    <td class="TableCalss3" style="text-align:center;"><img src="images/document_release.png" /></td>
    <td class="TableCalss3" style="text-align:center;"><img src="images/connect_grey.png" /></td>
    @endif
    @if($key % 2 != 0)
    <td class="TableCalss3" style="text-align:center;"><img src="images/document-request.png" /></td>
    <td class="TableCalss3" style="text-align:center;"><img src="images/connect.png" /></td>
    @endif
    <td class="TableCalss3" style="text-align:center;">
    <div class="container">
      <a href="#" class="trigger"><img src="images/notes.png" /></a>
      
      <!-- HIDDEN / POP-UP DIV -->
      <div class="pop-up">
        <p>
        This is a test note to display on hover.
        </p>
      </div>
      
    </div>
    </td>
    <td class="TableCalss5" style="text-align:center;"><img src="images/delete_record.png" /></td>
  </tr>
  @endforeach
</table>
</td>
        </tr>
       </table>
</td>
</tr>
</table>
@endforeach
@endif
</div>	  
</div>
@include('layouts.footer')	  
@endsection