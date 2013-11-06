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
	line-height:20px !important;
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
	height:80px;
    overflow-y:auto;
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
<style type="text/css">

.MianContent {
	width:98%;
	margin:8px;
}

.TopAdmin {
	width:100%;
	float:left;
	margin-bottom:10px;
}


.MainForm {
	width:18%;
	float:left;
	margin-right:2%;
}

.MainFormA {
	width:82px;
	float:left;
	margin-top:25px;
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


</style>
<script language="javascript">
function get_email_content(email_div,email_id){
	for(var i=1;i<5;i++){
		if(email_id==i){
			document.getElementById("sender"+email_div+"_td"+i).style.backgroundColor="#cccccc";
		}
		else{
			document.getElementById("sender"+email_div+"_td"+i).style.backgroundColor="#ffffff";
		}
	}
	$.ajax({
    type: "POST",
    url: 'emailcontent',
    data: { email_id: email_id }
}).done(function(msg) {
	var obj=JSON.parse(msg);
	document.getElementById("content_email"+email_div).style.display='block';
	document.getElementById("content_email"+email_div).innerHTML=obj.email_content;
});
	
}
function show_half_data(hospital_id,row_id,record_count){
	$.ajax({
    type: "POST",
    url: 'managementdetail',
    data: { hospital_id: hospital_id }
}).done(function(msg) {
	document.getElementById("full_data").style.display='none';
	document.getElementById("half_data").style.display='block';
	for(var i=0;i<record_count;i++){
		if(row_id==i){
			document.getElementById("half_row"+i).style.backgroundColor="#ccc";
		}
		else{
			document.getElementById("half_row"+i).style.backgroundColor="#fff";	
		}
	}
	document.getElementById("detail_data").innerHTML=msg;
});
	
	
}

function hospital_profile(hospital_id){
	window.location.href="hospitalprofile/"+hospital_id;
}

function update_relationship(hospital_id,relationship_status,db_field,table_name){
		if(relationship_status==true){
			relationship_status=1;
		}
		if(relationship_status==false){
			relationship_status=0;
		}
		
	$.ajax({
    type: "POST",
    url: 'updatehospitalrelationship',
    data: { hospital_id: hospital_id, relationship_status: relationship_status, db_field: db_field, table_name:table_name }
}).done(function(msg){
	
	});
}

function save_comment(hospital_id,e){
	if(e && e.keyCode == 13){
		var comment=document.getElementById("comment").value;
		$.ajax({
			type: "POST",
			url: 'savecomment',
			data: { hospital_id: hospital_id, comment: comment }
			}).done(function(msg){
			document.getElementById("comment_div").innerHTML=msg;
			document.getElementById("comment").value="";
			});
	}
}

</script>
@include('layouts.header')
<div class="PageConetentRight" style="margin-bottom:5px;width:99.9%;float:left;" id="page_right">
<div class="MianContent">
   
    
   <div class="TopAdmin">
    <form action="adminmanagement" method="post" name="management_form" id="management_form">
	<div class="MainForm">
	 <span class="StyleAdmin1">Hospital Name</span>
	 <span class="StyleAdmin2"><input name="hospital_name" id="hospital_name" type="text" class="TextFieldAdmin" value="{{$hospital_name}}"/></span>
	</div>
	
	<div class="MainForm">
	 <span class="StyleAdmin1">Company Name</span>
	 <span class="StyleAdmin2">
	 <input name="company_name" id="company_name" type="text" class="TextFieldAdmin" value="{{$company_name}}"/>
     </span>
	</div>
	
	<div class="MainForm">
	 <span class="StyleAdmin1">Recruiter  Name</span>
	 <span class="StyleAdmin2"><input name="recruiter_name" id="recruiter_name" type="text" class="TextFieldAdmin" value="{{$recruiter_name}}"/></span>
	</div>
	
	<div class="MainFormB">
	 <span class="StyleAdmin3">
     <span style="float:left; margin:3px 5px 0px 0px;">Needs attention</span>
     <span style="float:left;">
     @if($needs_attention==0)
     <input name="needs_attention" id="needs_attention" type="checkbox" />
     @endif
     @if($needs_attention==1)
     <input name="needs_attention" id="needs_attention" type="checkbox" checked="checked"/>
     @endif
     </span>
     </span>
	</div>
	
	<div class="MainFormA">
    <input name="btn_submit" id="btn_submit" type="submit" class="Button" value="Search" />
    </div>
	</form>
   
   </div>
	@if($recordCount>0)
    <div style="width:100%;float:left;" id="full_data">
   <div class="AdminTable">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
      <td width="13%" class="TableStyle"><strong>Hospital name</strong></td>
      <td width="11%" class="TableStyle"><strong>Date of Attachment</strong></td>
      <td width="14%" class="TableStyle"><strong>Company Name</strong></td>
      <td width="12%" class="TableStyle"><strong>Recruiter name</strong></td>
      <td width="10%" class="TableStyle"><strong>Relationship</strong></td>
      <td width="11%" class="TableStyle"><strong># of contacted Physician</strong></td>
      <td width="9%" class="TableStyle"><strong># of connected Physician</strong></td>
      <td width="9%" class="TableStyle"><strong># of placed Physician</strong></td>
      <td width="11%" class="TableStyle1"><strong>Need Attentions</strong></td>
  </tr>
  @foreach ($summaryTable as $key=>$summary)
     <tr id="full_row{{$key}}">
       <td class="TableStyle"><a href="#" style="cursor:pointer;color:#424344;" onclick="hospital_profile('{{$summary->id}}')">{{$summary->hospitalname}}</a></td>
       <td class="TableStyle" onclick="show_half_data('{{$summary->id}}','{{$key}}','{{$recordCount}}')">{{$summary->dateofattachment}}</td>
       <td class="TableStyle" onclick="show_half_data('{{$summary->id}}','{{$key}}','{{$recordCount}}')">{{$summary->companyname}}</td>
       <td class="TableStyle" onclick="show_half_data('{{$summary->id}}','{{$key}}','{{$recordCount}}')">{{$summary->recruitername}}</td>
       <td class="TableStyle">
      <select name="relationship{{$key}}" id="relationship{{$key}}" style="width:120px;" onchange="update_relationship('{{$summary->id}}',this.value,'relationship','admin_management')">
       @if($summary->relationship==1)
       <option value="1" selected="selected">Partner</option>
       <option value="2">Association</option>
       <option value="3">Potential</option>
       @endif
       @if($summary->relationship==2)
       <option value="1">Partner</option>
       <option value="2" selected="selected">Association</option>
       <option value="3">Potential</option>
       @endif
       @if($summary->relationship==3)
       <option value="1">Partner</option>
       <option value="2">Association</option>
       <option value="3" selected="selected">Potential</option>
       @endif
       </select>
       </td>
       <td class="TableStyle" onclick="show_half_data('{{$summary->id}}','{{$key}}','{{$recordCount}}')">{{$summary->contactedphysicians}}</td>
       <td class="TableStyle" onclick="show_half_data('{{$summary->id}}','{{$key}}','{{$recordCount}}')">{{$summary->connectedphysicians}}</td>
       <td class="TableStyle" onclick="show_half_data('{{$summary->id}}','{{$key}}','{{$recordCount}}')">{{$summary->placedphysician}}</td>
       <td class="TableStyle1">
       @if($summary->needsattention==1)
       <input type="checkbox" name="need_attention{{$key}}" id="need_attention{{$key}}" checked="checked" onchange="update_relationship('{{$summary->id}}',this.checked,'needsAttention','admin_management')"/>
       @endif
       @if($summary->needsattention==0)
       <input type="checkbox" name="need_attention{{$key}}" id="need_attention{{$key}}" onchange="update_relationship('{{$summary->id}}',this.checked,'needsAttention','admin_management')"/>
       @endif
       </td>
     </tr>
  @endforeach   
</table>

   </div>
   </div>
   
   <div style="width:100%;float:left;display:none;" id="half_data">
   <div class="TableWidthLeft">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
      <td width="13%" class="TableStyle"><strong>Hospital name</strong></td>
      <td width="11%" class="TableStyle"><strong>Date of Attachment</strong></td>
      <td width="14%" class="TableStyle"><strong>Company Name</strong></td>
      <td width="12%" class="TableStyle"><strong>Recruiter name</strong></td>
      <td width="10%" class="TableStyle"><strong>Relationship</strong></td>
      <td width="11%" class="TableStyle"><strong># of contacted Physician</strong></td>
      <td width="9%" class="TableStyle"><strong># of connected Physician</strong></td>
      <td width="9%" class="TableStyle"><strong># of placed Physician</strong></td>
      <td width="11%" class="TableStyle1"><strong>Need Attentions</strong></td>
  </tr>
  @foreach ($summaryTable as $key=>$summary)
     <tr id="half_row{{$key}}">
       <td class="TableStyle"><a href="#" style="cursor:pointer;color:#424344;" onclick="hospital_profile('{{$key}}')">{{$summary->hospitalname}}</a></td>
       <td class="TableStyle" onclick="show_half_data('{{$summary->id}}','{{$key}}','{{$recordCount}}')">{{$summary->dateofattachment}}</td>
       <td class="TableStyle" onclick="show_half_data('{{$summary->id}}','{{$key}}','{{$recordCount}}')">{{$summary->companyname}}</td>
       <td class="TableStyle" onclick="show_half_data('{{$summary->id}}','{{$key}}','{{$recordCount}}')">{{$summary->recruitername}}</td>
       <td class="TableStyle">
      <select name="relationship{{$key}}" id="relationship{{$key}}" style="width:120px;" onchange="update_relationship('{{$summary->id}}',this.value,'relationship','admin_management')">
       @if($summary->relationship==1)
       <option value="1" selected="selected">Partner</option>
       <option value="2">Association</option>
       <option value="3">Potential</option>
       @endif
       @if($summary->relationship==2)
       <option value="1">Partner</option>
       <option value="2" selected="selected">Association</option>
       <option value="3">Potential</option>
       @endif
       @if($summary->relationship==3)
       <option value="1">Partner</option>
       <option value="2">Association</option>
       <option value="3" selected="selected">Potential</option>
       @endif
       </select>
       </td>
       <td class="TableStyle" onclick="show_half_data('{{$summary->id}}','{{$key}}','{{$recordCount}}')">{{$summary->contactedphysicians}}</td>
       <td class="TableStyle" onclick="show_half_data('{{$summary->id}}','{{$key}}','{{$recordCount}}')">{{$summary->connectedphysicians}}</td>
       <td class="TableStyle" onclick="show_half_data('{{$summary->id}}','{{$key}}','{{$recordCount}}')">{{$summary->placedphysician}}</td>
       <td class="TableStyle1">
       @if($summary->needsattention==1)
       <input type="checkbox" name="need_attention{{$key}}" id="need_attention{{$key}}" checked="checked" onchange="update_relationship('{{$summary->id}}',this.checked,'needsAttention','admin_management')"/>
       @endif
       @if($summary->needsattention==0)
       <input type="checkbox" name="need_attention{{$key}}" id="need_attention{{$key}}" onchange="update_relationship('{{$summary->id}}',this.checked,'needsAttention','admin_management')"/>
       @endif
       </td>
     </tr>
 @endforeach
     
</table>
   </div>
   
   <div class="AttentionDiv" id="detail_data">
   Detail data here 
   </div>
   </div>
   @endif
   @if($recordCount==0 && $method=='post')
   <div  style="width:100%;height:500px; text-align:center;">No result found</div>
   @endif
	
  
  </div>
</div>
@include('layouts.footer')
@endsection
                    