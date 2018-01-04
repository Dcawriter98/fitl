
@extends( 'layouts.master')

@section('title', 'Job Records')

@section('content')
<div class="page-header">
	<h1>Job Records</h1>
	
</div>

<!--loop through array of objects-->

<div class="list-group">

@foreach ($objects as $jobrecords)
	<a href="{{ url( 'jobrecords', [$jobrecords->id]) }}" class="list-group-item">
		<h2>The job record details follow:<br></h2>
			<p class="list-group-item-text">
				
				<b>Employer name</b> {{ $jobrecords->emp_name }}<br>
				<b>Employer address</b> {{ $jobrecords->emp_add }}<br>
				<b>Employer website</b> {{ $jobrecords->emp_website }}<br>
				<b>Position title</b> {{ $jobrecords->position }}<br>
				
			</p>
	</a>
@endforeach

</div>

@endsection