@layout('layouts.physician_master') 

@section('content')
<div class="hero-unit-login"> 
  <!-- Example row of columns -->
  <div class="row">
    <div class ="container">
    <div class="span12">
    
    <div class="span650 pull-left">
    <p><span class="profilename2">Hello Dr. Michael Gray</span> 
    <span class="nav100 recent">Last log-in 08/01/13 5:00pm</span></p></div>
    <div class="form-pad2 span250 pull-right">
      <p><span class="bold">Job Search: </span><span class="redunderline">Active</span></p></div> 
      
      
      <div class="find-hospitals-bg"> 
      <div class="container">
      <div class="span360 pull-left">
      <form action="search" method="post" name="search_form" id="search_form">
      			<table class="find-hospitals search-margin">
                <tbody width="100%">
                <tr>
                <td class="span180 red2">Enter a Hospital Name, City, State or Zip Code</td>
                <td class="span180 red2">Within</td>
                </tr>
                </tbody>
                <tbody>
                <tr>
                <td><input type="text" name="search_field" id="search_field" class="span180"></td>
                <td><select class="span80" name="radius_search" id="radius_search">
  <option value="Radius">Radius</option>              
  <option value="10">10 miles</option>
  <option value="20">20 miles</option>
  <option value="50">50 miles</option>
  <option value="100">100 miles</option>
  <option value="250">250 miles</option>
</select>
<img class="btn"src="img/physician/red_search_icon.gif" alt="Search icon" onclick="document.search_form.submit()">
                </td>
                </tr>
                </tbody>
                </table>
      
      
   		 
      </div>
      <div class="span520 pull-right">
   		 Search Options
         <table class="find-hospitals search-margin">
                <tbody width="100%">
                <tr>
                <td class="span150">
        		<label><input type="checkbox" name="tier1or2" id="tier1or2"/> <span class="font9px">Tier 1/ Tier 2 Facility</span></label>
                </td>
                <td class="span150">
                <label><input type="checkbox" name="academic" id="academic"/> <span class="font9px">Academic Facility</span></label>
                </td>
                <td class="span150">
                <label><input type="checkbox" name="anystlic" id="anystlic"/> <span class="font9px">Accepts Any State License</span></label>
                </td>
                </tr>
                <tr>
                <td class="span150">
        		<label><input type="checkbox" name="emr" id="emr"/> <span class="font9px">EMR Coverage</span></label>
                </td>
                <td class="span150">
                <label><input type="checkbox" name="cmpsn200plus" id="cmpsn200plus"/> <span class="font9px">&gt;$200,000/yr openings</span></label>
                </td>
                <td class="span150">
                <label><input type="checkbox" name="cme" id="cme"/> <span class="font9px">CME Compensation</span></label>
                </td>
                </tr>
                <tr>
                <td class="span150">
        		<label><input type="checkbox" name="reprentation" id="reprentation"/> <span class="font9px">Have Representation</span></label>
                </td>
                <td class="span150">
                <label><input type="checkbox" name="mjdblcvg" id="mjdblcvg" /> <span class="font9px">Major Double Coverage</span></label>
                </td>
                <td class="span150">
                <label><input type="checkbox" name="mdlvlcvg" id="mdlvlcvg"/> <span class="font9px">Mid-Level Coverage</span></label>
                </td>
                </tr>
                <tr>
                <td class="span150">
        		<label><input type="checkbox" name="recstatus" id="recstatus"/> <span class="font9px">In Recruiting Status</span></label>
                </td>
                <td class="span150">
                <label><input type="checkbox" name="noihcdcvg" id="noihcdcvg"/> <span class="font9px">No IHC Coverage</span></label>
                </td>
                <td class="span150">
                <label><input type="checkbox" name="noadmordrs" id="noadmordrs"/> <span class="font9px">No Admin Orders Required</span></label>
                </td>
                </tr>
                </tbody>
         </table>
	 </form>
      </div>
      </div>
      </div>
      </div>
      
      <div class="span12">
        <div class="span930 pull-left">
        <p><span class="mile">There are 14 hospital within 10 miles of 94530 </span></p>
            
           <div class="form-pad2">
            <div class = "span360 pull-left">
            <div id="side_bar1"></div>
            <!--<table class="table table-bordered">
           
                <tr>
                  <td class="redunderline">1. Doctors Medical Center-San Pablo</td>
                </tr>
                
                 <tr>
                  <td class="">2. Alta Bates Summit Medical Center-Alta Bates Camp</td>
                </tr>
                
                <tr>
                  <td class="">3. Kaiser Foundation Oakland/Richmond</td>
                </tr>
                
                <tr>
                  <td class="">4. Alameda County Medical Center</td>
                </tr>
                
                <tr>
                  <td class="">5. Doctors Medical Center-San Pablo</td>
                </tr>
                
                <tr>
                <td class="">6. Alta Bates Summit Medical Center-Alta Bates Camp</td>
                </tr>
                
                <tr>
                  <td class="">7. Kaiser Foundation Oakland/Richmond</td>
                </tr>
                
                <tr>
                  <td class="">8. Alameda County Medical Center</td>
                </tr>
                
                <tr>
                  <td class="">9. Doctors Medical Center-San Pablo</td>
                </tr>
                
                <tr>
                <td class="">10. Alta Bates Summit Medical Center-Alta Bates Camp</td>
                </tr>
                
                <tr>
                  <td class="">11. Kaiser Foundation Oakland/Richmond</td>
                </tr>
                
                <tr>
                  <td class="">12. Alameda County Medical Center</td>
                </tr>
                
                <tr>
                  <td class="">13. Kaiser Foundation Oakland/Richmond</td>
                </tr>
                
                <tr>
                  <td class="">14. Alameda County Medical Center</td>
                </tr>
             
              </table>-->
              </div>
            
            
            </div>
            <div class="span520 pull-right">
	        <div id = "map_canvas" style="width: 500px;height: 450px;"></div> 
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
</div>
@endsection

