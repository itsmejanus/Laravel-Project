@layout('layouts.physician_master')
@section('content')
<script language="javascript">
function load_connections(comm_status,div_id){
	
        $.ajax({
             type: "POST",
             url: "ajaxconnection",
             data: {comm_status:comm_status},
             success: function(msg) {
				 document.getElementById(div_id).innerHTML=msg;
             }
       });
}
function set_connections(action,decision){
	
	$.ajax({
             type: "POST",
             url: "setconnection",
             data: {action:action,decision:decision},
             success: function(msg) {
				 window.location.reload();
             }
       });
	
}
load_connections(0,'con_request');
load_connections(2,'con_current');
load_connections(-99999,'con_deleted');
</script>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit-login"> 
  <!-- Example row of columns -->
  <div class="row">
    <div class ="container">
    <div class="span12">
    <div class="span650 pull-left"><p><span class="profilename2">Hello Dr. Michael Gray</span> <span class="nav100 recent">Last log-in 08/01/13 5:00pm</span></p></div>
    <div class="form-pad2 span250 pull-right">
      <p><span class="bold">My Job Search: </span><span class="redunderline">Active</span></p></div> </div>
      <div class="span12">
        <div class="span930 pull-left">
        	
            
           <div class="form-pad2">
            <div class="bs-table-scrollable">
            	<div style="max-height:375px;height:auto;overflow-y:auto;margin-top:30px;border:1px solid #DDDDDD;">
                <table class="table table-bordered table-striped" style="border:0px;margin-top:0px;">
                <thead>
                <tr>
                <td><span class="bold">Connection Requests</span></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>
                <div id="con_request"></div>
                </td>
                  </tr>
                  </tbody>
              </table>
                </div>
                <div style="max-height:375px;height:auto;overflow-y:auto;margin-top:30px;border:1px solid #DDDDDD;">
              <table class="table table-bordered table-striped" style="border:0px;margin-top:0px;">
                <thead>
                <tr>
                <td><span class="bold">Current Connections</span></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>
                <div id="con_current"></div>
                </td>
                  </tr>
                  </tbody>
              </table>          
                </div>        
                <div style="max-height:375px;height:auto;overflow-y:auto;margin-top:30px;border:1px solid #DDDDDD;">
                <table class="table table-bordered table-striped" style="border:0px;margin-top:0px;">
                <thead>
                <tr>
                <td><span class="bold">Deleted Connections</span></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>
                <div id="con_deleted"></div>
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
