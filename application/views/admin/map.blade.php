@layout('layouts.public')
@section('content')
{{ HTML::style('css/jquery-ui.css') }}
{{ HTML::script('js/jquery-1.9.1.js') }}
{{ HTML::script('js/jquery-ui.js') }}
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

.gmnoprint img {
    max-width: none; 
}

.thismon{
    color: #000;
    cursor: pointer;
    text-align: center;
    background-image: -moz-linear-gradient(top, #f2f2f2, #fff);
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00f2f2f2, endColorstr=#efefef)";
    background-image: -moz-linear-gradient(top, #f2f2f2, #fff);
    background-image: -ms-linear-gradient(top, #f2f2f2, #fff);
    background-image: -webkit-linear-gradient(top, #f2f2f2, #fff);
    background-image: -o-linear-gradient(top, #f2f2f2, #fff);
    border: 1px solid #d7d7d7;
}

.thisday{
    color: #000;
    border: 1px solid #595900;
    background-color: #fff;
    cursor: pointer;
    text-align: center;
}

.calendar{
    display: none;
    width: 260px;
    margin-top: 5px;
    border: 1px solid #d7d7d7;
}

.navigate{
    text-align: center;
    cursor: pointer;
}

.weekdays{
    font: normal bold 13px sans-serif;
    color: #555555;
}

.monthdisp{
    color: #555555;
    font: normal bold 14px/30px sans-serif;
    background-image: -moz-linear-gradient(top, #f2f2f2, #fff);
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#f2f2f2, endColorstr=#efefef)";
       background-image: -ms-linear-gradient(top, #f2f2f2, #fff);
    background-image: -webkit-linear-gradient(top, #f2f2f2, #fff);
    background-image: -o-linear-gradient(top, #f2f2f2, #fff);
    border: 0px solid #d7d7d7;
}

</style>
@include('layouts.header')
<script language="javascript">
function show_editables(id){
	document.getElementById("page_right").style.width="70%";
	document.getElementById("editable_div").style.display="block";
	$.ajax({
    type: "POST",
    url: 'hospitaleditable',
    data: { id: id }
}).done(function(msg) {
	var obj=JSON.parse(msg);
	document.getElementById("about_hospital").value=obj.cpara;
	document.getElementById("about_area").value=obj.lpara;
	document.getElementById("admin_notes").value=obj.admin_notes;
	document.getElementById("hospital_id").value=id;
});
	
	
}
function save_data(textarea_id,db_field){
	var textareaVal=document.getElementById(textarea_id).value,
		hospital_id=document.getElementById("hospital_id").value;
		
        $.ajax({
             type: "POST",
             url: "hospitalsave",
             data: {textData:textareaVal,db_field:db_field,hospital_id:hospital_id},
             success: function(msg) {
             }
       });
}

function open_popup(hosp_id,key){
$( "#dialog" ).dialog();
document.getElementById("dialog").style.display="block";
document.getElementById("email").value="";
document.getElementById("first_name").value="";
document.getElementById("last_name").value="";
document.getElementById("company_name").value="";
document.getElementById("ph_number").value="";
document.getElementById("association").value="";
document.getElementById("hosp_id").value=hosp_id;
document.getElementById("row_id").value=key;
}

function show_calendar(key){
	document.getElementById("date_hide"+key).style.display="none";
	document.getElementById("date_show"+key).style.display="block";
	dispCal('','',key);
}

function show_title(key){
	document.getElementById("hide_title"+key).style.display="none";
	document.getElementById("show_title"+key).style.display="block";
}

function save_new_data(field_id,db_field,hospital_id,key){
	
	var field_value=document.getElementById(field_id+key).value;
        $.ajax({
             type: "POST",
             url: "jobsave",
             data: {field_value:field_value,db_field:db_field,hospital_id:hospital_id},
             success: function(msg) {
             }
       });

}

function show_email_list(e,key,hospital_id){
	var email_contact=document.getElementById("email_contact"+key).value;
		if(email_contact.length >2){
			
			$.ajax({
				type: "POST",
				url: "emaillist",
				data: {email:email_contact,key_value:key,hospital_id:hospital_id},
				success: function(msg) {
					document.getElementById("show_list"+key).innerHTML=msg;
				}
			});	
		}
}

function fill_fields(job_id,key,hospital_id){
			
			$.ajax({
				type: "POST",
				url: 'savefields',
				data: {job_id:job_id,hospital_id:hospital_id}
			}).done(function(msg) {
				var obj=JSON.parse(msg);
				document.getElementById("contact_name"+key).style.display="block";
				document.getElementById("contact_name"+key).innerHTML=obj.contact_name;
				document.getElementById("contact_email_field"+key).style.display="none";
				document.getElementById("contact_email_text"+key).style.display="block";
				document.getElementById("contact_email_text"+key).innerHTML=obj.contact_email;
				document.getElementById("contact_phone_image"+key).style.display="none";
				document.getElementById("contact_phone_text"+key).style.display="block";
				document.getElementById("contact_phone_text"+key).innerHTML=obj.contact_phone;
				document.getElementById("contact_company"+key).style.display="block";
				document.getElementById("contact_company"+key).innerHTML="Teamhealth";
				document.getElementById("contact_association"+key).style.display="block";
				document.getElementById("contact_association"+key).innerHTML="Potential";
			});
}


function fill_popup(){
			var hospital_id=document.getElementById("hosp_id").value;
			var row_id=document.getElementById("row_id").value;
			var email=document.getElementById("email").value;
			var first_name=document.getElementById("first_name").value;
			var last_name=document.getElementById("last_name").value;
			var company_name=document.getElementById("company_name").value;
			var ph_number=document.getElementById("ph_number").value;
			var association=document.getElementById("association").value;
			
			$.ajax({
				type: "POST",
				url: 'savepopup',
				data: {hospital_id:hospital_id,row_id:row_id,email:email,first_name:first_name,last_name:last_name,company_name:company_name,ph_number:ph_number,association:association}
			}).done(function(msg) {
				$('#dialog').dialog('close');
				var obj=JSON.parse(msg);
				document.getElementById("contact_name"+row_id).style.display="block";
				document.getElementById("contact_name"+row_id).innerHTML=obj.contact_name;
				document.getElementById("contact_email_field"+row_id).style.display="none";
				document.getElementById("contact_email_text"+row_id).style.display="block";
				document.getElementById("contact_email_text"+row_id).innerHTML=obj.contact_email;
				document.getElementById("contact_phone_image"+row_id).style.display="none";
				document.getElementById("contact_phone_text"+row_id).style.display="block";
				document.getElementById("contact_phone_text"+row_id).innerHTML=obj.contact_phone;
				document.getElementById("contact_company"+row_id).style.display="block";
				document.getElementById("contact_company"+row_id).innerHTML=obj.company_name;
				document.getElementById("contact_association"+row_id).style.display="block";
				document.getElementById("contact_association"+row_id).innerHTML=obj.association;
			});
}


</script>
<script type='text/javascript'>
            var getDatee = new Date();
            var monthe = getDatee.getMonth();
            var yeare = getDatee.getFullYear();
            var day = getDatee.getDate(); 
            function isEmpty(val){
               return (val === undefined || val == null || val.length <= 0) ? true : false;
            }
            
            function prev(key)
            {
            	monthe = monthe-1;
                if(monthe < 0)
        	{
        	    yeare = yeare-1;	
                    monthe = 11;
                }
                dispCal(monthe, yeare, key);
                return false;
            }
            
            function next(key)
            {
            	monthe = monthe+1;
                if(monthe > 11)
        	{
        	    yeare = yeare+1;	
                    monthe = 0;
                }
                dispCal(monthe, yeare, key);
                return false;
            }
            
            function daysInMonth(monthe, yeare)
            {
                return 32 - new Date(yeare, monthe, 32).getDate();
            }

            function getElementPosition(arrName,arrItem){
                for(var pos=0; pos<arrName.length; pos++ ){
                    if(arrName[pos]==arrItem){
                        return pos;
                    }
                }
            }
            
            function setVal(getDat,key){
                $('#sel'+key).val(getDat);
				$('#sel'+key).focus();
                $('#calendar'+key).hide();
            }
            
            function dispCal(mon,yea,key){
		var ar = new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
                var chkEmpty = isEmpty(mon);
                var n,days,calendar,startDate,newYea,setvale,i;
                if(chkEmpty != true){
                    mon = mon+1;
                    n = ar[mon-1];
                    n += " "+yea;
                    newYea = yea;
                    days = daysInMonth((mon-1),yea);
                    startDate = new Date(ar[mon-1]+" 1"+","+parseInt(yea));
                }else{
                    mon = getElementPosition(ar,ar[getDatee.getMonth()]);
                    n = ar[getDatee.getMonth()];
                    n += " "+yeare;
                    newYea = yeare;
                    days = daysInMonth(mon,yeare);
                    startDate = new Date(ar[mon]+" 1"+","+parseInt(yeare));
                }
                
                var startDay = startDate.getDay();
                var startDay1 = startDay;
                while(startDay> 0){
                   calendar += "<td></td>";  
                   startDay--;
                }                
                i = 1;
                while (i <= days){
                  if(startDay1 > 6){
                      startDay1 = 0;  
                      calendar += "</tr><tr>";  
                  }  
                  mon = monthe+1;
                  setvale = i+","+n;
		  if(i == day && newYea==yeare && mon==monthe){
		    calendar +="<td class='thisday' onclick='setVal(\""+newYea+"-"+mon+"-"+i+"\",\""+key+"\")'>"+i+"</td>";
                  }else{  
                    calendar +="<td class='thismon' onclick='setVal(\""+newYea+"-"+mon+"-"+i+"\",\""+key+"\")'>"+i+"</td>";   
                  }
		  startDay1++;  
                  i++;  
                }
		    calendar +="<td><a style='font-size: 9px; color: #efefef; font-family: arial; text-decoration: none;' href='http://www.hscripts.com'>&copy;h</a></td>";   
		
                $('#calendar'+key).css('display','block');
                $('#month'+key).html(n);
                var test = "<tr class='weekdays'><td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td></tr>";  
                test += calendar;
		$('#dispDays'+key).html(test);
            }
        </script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<div class="PageConetentRight" style="margin-bottom:5px;width:100%;float:left;" id="page_right">
<div style=" padding:5px;width:98%;">
<form action="map" name="filter_form" method="post" style="margin:0;">
<div style="float:left;width:20%;">
<select name="filter" id="filter">
<option value="all" {{$fall}}>All</option>
<option value="0" {{$fno}}>No Postings</option>
<option value="1 day" {{$f1day}}>Last Day</option>
<option value="1 week" {{$f1week}}>Last week</option>
<option value="1 month" {{$f1month}}>Last Month</option>
<option value="6 month" {{$f6month}}>Last 6 months</option>
</select>
</div>
<div style="float:left;margin-left:5px;width:20%;">
<select name="source" id="source">
<option value="-1">Select source</option>
<option value="admin">Admin</option>
<option value="recruiter">Recruiter</option>
<option value="web">Web Crawler</option>
</select>
</div>
<div style="float:left;width:19%;">
<input type="checkbox" name="tier1or2" id="tier1or2" {{$tier1or2}}/> Tier 1/2 facility
</div>
<div style="float:left;width:19%;">
<input type="checkbox" name="cmpsn200plus" id="cmpsn200plus" {{$cmpsn200plus}}/> >$200,000/yr openings
</div>
<div style="float:left;width:19%;">
<input type="checkbox" name="mjdblcvg" id="mjdblcvg" {{$mjdblcvg}}/> Major double coverage
</div>
<div style="width:100%;float:left;margin-left:5px;">
<div style="float:left;width:20%;">
<input type="checkbox" name="noihcdcvg" id="noihcdcvg" {{$noihcdcvg}}/> No IHC Coverage
</div>
<div style="float:left;width:20%;">
<input type="checkbox" name="academic" id="academic" {{$academic}}/> Academic facility
</div>
<div style="float:left;width:19%;">
<input type="checkbox" name="cme" id="cme" {{$cme}}/> CME Compensation
</div>
<div style="float:left;width:19%;">
<input type="checkbox" name="mdlvlcvg" id="mdlvlcvg" {{$mdlvlcvg}}/> Mid-Level Coverage
</div>
<div style="float:left;width:20%;">
<input type="checkbox" name="noadmordrs" id="noadmordrs" {{$noadmordrs}}/> No Admin Orders Required
</div>
<div style="float:left;width:20%;">
<input type="checkbox" name="anystlic" id="anystlic" {{$anystlic}}/> Accept Any State License
</div>
<div style="float:left;width:20%;">
<input type="checkbox" name="reprentation" id="reprentation" {{$reprentation}}/> Have reprentation
</div>
<div style="float:left;width:19%;">
<input type="checkbox" name="recstatus" id="recstatus" {{$recstatus}}/> In Recruiting Status
</div>
<div style="float:left;width:19%;">
<input type="checkbox" name="prisnglcvg" id="prisnglcvg" {{$prisnglcvg}}/> Primary Single Coverage
</div>
<div style="float:left;width:20%;">
<input type="checkbox" name="emr" id="emr" {{$emr}}/> EMR Coverage
</div>
</div>
<div style="float:left;margin-left:5px;">
<input type="hidden" name="latbox" id="latbox" value="{{$lat}}"/>
<input type="hidden" name="lngbox" id="lngbox" value="{{$lng}}"/>
<input type="hidden" name="latbox_min" id="latbox_min" value="{{$latbox_min}}"/>
<input type="hidden" name="latbox_max" id="latbox_max" value="{{$latbox_max}}"/>
<input type="hidden" name="lngbox_min" id="lngbox_min" value="{{$lngbox_min}}"/>
<input type="hidden" name="lngbox_max" id="lngbox_max" value="{{$lngbox_max}}"/>
<input type="hidden" name="zoom_level" id="zoom_level" value="{{$zoom_level}}"/>
</div>
<div style="float:left;margin-left:80%;margin-top:5px;margin-bottom:5px;">
<input type="submit" name="filter_btn" id="filter_btn" value="search" class="btn btn-small btn-danger delete-event"/>
</div>
</form>
</div>

<div id="map" style="width:98%;height:300px; margin:0 auto;"></div>
<script type="text/javascript">
    var locations = [
	  
      {{$mapHtml}}
	 
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: {{$zoom_level}},
      center: new google.maps.LatLng({{$lat}}, {{$lng}}),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
	
	var center = map.getCenter();
		document.getElementById("latbox").value = center.lat().toFixed(9);
     	document.getElementById("lngbox").value = center.lng().toFixed(9);
		
	google.maps.event.addListener(map, 'dragend', function() {
		var zoomLevel = map.getZoom();
		document.getElementById("zoom_level").value =zoomLevel;
		var bounds=map.getBounds();
		document.getElementById("latbox_min").value = bounds.getSouthWest().lat();
		document.getElementById("lngbox_min").value = bounds.getSouthWest().lng();
		document.getElementById("latbox_max").value = bounds.getNorthEast().lat();
		document.getElementById("lngbox_max").value = bounds.getNorthEast().lng();
		
		var center = map.getCenter();
		document.getElementById("latbox").value = center.lat().toFixed(9);
     	document.getElementById("lngbox").value = center.lng().toFixed(9);
		
		document.filter_form.submit();
	});
	
	google.maps.event.addListener(map, 'zoom_changed', function() {
		var zoomLevel = map.getZoom();
		document.getElementById("zoom_level").value =zoomLevel;
		var bounds=map.getBounds();
		document.getElementById("latbox_min").value = bounds.getSouthWest().lat();
		document.getElementById("lngbox_min").value = bounds.getSouthWest().lng();
		document.getElementById("latbox_max").value = bounds.getNorthEast().lat();
		document.getElementById("lngbox_max").value = bounds.getNorthEast().lng();
		
		var center = map.getCenter();
		document.getElementById("latbox").value = center.lat().toFixed(9);
     	document.getElementById("lngbox").value = center.lng().toFixed(9);
		
		document.filter_form.submit();
 	 });

	
	
    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
		icon:'images/marker.png'
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
			for (var j = 0; j < locations.length; j++) {
				if(i==j){  
		  		document.getElementById("row_"+j).style.backgroundColor="#ccc";
				}
				else{
				document.getElementById("row_"+j).style.backgroundColor="#fff";	
				}
			}
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
  <div style="width:98%; clear:both; padding:5px; margin:0 auto; ">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
  <td>
 
  <div id="search_list" style="width:100%;float:left;">
   @if($Record>0)
  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #ccc; ">
  <tr>
    <td width="12%" class="TableCalss2">Hospital Name</td>
    <td width="12%" class="TableCalss2">Title of Position</td>
    <td width="12%" class="TableCalss2">Date Posted</td>
    <td width="12%" class="TableCalss2">Contact Name</td>
    <td width="12%" class="TableCalss2">Contact Email</td>
    <td width="12%" class="TableCalss2">Contact Phone</td>
    <td width="12%" class="TableCalss2">Contact Company</td>
    <td width="12%" class="TableCalss2">Contact Association</td>
  </tr>
   @foreach ($userUpdate as $key=>$hospital)
  @if($fno!="")
  <tr id="row_{{$key}}">
   <td class="TableCalss4" valign="top"><a href="javascript:void(0)" onclick="show_editables('{{ $hospital-> id}}')">{{ $hospital-> name}}</a></td>
   <td class="TableCalss3" valign="top">
   <div style="float:left;display:block;" id="hide_title{{$key}}">
   <a href="javascript:void(0)" style="color:#666;" onclick="show_title('{{$key}}')">click to add</a>
   </div>
   <div style="float:left;display:none;" id="show_title{{$key}}">
   <input type="text" name="job_title{{$key}}" id="job_title{{$key}}" style="width:100px;" onblur="save_new_data('job_title','Position','{{ $hospital-> id}}','{{$key}}')"/>
   </div>
   </td>
   <td class="TableCalss3" valign="top">
   <div id="date_show{{$key}}" style="display:none;">
   <input type='text' id='sel{{$key}}' size=10 readonly='readonly' style="width:70px;" onblur="save_new_data('sel','Created_at','{{ $hospital-> id}}','{{$key}}')" onclick="show_calendar('{{$key}}')"/>
   <table class='calendar' id='calendar{{$key}}' border=0 cellpadding=0 cellspacing=0>
            <tr class='monthdisp'>
                <td class='navigate' align='left'><img src='images/previous.png' onclick='return prev("{{$key}}")' /></td>
                <td align='center' id='month{{$key}}'></td>
                <td class='navigate' align='right'><img src='images/next.png' onclick='return next("{{$key}}")' /></td>
                </tr>
            <tr>
                <td colspan=3>
                    <table id='dispDays{{$key}}' border=0 cellpadding=4 cellspacing=4>                        
                    </table>                    
                </td>
            </tr>
        </table>
        </div>
   <div id="date_hide{{$key}}" style="display:block;">     
   <a href="javascript:void(0)" style="color:#666;" onclick="show_calendar('{{$key}}')">click to add</a>
   </div>
   </td>
   <td class="TableCalss3" valign="top">
   <span style="display:none;" id="contact_name{{$key}}"></span>
   </td>
   <td class="TableCalss3" valign="top">
   <span style="width:100%;float:left;" id="contact_email_field{{$key}}">
   <div style="width:100%; float:left;">
   <input type="text" name="email_contact{{$key}}" id="email_contact{{$key}}" value="Auto complete list" onfocus="if (this.value == 'Auto complete list') {this.value = '';}" onblur="if(this.value == ''){this.value = 'Auto complete list';}" onkeypress="show_email_list(event,'{{$key}}','{{ $hospital-> id}}')" style="margin-bottom:0px;"/>
   </div>
   <div style="width:100%;float:left;max-height:200px;height:auto;overflow-y:auto;overflow-x:hidden;" id="show_list{{$key}}">
   
   </div>
   </span>
   <span style="display:none;" id="contact_email_text{{$key}}"></span>
   </td>
   <td class="TableCalss3" valign="top">
   <span id="contact_phone_image{{$key}}">
   <a href="javascript:void(0)" style="color:#666;" onclick="open_popup('{{ $hospital-> id}}','{{$key}}')"><img src="images/add-user.png" /></a>
   </span>
   <span style="display:none;" id="contact_phone_text{{$key}}"></span>
   </td>
   <td class="TableCalss3" valign="top"><span style="display:none;" id="contact_company{{$key}}"></span></td>
   <td class="TableCalss3" valign="top"><span style="display:none;" id="contact_association{{$key}}"></span></td>
    
  </tr>
  @endif
  @if($fno=="")
  <tr id="row_{{$key}}">
    <td class="TableCalss4"><a href="javascript:void(0)" onclick="show_editables('{{ $hospital-> id}}')">{{ $hospital-> name}}</a></td>
    <td class="TableCalss3">{{ $hospital-> position}} </td>
   <td class="TableCalss3">{{ $hospital-> date_posted}} </td>
   <td class="TableCalss3">{{ $hospital-> contact_name}} </td>
   <td class="TableCalss3">{{ $hospital-> contact_email}} </td>
   <td class="TableCalss3">{{ $hospital-> contact_phone}} </td>
   <td class="TableCalss3">Teamhealth</td>
   <td class="TableCalss3">Potential</td>
    
  </tr>
  @endif
  @endforeach
  </table>
  @endif
  @if($Record==0)
  <div  style="width:100%;height:500px; text-align:center;">No Hospital Found</div>
  @endif
  </div>
  </td>
  </tr>
</table>
</div>
</div>
<div style="float:left;display:none;width:25%;margin-left:10px;" id="editable_div">
<div style="width:100%;float:left;font-weight:bold;">
About the hospital
</div>
<div style="width:100%;float:left;">
<textarea name="about_hospital" id="about_hospital" rows="10" onblur="save_data('about_hospital','CPara')" style="width:100%;"></textarea>
</div>
<div style="width:100%;float:left;font-weight:bold;">
About the area
</div>
<div style="width:100%;float:left;">
<textarea name="about_area" id="about_area" rows="10" onblur="save_data('about_area','LPara')" style="width:100%;"></textarea>
</div>
<div style="width:100%;float:left;font-weight:bold;">
Administration notes
</div>
<div style="width:100%;float:left;">
<textarea name="admin_notes" id="admin_notes" rows="10" onblur="save_data('admin_notes','admin_notes')" style="width:100%;"></textarea>
<input type="hidden" name="hospital_id" id="hospital_id" value="" />
</div>
</div>

<div id="dialog" title="Add Contact Info" style="display:none;">
<form name="popup_form" id="popup_form" action="savepopup" method="post">
   <div style="width:100%;float:left;">
   <table width="100%">
   <tr>
   <td>Email</td>
   <td><input type="text" name="email" id="email" /></td>
   </tr>
   <tr>
   <td>First Name</td>
   <td><input type="text" name="first_name" id="first_name" /></td>
   </tr>
   <tr>
   <td>Last Name</td>
   <td><input type="text" name="last_name" id="last_name" /></td>
   </tr>
   <tr>
   <td>Phone Number</td>
   <td><input type="text" name="ph_number" id="ph_number" /></td>
   </tr>
   <tr>
   <td>Company Name</td>
   <td><input type="text" name="company_name" id="company_name" /></td>
   </tr>
   <tr>
   <td>Association</td>
   <td>
   <select name="association" id="association">
   <option value="Partner">Partner</option>
   <option value="Association">Association</option>
   <option value="Potential">Potential</option>
   </select>
   </td>
   </tr>
   </table>
   </div>
   <div class="ButtonDiv" style="width:35%;float:right;margin-right:10px;">
   <input type="hidden" name="hosp_id" id="hosp_id" />
   <input type="hidden" name="row_id" id="row_id" />
   <input name="" type="button" value="Add"  class="Button" onclick="fill_popup()"/>
   </div>
</form>   
   </div>

@include('layouts.footer')
@endsection
                    