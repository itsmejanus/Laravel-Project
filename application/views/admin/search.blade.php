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
@include('layouts.header')
<div class="PageConetentRight" style="margin-bottom:5px;width:99.9%;float:left;" id="page_right">

<div id="page-title" class="SearchFormTitle"><h3 style="text-transform:uppercase;font-size:14px;">{{ $title }}</h3></div>

<div style="padding: 0 5px 5px;width:98%;">
<form action="adminsearch" name="filter_form" method="post">
<table width="100%" cellpadding="2" cellspacing="5" >

	<tr>
    	<td width="12%" style="padding-left:10px;">Name</td>
        <td width="12%" style="padding-left:10px;">Email</td>
        <td width="14%" style="padding-left:10px;">State</td>
        <td width="14%" style="padding-left:10px;">Account Type</td>
        <td width="14%" style="padding-left:10px;">Account Balance</td>
        <td width="14%" style="padding-left:10px;">Account Status</td>
        <td width="14%"></td>
    </tr>
    <tr>
    	<td><input type="text"  id="name" name="name" value="{{$name}}" style="width:165px;"></td>
        <td><input type="text" value="{{$email}}"  id="email" name="email" style="width:165px;"></td>
        <td><select name="state_filter" id="state_filter" style="width:150px;">
        		<option value="" >Select State</option>
        		@foreach ($usStates as $key=>$states)
                	@if($states->state_code==$state_filter)
                	<option value="{{$states->state_code}}" selected="selected">{{$states->state_name}}</option>
                	@endif
                    @if($states->state_code!=$state_filter)
                	<option value="{{$states->state_code}}">{{$states->state_name}}</option>
                	@endif
                @endforeach
            </select>
        </td>
        <td><select name="type_filter" id="type_filter" style="width:150px;">
        		<option value="" >Select Type</option>
        		@foreach ($accountType as $key=>$type)
                	@if($type->account_type==$type_filter)
                	<option value="{{$type->account_type}}" >{{$type->account_type}}</option>
                	@endif
                    @if($type->account_type!=$type_filter)
                	<option value="{{$type->account_type}}" >{{$type->account_type}}</option>
                	@endif
                @endforeach
            </select></td>
        <td><select name="balance_filter" id="balance_filter" style="width:150px;">
        		<option value="" >Select Balance</option>
                @foreach ($accountBalance as $key=>$balance)
                	@if($balance->balance==$balance_filter)
                	<option value="{{$balance->balance}}" selected="selected">{{$balance->balance}}</option>
                	@endif
                    @if($balance->balance!=$balance_filter)
                	<option value="{{$balance->balance}}" >{{$balance->balance}}</option>
                	@endif
                @endforeach
            </select></td>    
        <td><select name="status_filter" id="status_filter" style="width:150px;">
        	<option value="" >Select Status</option>
        	<option value="1" >Activated</option>
            <option value="0" >Suspended</option>
            </select>
        </td>
        <td align="left"><input type="submit" name="filter_btn" id="filter_btn" value="search" class="btn btn-small btn-danger delete-event"/></td>
    </tr>
</table>
</form>
@if($recordCount>0)
<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
         <td>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="13%" class="TableCalss2">User Name</td>
    <td width="13%" class="TableCalss2">Contact Email</td>
    <td width="13%" class="TableCalss2">Account Type</td>
    <td width="13%" class="TableCalss2">Phone Number</td>
    <td width="13%" class="TableCalss2">Password</td>
    <td width="13%" class="TableCalss2">Account Balance</td>
    <td width="13%" class="TableCalss2">Account Status</td>
  </tr>
   @foreach ($updateRecords as $key=>$records)
  <tr>
    <td class="TableCalss3">{{ $records-> name}}</td>
   
    <td class="TableCalss4">{{ $records-> email}}</td>
    <td class="TableCalss3">{{ $records-> type}}</td>
    <td class="TableCalss3">{{ $records-> phone}}</td>
    <td class="TableCalss3"><a href="javascript:void(0)">reset</a></td>
    <td class="TableCalss3">{{ $records-> account_balance}}</td>
    <td class="TableCalss3">{{ $records-> activated}}</td>
  </tr>
  @endforeach
</table>
</td>
        </tr>
       </table>
@endif
@if($recordCount==0 && $method=='post')
<div  style="width:100%;height:500px; text-align:center;">No result found</div>
@endif       
</div>
@include('layouts.footer')
@endsection
                    