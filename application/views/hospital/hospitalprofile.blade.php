@layout('layouts.physician_master') 

@section('content')
<script language="javascript">
function post_comment(){
		var comment=document.getElementById("comment_box").value;
        $.ajax({
             type: "POST",
             url: "<?php echo substr($_SERVER['PHP_SELF'],0,-9);?>addcomment",
             data: {comment:comment,recipient: {{$recipient}}},
             success: function(msg) {
				 window.location.reload();
             }
       });
}

function add_favorites(){
	
        $.ajax({
             type: "POST",
             url: "<?php echo substr($_SERVER['PHP_SELF'],0,-9);?>addfavorites",
             data: {target: {{$recipient}}},
             success: function(msg) {
				 window.location.reload();
             }
       });
}

</script>
<div class="hero-unit-login"> 
  <!-- Example row of columns -->
  <div class="row">
    <div class ="container">
    <div class="span12">
      
      <div class="find-hospitals2"> 
      <div class="container">
      <div class="span520 pull-left">
      <p><span class="profilename">{{$hospitalDetail["name"]}}</span></p>	
      <p class="nav20 navleft20">
      @if($Jobcount==0)
      Not Recruiting: This hospital is not actively recruiting 
      @endif
      @if($Jobcount >0)
      Actively Recruiting: This hospital is actively recruiting
      @endif
      
      @if($connection==0)
      <span class="redunderline navleft50" onclick="add_favorites()">
      Add to Favorites
      </span>
      @endif
      @if($connection!=0)
      <span class="redunderline navleft50">
      Favorited
      </span>
      @endif
      </p>
      <p></p>
      
   		 
      </div>
      <div class="span360 pull-right">
   		 <p class="nav20 recent">direct url: http://www.myjobsearch.us.com/hospital/425aca/</p>
         

      </div>
      </div>
      </div>
      </div>
      
      <div class="span12">
       <div class="span200 pull-left">
       <table class="table table-message">
       
       <tr>
       <td><span class="bold">Location:</span><br>
       {{$hospitalDetail["address"]}}<br>
       {{$hospitalDetail["city"]}}, {{$hospitalDetail["state"]}} {{$hospitalDetail["zip"]}}</td>
       </tr>
       <tr>
       <td><span class="bold">Contact:</span><br>
           <span class="underline">{{$Jobs[0]->contact_email}}</span></td>
       </tr>
   
       </table>
       </div>
        <div class="span730 pull-right">
        	
            
           <div class="form-pad2">
            <div class="bs-table-scrollable">
                <table class="table table-bordered table-striped">
                <thead>
                <tr>
                <td class="span180">
<span class="red2">Job Description</span>:
                </td>
                <td><span class="bold">{{$Jobs[0]->position}}</span><br>
                {{$Jobs[0]->cpara}}
                </tr>
                </thead>
                <thead>
                <tr>
                <td class="span180">
<span class="red2">About this Hospital:</span>
                </td>
                <td>
                @if($hospitalDetail["emr"])
                &#8226; Facility has ER capabilities<br>
                @endif
                @if($hospitalDetail["tier1or2"]==1)
&#8226; Is a Tier 1/2 Facility <br>
				@endif
                @if($hospitalDetail["academic"]==1)
&#8226; Is an Academic Training Facility <br>
				@endif
                @if($hospitalDetail["cmpsn200plus"]==1)
&#8226; Does not have any open positions with compenstaion of &gt; $200,000+ <br>
				@endif
                @if($hospitalDetail["cme"]==1)
&#8226; Does NOT Offer CME Compensation <br>
				@endif
                @if($hospitalDetail["mjdblcvg"]==1)
&#8226; Offers Majority Double Compensation <br>
				@endif
                @if($hospitalDetail["mdlvlcvg"]==1)
&#8226; Does NOT Offer Mid-Level Coverage <br>
				@endif
                @if($hospitalDetail["emr"]==1)
&#8226; Requires EMR Utilization <br>
				@endif
                @if($hospitalDetail["noihcdcvg"]==1)
&#8226; Requires in-house Coverage <br>
				@endif
                @if($hospitalDetail["noadmordrs"]==1)
&#8226; Does NOT Require Admission Orders <br>
				@endif
                @if($hospitalDetail["prisnglcvg"]==1)
&#8226; Allows Primary Single Covers <br>
				@endif
                @if($hospitalDetail["anystlic"]==1)
&#8226; Requires Physician Licenses from Certain Stains (Contact for more info) 
                @endif
                </tr>
                </thead>
                <thead>
                <tr>
                <td class="span180">
<span class="red2">About Location:</span>
                </td>
                <td>
                {{$Jobs[0]->lpara}}
                </tr>
                </thead>
           
                
                        </table>
                
    <table class="table table-bordered table-striped">
                <thead>
                <tr>
                <td>
                <span class="red2">Post a Comment </span> 
                <p><textarea rows="3" class="span8" id="comment_box" name="comment_box"></textarea></p>
                <p><button type="button" class="btn btn-primary" onclick="post_comment()">Publish</button></p>
                </td>
                </tr>
                </thead>
      </table>
  
  
  <table class="table table-bordered table-striped">
                <thead>
                <tr>
                <td><span class="red2">Comments </span> </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>
                
                <table>
                @foreach($comments as $comment)
                <tbody>
                <tr>
                <td>{{HTML::image('img/physician/physiciansprofile.jpg');}}</td>
                <td class="span8">
                <div><span class="messageb recentblue">{{$comment->first_name}} {{$comment->last_name}}</span><span class="navleft20 recent">{{gmdate("g:i A", $comment->created_at);}} on {{gmdate("F j, Y", $comment->created_at);}}</span></div>
                <div class="message">{{$comment->message}}</div>
                </td>
                
  				 </tr>
                 </tbody>
                 @endforeach
                 
   				 </table>
                
                
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
        <li><a href="#">About</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <ul class="footer-links">
        <li>© 2013, Yi Medical, Inc. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Privacy Policy</a></li>
        <li><a href="#">Press</a></li>
        <li><a href="#">Partners</a></li>
      </ul>
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
.mile {
	padding: 20px 20px 0px 20px;
	font-size: 16px;
	font-weight: bold;
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