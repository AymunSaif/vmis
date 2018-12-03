<?php

namespace App\Http\Controllers;
use App\PlantripMember;
use App\PlantripPurpose;
use App\PlantripPurposetype;
use App\PlantripTriplocation;
use App\PlantripTriprequest;
use App\PlantripTriptype;
use App\PlantripVisitedproject;
use App\VmisVehicle;
use App\VmisDriver;
use App\VmisAssignedVehicle;
use App\VmisAssignedDriver;
use App\VmisRequestToTransportOfficer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VmisRequestToTransportOfficerController extends Controller
{
    public function pendingRequests()
    { 
        
        $triprequests = PlantripTriprequest::where('status',1)
        ->where('approval_status','pending')
        ->get();
        $tripcounts=$triprequests->count();
        // dd($triprequests);
      
        return view('visitrequest.seerequest',['triprequests'=>$triprequests ,'tripcounts'=>$tripcounts]);
    }   

    public function proceedFurther($id)
    {
        // dd($id);
        $triprequest = PlantripTriprequest::where('id',$id)->first();
        $purposeCounts=$triprequest->PlantripPurpose->count();
        $drivers= VmisDriver::all();
        $vehicles=VmisVehicle::all();
        // dd($triprequest->PlantripRequestedcity[0]->PlantripCity->name);
        return view('visitrequest.proceedfurther',['vehicles'=>$vehicles,'drivers'=>$drivers,'triprequest'=>$triprequest,'purposeCounts'=>$purposeCounts]);

    }
    public function sentRequests()
    {
        $triprequests = PlantripTriprequest::where('status',0)
        ->where('approval_status','Pending')
        ->orWhere('approval_status','Approved')
        ->orWhere('approval_status','Not Approved')
        ->get();
        
        $tripcounts=$triprequests->count();
        // dd($triprequests[0]->VmisRequestToTransportOfficer[0]->VmisAssignedDriver[0]->VmisDriver->User->name);
        return view('visitrequest.sentforapproval',['triprequests'=>$triprequests,'tripcounts'=>$tripcounts]);
    }

    public function requestSentFurtherToDirectors(Request $request)
    {
    //    dd($request);
        $tripRequest= new VmisRequestToTransportOfficer();
        $tripRequest->plantrip_triprequest_id=$request->triprequest_id;
        $tripRequest->status='1';
        $tripRequest->approval_status='1';
        $tripRequest->save();

        $assignedDriver= new VmisAssignedVehicle();
        $assignedDriver->request_sentfurther_id=$tripRequest->id;
        $assignedDriver->vmis_vehicle_id=$request->assignvehicle;
        $assignedDriver->save();

        $assignedVehicle =new VmisAssignedDriver();
        $assignedVehicle->request_sentfurther_id=$tripRequest->id;
        $assignedVehicle->vmis_driver_id=$request->assigndriver;
        $assignedVehicle->save();

        $pendingtriprequests = PlantripTriprequest::find($request->triprequest_id);
        $pendingtriprequests->status='0';
        $pendingtriprequests->save();
        return redirect()->route('pendingRequests')->with('success','Request Sent to Directors');
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vmis_requesttotransportofficer  $vmis_requesttotransportofficer
     * @return \Illuminate\Http\Response
     */
    public function show(vmis_requesttotransportofficer $vmis_requesttotransportofficer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vmis_requesttotransportofficer  $vmis_requesttotransportofficer
     * @return \Illuminate\Http\Response
     */
    public function edit(vmis_requesttotransportofficer $vmis_requesttotransportofficer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vmis_requesttotransportofficer  $vmis_requesttotransportofficer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vmis_requesttotransportofficer $vmis_requesttotransportofficer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vmis_requesttotransportofficer  $vmis_requesttotransportofficer
     * @return \Illuminate\Http\Response
     */
    public function destroy(vmis_requesttotransportofficer $vmis_requesttotransportofficer)
    {
        //
    }
}
