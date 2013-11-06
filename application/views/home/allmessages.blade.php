@layout('layouts.physician_master')
@section('content')
<script language="javascript">
function show_paging(start,limit,type){
		var message_type=document.getElementById("message_type").value;
        $.ajax({
             type: "POST",
             url: "messagepaging",
             data: {start:start,limit:limit,type:type,message_type:message_type},
             success: function(msg) {
				 document.getElementById("msg_div").innerHTML=msg;
             }
       });
}

function change_type(message_type){
		
		for(var i=1;i<5;i++){
			if(message_type==i){
				document.getElementById("link"+i).className ="active";
			}
			else{
				document.getElementById("link"+i).className ="";
			}
		}
	
		document.getElementById("message_type").value=message_type;
        $.ajax({
             type: "POST",
             url: "messagepaging",
             data: {start:0,limit:5,type:'previous',message_type:message_type},
             success: function(msg) {
				 document.getElementById("msg_div").innerHTML=msg;
             }
       });
}

function check_them(total_count){
	
	var isChecked=document.getElementById("check_type").value;
	
    if(isChecked == 'false') {
		for(var i=0;i<total_count;i++){
			document.getElementById('chk_box'+i).checked=true;
		}
	document.getElementById("check_type").value='true';	
    }
    else
    {
		for(var i=0;i<total_count;i++){
			document.getElementById('chk_box'+i).checked=false;
		}
		document.getElementById("check_type").value='false';
    }
}

function action_checkbox(action,total_count){
	var array = [];
	for(var i=0;i<total_count;i++){
		var chk_box=document.getElementById('chk_box'+i).checked;
			if(chk_box==true){
				array.push(document.getElementById('chk_box'+i).value);
			}
	}
	var ids=array.toString();
	 $.ajax({
             type: "POST",
             url: "changemessagestatus",
             data: {action:action,message_ids:ids},
             success: function(msg) {
				 window.location.reload();
             }
       });
	
	
}

function open_reply(msg_id){
	var message_type=document.getElementById("message_type").value;
	if(message_type==1){
		document.getElementById("reply_div_"+msg_id).style.display="block";
	}
}

function send_reply(from_id,msg_id){
	var reply_text=document.getElementById("reply_"+msg_id).value;
	$.ajax({
             type: "POST",
             url: "send_reply",
             data: {reply_text:reply_text,from_id:from_id},
             success: function(msg) {
				 document.getElementById("reply_div_"+msg_id).style.display="none";
				 //window.location.reload();
             }
       });
}

