@extends( 'layouts.master')

@section( 'title', 'Submit Job Information Information')

@section( 'content')

<div class="page-header">
	<h1>Submit Job Information Information</h1>
</div>

{!! Form::model($job_record, ['action' => 'JobRecordController@store']) !!}

<div class="form-group">
    {!! Form::label('app_date', 'Application Date') !!}
    {!! Form::text('app_date', '', ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contact_method', 'Contact Method (E-mail, In Person, Phone/Fax, Postal Mail, or Website)') !!}
    {!! Form::text('contact_method', '', ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('employer_name', 'Employer Name') !!}
    {!! Form::text('employer_name', '', ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('employer_address', 'Employer Address') !!}
    {!! Form::textarea('employer_address', '', ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('employer_website', 'Employer Website') !!}
    {!! Form::text('employer_website', '', ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('position', 'Position') !!}
    {!! Form::text('position', '', ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('work_type', 'Work Type (Full Time, Part Time, Temporary, or Contract)') !!}
    {!! Form::text('work_type', '', ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('org_contact', 'Contact Person') !!}
    {!! Form::text('org_contact', '', ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contact_tel', 'Contact Telephone Number') !!}
    {!! Form::text('contact_tel', '', ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('app_submit', 'Application Submitted (Yes or No)') !!}
    {!! Form::text('app_submit', '', ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('confirmation_info', 'Confirmation (E-Mail or Website) Received (Yes or No)') !!}
    {!! Form::text('confirmation_info', '', ['class' => 'form control']) !!}
</div>

<button class="btn btn-success" type="submit">Submit Information</button>

{!! Form::close() !!}

@endsection