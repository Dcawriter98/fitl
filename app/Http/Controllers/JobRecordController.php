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
        $jobrecord->app_data = $request->app_data;
        $jobrecord->contact_method = $request->contact_method;
        $jobrecord->employer_name = $request->employer_name;
        $jobrecord->employer_address = $request->employer_address;
        $jobrecord->employer_website = $request->employer_website;
        $jobrecord->position = $request->position;
        $jobrecord->work_type = $request->work_type;
        $jobrecord->org_contact = $request->org_contact;
        $jobrecord->contact_tel = $request->contact_tel;
        $jobrecord->app_submit = $request->app_submit;
        $jobrecord->confirmation_info = $request->confirmation_info;

        // create the new job record in the database
        $jobrecord->save();
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
        
        $job_record = Job_record::find($id);
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
        //
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
        //
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
