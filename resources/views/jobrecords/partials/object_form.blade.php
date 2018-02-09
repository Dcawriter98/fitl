<div class="form-group">
    {!! Form::label('app_date', 'Application Date') !!}
    {!! Form::text('app_date', null, ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contact', 'Contact Method (E-mail, In Person, Phone/Fax, Postal Mail, or Website)') !!}
    {!! Form::text('contact', null, ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('emp_name', 'Employer Name') !!}
    {!! Form::text('emp_name', null, ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('emp_add', 'Employer Address') !!}
    {!! Form::textarea('emp_add', null, ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('emp_website', 'Employer Website') !!}
    {!! Form::text('emp_website', null, ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('position', 'Position') !!}
    {!! Form::text('position', null, ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('work_type', 'Work Type (Full Time, Part Time, Temporary, or Contract)') !!}
    {!! Form::text('work_type', null, ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('org_contact', 'Contact Person') !!}
    {!! Form::text('org_contact', null, ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contact_tel', 'Contact Telephone Number') !!}
    {!! Form::text('contact_tel', null, ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('app_submit', 'Application Submitted (Yes or No)') !!}
    {!! Form::text('app_submit', null, ['class' => 'form control']) !!}
</div>

<div class="form-group">
    {!! Form::label('confirmation_info', 'Confirmation (E-Mail or Website) Received') !!}
    {!! Form::text('confirmation_info', null, ['class' => 'form control']) !!}
</div>