@extends('layouts.master')

@section('title')
Job Applications App
@endsection
	
@section('content')
<h1>Job Application Record</h1>
<p>The job record details follow:<br> 
	<b>Date of application</b> <?php echo $job_record->app_date; ?><br>
	<b>Contact</b> <?php echo $job_record->contact; ?><br>
	<b>Employer name</b> <?php echo $job_record->emp_name; ?><br>
	<b>Employer address</b> <?php echo $job_record->emp_add; ?><br>
	<b>Employer website</b> <?php echo $job_record->emp_website; ?><br>
	<b>Position title</b> <?php echo $job_record->position; ?><br>
	<b>Work type</b> <?php echo $job_record->work_type; ?><br>
	<b>Contact person</b> <?php echo $job_record->org_contact; ?><br>
	<b>Contact telephone</b> <?php echo $job_record->contact_tel; ?><br>
	<b>Application submitted</b> <?php echo $job_record->app_submit; ?><br>
	<b>Confirmation information</b> <?php echo $job_record->confirmation_info; ?><br>

</p>
@endsection