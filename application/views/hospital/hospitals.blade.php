@layout('layouts.physician_master')
@section('content')
<script language="javascript">
function connect_hospital(hospital_id,type,action_type){
	
        $.ajax({
             type: "POST",
             url: "connecthospital",
             data: {hospital_id:hospital_id,type:type,action_type:action_type},
             success: function(msg) {
				 connected_hospitals();
				 recommended_hospitals();
				 liked_hospitals();
             }
       });
}

function remove_hospital(hospital_id){
	
        $.ajax({
             type: "POST",
             url: "removehospital",
             data: {hospital_id:hospital_id},
             success: function(msg) {
				 connected_hospitals();
				 recommended_hospitals();
				 liked_hospitals();
             }
       });
}

function hospital_profile(hospital_id){
	window.location.href="hospitalprofile/"+hospital_id;
}

function liked_hospitals(){
	
        $.ajax({
             type: "POST",
             url: "likedhospitals",
             data: {},
             success: function(msg) {
				 document.getElementById("liked_hospitals").innerHTML=msg;
             }
       });
}
function connected_hospitals(){
	
        $.ajax({
             type: "POST",
             url: "connectedhospitals",
             data: {},
             success: function(msg) {
				 document.getElementById("connected_hospitals").innerHTML=msg;
             }
       });
}

function recommended_hospitals(){
	
        $.ajax({
             type: "POST",
             url: "recommendedhospitals",
             data: {},
             success: function(msg) {
				 document.getElementById("recommended_hospitals").innerHTML=msg;
             }
       });
}
connected_hospitals();
liked_hospitals();
recommended_hospitals();
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
                <div style="max-height:300px;height:auto;overflow-y:auto;margin-top:30px;border:1px solid #DDDDDD;">
                <table class="table table-bordered table-striped" style="border:0px;margin-top:0px;">
                <thead>
                <tr>
                <td><span class="bold">Connected Hospitals</span></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>
                <div id="connected_hospitals">
                
                </div>       
                </td>
                  </tr>
                  </tbody>
              </table>
                </div>
                
             	<div style="max-height:300px;height:auto;overflow-y:auto;margin-top:30px;border:1px solid #DDDDDD;">
                <table class="table table-bordered table-striped" style="border:0px;margin-top:0px;">
                <thead>
                <tr>
                <td><span class="bold">Liked Hospitals</span></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>
                 <div id="liked_hospitals">
                
                </div>
                </td>
                  </tr>
                  </tbody>
              </table>          
             	</div>         
                <div style="max-height:300px;height:auto;overflow-y:auto;margin-top:30px;border:1px solid #DDDDDD;">
                <table class="table table-bordered table-striped" style="border:0px;margin-top:0px;">
                <thead>
                <tr>
                <td><span class="bold pull-left">Recommended Hospitals</span><span class="recentblue form-pad2">Based upon your current location and your desired locations</span> </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>
                <div id="recommended_hospitals">
                
                </div>
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
