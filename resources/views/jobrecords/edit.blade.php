@extends( 'layouts.master')

@section( 'title', 'Edit Job Information Information')

@section( 'content')

<div class="page-header">
	<h1>Edit Job Information Information</h1>
</div>

{!! Form::model($job_record, ['action' => ['JobRecordController@update', $job_record->id], 'method' => 'put'
]) !!}

@include('jobrecords.partials.object_form')

<button class="btn btn-success" type="submit">Update Information</button>

{!! Form::close() !!}

@endsection