</script>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit-login"> 
  <!-- Example row of columns -->
  <div class="row">
    <div class ="container">
    <div class="span12">
    <div class="span650 pull-left" style="margin-right:15px;"><p><span class="profilename2">Hello Dr. Michael Gray</span> <span class="nav100 recent">Last log-in 08/01/13 5:00pm</span></p></div>
    <div class="form-pad2 span250 pull-right">
      <p><span class="bold">My Job Search: </span><span class="redunderline">Active</span></p></div> </div>
      <div class="span12">
        <div class="span930 pull-left">
        	
            
           <div class="form-pad2">
            <div class="bs-table-scrollable">
            	<div style="float:left;width:17%;">
                <div class="HospitalsPageLeft">
                <div class="left_menu_message">
                <div style="height:30px; margin-top:10px;">
                <input type="hidden" name="message_type" id="message_type" value="{{$message_type}}"/>
                <a href="javascript:void(0)" onclick="change_type('1')" id="link1" class="active">Inbox</a>
		   		</div>
                <div style="height:30px;">
                <a href="javascript:void(0)" onclick="change_type('2')" id="link2">Sent</a>
		   		</div>
		   		<div style="height:30px;">
                <a href="javascript:void(0)" onclick="change_type('3')" id="link3">All</a>
		   		</div>
           		<div style="height:30px;">
                <a href="javascript:void(0)" onclick="change_type('4')" id="link4">Trash</a>
		   		</div>
		 		</div>
                </div>
                </div>
                <div id="msg_div" style="float:left;width:83%;">
                <table class="table table-bordered table-striped" style="margin-top:0px;">
                <thead>
                <tr>
                <td>
                <span style="float:left;margin-left:10px;">
                <input type="hidden" name="check_type" id="check_type" value="false" />
                <input type="checkbox" name="check_all" id="check_all" onclick="check_them('{{$limit}}')"/>
                </span>
                <span style="float:left;margin-left:5px;"><img src="img/recruiter/red_message_icon.gif"/></span>
                <span class="bold" style="float:left;margin-left:5px;margin-top:5px;">Messages</span>
                <span style="float:left;margin-left:10px;margin-top:5px;cursor:pointer;" onclick="action_checkbox('read','{{$limit}}')">Mark as Read</span>
                <span style="float:left;margin-left:10px;margin-top:5px;">|</span>
                <span style="float:left;margin-left:10px;margin-top:5px;cursor:pointer;" onclick="action_checkbox('unread','{{$limit}}')">Mark as Unread</span>
                <span style="float:left;margin-left:10px;margin-top:5px;">|</span>
                <span style="float:left;margin-left:10px;margin-top:5px;cursor:pointer;" onclick="action_checkbox('delete','{{$limit}}')">Delete</span>
                <span style="float:right;margin-right:10px;margin-top:5px;">
                @if($start==1)
                <img src="img/recruiter/left_arrow.png" onclick="alert('Already on first page');"/>
                @endif
                @if($start > 1)
                <img src="img/recruiter/left_arrow.png" onclick="show_paging({{$start}},{{$limit}},'previous')"/>
                @endif
                &nbsp;
                @if($limit < $total_count)
                <img src="img/recruiter/right_arrow.png" onclick="show_paging({{$start}},{{$limit}},'next')"/>
                @endif
                @if($limit >= $total_count)
                <img src="img/recruiter/right_arrow.png" onclick="alert('No more records to show');"/>
                @endif
                </span>
                <span style="float:right;margin-right:10px;margin-top:5px;">{{$start}}-{{$limit}} of {{$total_count}}</span>
                
                </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>
                <table style="width:100%;">
