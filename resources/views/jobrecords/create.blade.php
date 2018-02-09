@extends( 'layouts.master')

@section( 'title', 'Submit Job Information Information')

@section( 'content')

<div class="page-header">
	<h1>Submit Job Information Information</h1>
</div>

{!! Form::model($job_record, ['action' => 'JobRecordController@store']) !!}

@include('jobrecords.partials.object_form')

<button class="btn btn-success" type="submit">Submit Information</button>

{!! Form::close() !!}

@endsection