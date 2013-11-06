@layout('layouts.master')
@section('breadcrumb')
<H1>Hospital Results</H1>
	<ul class="breadcrumb">
	  <li>{{ HTML::link('/', 'Home') }}<span class="divider">/</span></li>
	  <li>{{ HTML::link('hospital', 'Hospital') }}<span class="divider">/</span></li>
	  <li>{{ HTML::link('search', 'Search') }}<span class="divider">/</span></li>
	  <li class="active">Search Results</li>
	</ul>
@endsection

@section('content')
{{ Form::open('hospital/search/results') }}

	{{ Form::label('Search', 'Enter a Hospital Name, City, or State:') }}
	{{ Form::text('Search','', array('class'=>'input-medium', 'placeholder'=>"Insert Value Here...")) }}
	{{ Form::select('Radius', array('10' => '10 Miles',  '20' => '20 Miles', '50'=>'50 Miles','100'=>'100 Miles','250'=>'250 Miles'), '10', array('class'=>'input-small')) }}
	{{ Form::submit('Search', array('class'=>'btn btn-primary')) }}

{{ Form::close()}}
<H1>Search Results</H1>
Search:  {{ $search }}
<div class="row-fluid">
		<p>Search Results<br />
		   Filter by Category:</p>
	</div>
	<div class="row-fluid">
		{{ Form::open('#') }}
			<div class="span3">
			{{ Form::checkbox('tier1or2', '1',false, array('onclick'=>'boxclick(this,"tier1or2")', "id"=>"tier1or2")) }}{{ Form::label('tier1or2', 'Tier1/2 facility', array('class'=>'checkbox inline')) }}<br/>
			{{ Form::checkbox('academic', '1',false, array('onclick'=>'boxclick(this,"academic")', "id"=>"academic")) }}{{ Form::label('academic', 'academic faciliaty', array('class'=>'checkbox inline')) }}<br/>
			{{ Form::checkbox('anystlic', '1',false, array('onclick'=>'boxclick(this,"anystlic")', "id"=>"anystlic")) }}{{ Form::label('anystlic', 'Accepts Any State License:', array('class'=>'checkbox inline')) }}<br/>
			{{ Form::checkbox('emr', '1',false, array('onclick'=>'boxclick(this,"emr")', "id"=>"emr")) }}{{ Form::label('emr', 'EMR Coverage', array('class'=>'checkbox inline')) }}
			</div>
			<div class="span3">
			{{ Form::checkbox('cmpsn200plus', '1',false, array('onclick'=>'boxclick(this,"cmpsn200plus")', "id"=>"cmpsn200plus")) }}{{ Form::label('cmpsn200plus', '>$200,000/yr openings', array('class'=>'checkbox inline')) }}<br/>
			{{ Form::checkbox('cme', '1',false, array('onclick'=>'boxclick(this,"cme")', "id"=>"cme")) }}{{ Form::label('cme', 'CME Compensation', array('class'=>'checkbox inline')) }}<br/>
			{{ Form::checkbox('reprentation', '1',true , array('onclick'=>'boxclick(this,"reprentation")', "id"=>"reprentation")) }}{{ Form::label('reprentation', 'Have reprentation', array('class'=>'checkbox inline')) }}
			</div>
			<div class="span3">
			{{ Form::checkbox('mjdblcvg', '1',false, array('onclick'=>'boxclick(this,"mjdblcvg")', "id"=>"mjdblcvg")) }}{{ Form::label('mjdblcvg', 'Major Double Coverage', array('class'=>'checkbox inline')) }}<br/>
			{{ Form::checkbox('mdlvlcvg', '1',false, array('onclick'=>'boxclick(this,"mdlvlcvg")', "id"=>"mdlvlcvg")) }}{{ Form::label('mdlvlcvg', 'Mid-Level Coverage:', array('class'=>'checkbox inline')) }}<br/>
			{{ Form::checkbox('recstatus', '1', true, array('onclick'=>'boxclick(this,"recstatus")', "id"=>"recstatus")) }}{{ Form::label('recstatus', 'In Recruiting Status', array('class'=>'checkbox inline')) }}
			</div>
			<div class="span3">
			{{ Form::checkbox('noihcdcvg', '1',false, array('onclick'=>'boxclick(this,"noihcdcvg")', "id"=>"noihcdcvg")) }}{{ Form::label('noihcdcvg', 'No IHC Coverage:', array('class'=>'checkbox inline')) }}<br/>
			{{ Form::checkbox('noadmordrs', '1',false, array('onclick'=>'boxclick(this,"noadmordrs")', "id"=>"noadmordrs")) }}{{ Form::label('noadmordrs', 'No Admin Orders Required:', array('class'=>'checkbox inline')) }}<br/>
			{{ Form::checkbox('prisnglcvg', '1',false, array('onclick'=>'boxclick(this,"prisnglcvg")', "id"=>"prisnglcvg")) }}{{ Form::label('prisnglcvg', 'Primary Single Coverage:', array('class'=>'checkbox inline')) }}
			</div>
		{{ Form::close() }}
	</div>
	<div class="row-fluid">
		<div class="span4 hidden-phone">
			<div id="side_bar1"></div>
		</div>
		<div class="span4 visible-phone">
			<div id="side_bar2"></div>
		</div>
		<div class="span6 hidden-phone">
			<div id = "map_canvas" style="width: 500px;height: 450px;"></div>
		</div>
	</div>
@endsection

@section('scripts')
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
		var html1 = "";
		var html2 = ""
		for (var i = 0; i < gmarkers.length; i++) {
			if (gmarkers[i].getVisible()) {
				html1 += '<a href="javascript:myclick(' + i + ')">' + gmarkers[i].myname + '</a><br/>';
				html2 += '<a href = "/hospital/' + gmarkers[i].myalias + '">' + gmarkers[i].myname + '</a><br/>';
			}
		}
		document.getElementById("side_bar1").innerHTML = html1;
		document.getElementById("side_bar2").innerHTML = html2;
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
@endsection