@layout('layouts.master')
@section('breadcrumb')
<H1>Hospital Search</H1>
	<ul class="breadcrumb">
	  <li>{{ HTML::link('/', 'Home') }}<span class="divider">/</span></li>
	  <li>{{ HTML::link('hospital', 'Hospital') }}<span class="divider">/</span></li>
	  <li class="active">Hospital Search</li>
	</ul>
@endsection

@section('content')
<H3>Search by Text</H3>
<p>Use this search to search by Name, City, County, State, or Zip</p>
	{{ Form::open('hospital/search/results') }}

		{{ Form::label('Search', 'Enter a Hospital Name, City, or State:') }}
		{{ Form::text('Search','', array('class'=>'input-medium', 'placeholder'=>"Insert Value Here...")) }}
		{{ Form::select('Radius', array('10' => '10 Miles',  '20' => '20 Miles', '50'=>'50 Miles','100'=>'100 Miles','250'=>'250 Miles'), '10', array('class'=>'input-small')) }}
		{{ Form::submit('Search', array('class'=>'btn btn-primary')) }}

	{{ Form::close()}}
@endsection