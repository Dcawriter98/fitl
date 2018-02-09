<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Job_record;

class JobRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobrecords = Job_record::all();

        $data = array();
        $data['objects'] = $jobrecords;

        return view('jobrecords.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobrecord = new Job_record;
        $data = array();
        $data['job_record'] = $jobrecord;
        return view('jobrecords.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jobrecord = new Job_record;

        // set the job record's data from the form data
        $jobrecord->app_date = $request->app_date;
        $jobrecord->contact = $request->contact;
        $jobrecord->emp_name = $request->emp_name;
        $jobrecord->emp_add = $request->emp_add;
        $jobrecord->emp_website = $request->emp_website;
        $jobrecord->position = $request->position;
        $jobrecord->work_type = $request->work_type;
        $jobrecord->org_contact = $request->org_contact;
        $jobrecord->contact_tel = $request->contact_tel;
        $jobrecord->app_submit = $request->app_submit;
        $jobrecord->confirmation_info = $request->confirmation_info;

        // create the new job record in the database
        if (!$jobrecord->save()) {

            $errors = $jobrecord->getErrors();

            // redirect back to the create page
            // and pass along the errors
            return redirect()
                ->action('JobRecordController@create')
                ->with('errors', $errors)
                ->withInput();
        }

        //success!
        return redirect()
        ->action('JobRecordController@index')
        ->with('message', 
            '<div class="alert alert-success">Job record created successfully.</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data = array();
        
        $job_record = Job_record::findOrFail($id);
        $data['job_record'] = $job_record;
        
        return view('jobrecords/show', $data );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job_record = Job_record::findOrFail($id);
        return view('jobrecords/edit', ['job_record' => $job_record]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jobrecord = Job_record::findOrFail($id);

        // set the job record's data from the form data
        $jobrecord->app_date = $request->app_date;
        $jobrecord->contact = $request->contact;
        $jobrecord->emp_name = $request->emp_name;
        $jobrecord->emp_add = $request->emp_add;
        $jobrecord->emp_website = $request->emp_website;
        $jobrecord->position = $request->position;
        $jobrecord->work_type = $request->work_type;
        $jobrecord->org_contact = $request->org_contact;
        $jobrecord->contact_tel = $request->contact_tel;
        $jobrecord->app_submit = $request->app_submit;
        $jobrecord->confirmation_info = $request->confirmation_info;

        // if the save fails
        // redirect back to the edit page
        // and show the errors
         if (!$jobrecord->save()) {
            return redirect()
                ->action('JobRecordController@edit', $jobrecord->id)
                ->with('errors', $jobrecord->getErrors())
                ->withInput();
        }

    // success!!
    // redirect to index and pass a success message
    return redirect()
        ->action('JobRecordController@index')
        ->with('message', 
            '<div class="alert alert-success">The job record was updated.</div>');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