@section('scripts')
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">
	var gmarkers = [];
	var infowindow =  new google.maps.InfoWindow({
	    content: ''
	});
	 var bounds = new google.maps.LatLngBounds ();

	$(document).ready(function () {
		function bindInfoWindow(marker, map, infowindow, html) {
		    google.maps.event.addListener(marker, 'click', function() {
		        infowindow.setContent(html);
		        infowindow.open(map, marker);
		    });
		} 

		function createMarker(point, name, city, state, type, specs, dist, alias, html){
			var marker = new google.maps.Marker({
				position: point,
				title: name
			});
			marker.myname = name;
			marker.mycity = city;
			marker.mystate = state;
			marker.mytype = type;
			marker.myspecs = specs;
			marker.mydist = dist;
			marker.myalias = alias;
			gmarkers.push(marker);
			return marker;
		}


		var map = new google.maps.Map(document.getElementById("map_canvas"), {
			zoom: 6,
			center: new google.maps.LatLng({{Sentry::user()->get('metadata.lat')}},{{Sentry::user()->get('metadata.lng')}}),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});


		var json = {{ $hospitals }};
		for (var i = 0, length = json.length; i < length; i++) {
			var data = json[i];
			var	point = new google.maps.LatLng(data.lat, data.lng);
			bounds.extend (point);
			var name = data.name;
			var city = data.city;
			var st = data.state;
			var type = data.type;
			var specs = ((data.tier1or2 == 1)? "tier1or2,": "");
			   specs += ((data.academic == 1)? "academic,": "");
			   specs += ((data.cmpsn200plus == 1)? "cmpsn200plus,": "");
			   specs += ((data.cme == 1)? "cme,": "");
			   specs += ((data.mjdblcvg == 1)? "mjdblcvg,": "");
			   specs += ((data.mdlvlcvg == 1)? "mdlvlcvg,": "");
			   specs += ((data.emr == 1)? "emr,": "");
			   specs += ((data.noihcdcvg == 1)? "noihcdcvg,": "");
			   specs += ((data.noadmordrs == 1)? "noadmordrs,": "");
			   specs += ((data.prisnglcvg == 1)? "prisnglcvg,": "");
			   specs += ((data.anystlic == 1)? "anystlic,": "");
			   specs += ((data.recstatus == 1)? "recstatus,": "");
			   specs += ((data.reprentation == 1)? "reprentation,": "");
			   specs = specs.slice(0, -1);
			var dist = data.distance;
			var alias = data.alias;
			var html = "<a href='/hospital/" + data.alias + "'>"+data.name + "</a><br />" + data.otherinfo +"<br /><br />";
			var marker = createMarker(point, name, city, st, type, specs, dist, alias, html);
			bindInfoWindow(marker, map, infowindow, html);
			marker.setMap(map);
			map.fitBounds (bounds);
		}
		 makeSidebar();
	 });


	function makeSidebar(){
		var html1 = "<table class='table table-bordered'>";
		for (var i = 0; i < gmarkers.length; i++) {
			if (gmarkers[i].getVisible()) {
				html1 += '<tr><td class="" onclick="myclick(' + i + ')">' + gmarkers[i].myname + '</td></tr>';
			}
		}
		html1 += "</table>";
		document.getElementById("side_bar1").innerHTML = html1;
	}

	function myclick(i) {
		google.maps.event.trigger(gmarkers[i], "click");
	}

	function boxclick(box, specs) {
		infowindow.close();
		var vis = true;

		for (var i = 0; i < gmarkers.length; i++){
			$('input[type=checkbox]').each( function() {			
				if (gmarkers[i].myspecs.indexOf($(this).attr('name')) < 0 && this.checked) {
					vis = false;
				}
				// if (gmarkers[i].myspecs.indexOf($(this).attr('name')) >= 0 && !this.checked) {
				// 	vis = false;
				// }
			});
			// alert(gmarkers[i].myspecs);		
			// alert(vis);
			gmarkers[i].setVisible(vis);
			vis = true;
		}
		makeSidebar();
	}

</script>
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