@foreach($messages as $key=>$msg)
@if($key%2!=0)
<tbody style="background-color:#B8B8B8;">
<tr>
<td width="5%"><input type="checkbox" name="chk_box{{$key}}" id="chk_box{{$key}}" value="{{$msg->id}}"/></td>
<td width="10%"><img src="img/recruiter/message_profile_thumb.gif" alt="Profile image"></td>
<td class="span4" style="vertical-align:top;width:42%;">
<div class="messageb">Message From {{$msg->from}}</div>
<div class="message">{{$msg->message}}</div>
<div style="width:100%;float:left;display:none;" id="reply_div_{{$msg->id}}">
<table style="width:230px;">
<tr>
<td style="width:30px;"><img src="img/recruiter/message_profile_thumb.gif" width="28" height="28"></td>
<td style="width:200px;"><textarea cols="50" rows="10" name="reply_{{$msg->id}}" id="reply_{{$msg->id}}" style="width:300px;"></textarea></td>
</tr>
<tr>
<td colspan="2" align="left">
<div style="height:25px;background-color:#BAD9ED;border:1px solid #6A7881;width:50px;text-align:center;float:right;" onclick="send_reply('{{$msg->from_id}}','{{$msg->id}}')">Send</div>
</td>
</tr>
</table>
</div>
</td>
<td class="span4" style="vertical-align:top;width:43%;">
<div class="messageb" onclick="open_reply('{{$msg->id}}');">{{$msg->subject}}</div>
</td>
</tr>
</tbody>
@endif
@if($key%2==0)
<tbody style="background-color:#F6F6F6;">
<tr>
<td width="5%"><input type="checkbox" name="chk_box{{$key}}" id="chk_box{{$key}}" value="{{$msg->id}}"/></td>
<td width="10%"><img src="img/recruiter/message_profile_thumb.gif" alt="Profile image"></td>
<td class="span4" style="vertical-align:top;width:42%;">
<div class="messageb">Message From {{$msg->from}}</div>
<div class="message">{{$msg->message}}</div>
<div style="width:100%;float:left;display:none;" id="reply_div_{{$msg->id}}">
<table style="width:230px;">
<tr>
<td style="width:30px;"><img src="img/recruiter/message_profile_thumb.gif" width="28" height="28"></td>
<td style="width:200px;"><textarea cols="50" rows="10" name="reply_{{$msg->id}}" id="reply_{{$msg->id}}" style="width:300px;"></textarea></td>
</tr>
<tr>
<td colspan="2" align="left">
<div style="height:25px;background-color:#BAD9ED;border:1px solid #6A7881;width:50px;text-align:center;float:right;" onclick="send_reply('{{$msg->from_id}}','{{$msg->id}}')">Send</div>
</td>
</tr>
</table>
</div>
</td>
<td class="span4" style="vertical-align:top;width:43%;">
<div class="messageb" onclick="open_reply('{{$msg->id}}');">{{$msg->subject}}</div>
</td>
</tr>
</tbody>
@endif
@endforeach
</table>
                </td>
                  </tr>
                  </tbody>
              </table>
            	</div>
            </div>
            </div>            
       
      </div>
      
    </div>
  </div>
    <p>&nbsp;</p>
  <div id="footer">
    <div class="container">
      <ul class="masthead-links">
        <li><a href="javascript:void(0)">About</a></li>
        <li><a href="javascript:void(0)">Pricing</a></li>
        <li><a href="javascript:void(0)">FAQ</a></li>
        <li><a href="javascript:void(0)">Contact Us</a></li>
      </ul>
      <ul class="footer-links">
        <li>© 2013, Yi Medical, Inc. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="javascript:void(0)">Privacy Policy</a></li>
        <li><a href="javascript:void(0)">Press</a></li>
        <li><a href="javascript:void(0)">Partners</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
@endsection

@section('scripts')
<style type="text/css">
0 	  /* Set the fixed height of the footer here */
 #push, #footer {
 height: 100px;
}
#footer {
	padding: 10px 0px 10px 20px;
	background-color: #63656a;
}
/* Textual links in masthead */
.masthead-links {
	margin: 0;
	list-style: none;
	color: #ffffff;
}
.masthead-links li {
	display: inline;
	padding: 10px 20px 10px 0px;
}
.masthead-links li a {
	color: #ffffff;
}
.masthead-links li a:hover {
	color: #ffffff;
}
.footer-links {
	margin: 0;
	list-style: none;
	color: #99999a;
	padding-top: 10px;
}
.footer-links li {
	display: inline;
	padding: 10px 20px 10px 0px;
	color: #99999a;
}
.footer-links li a {
	color: #99999a;
}
.footer-links li a:hover, .footer-links li a:focus {
	color: #99999a;
}
.profilename {
	padding: 20px 20px 20px 20px;
	font-size: 16px;
	font-weight: bold;
	color: #000000;
}
.profile img {
	padding: 0px;
}

.profilename2 {
	padding: 20px 20px 0px 20px;
	font-size: 16px;
	font-weight: bold;
	color: #73b3dc;
}
.profiletab {
	padding: 10px 20px 10px 20px;
	font-size: 12px;
	color: #000000;
}
.currentprofiletab {
	padding: 10px 20px 10px 20px;
	font-size: 12px;
	color: #ff0000;
}
.table {
	width: 100%;
	margin-top: 30px;
}
.interest {
	font-size: 9px;
	color: #000000;
}
.interest-pad {
	padding: 0 20px 0px 20px;
}
.red {
	color:#ff0000;
}



      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
#footer {
	margin-left: -20px;
	margin-right: -20px;
	padding-left: 20px;
	padding-right: 20px;
}
}
</style>
@endsection
