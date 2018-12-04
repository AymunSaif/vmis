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
        
        $triprequests = PlantripTriprequest::select('plantrip_triprequests.*','users.first_name','users.last_name')
        ->leftJoin('plantrip_purposes','plantrip_purposes.plantrip_triprequest_id','plantrip_triprequests.id')
        ->leftJoin('plantrip_members','plantrip_members.plantrip_purpose_id','plantrip_purposes.id')
        ->leftJoin('users','plantrip_members.user_id','users.id')
        ->where('plantrip_triprequests.status',1)
        ->where('plantrip_members.requested_by',1)
        ->where('plantrip_triprequests.approval_status','Pending')
        ->distinct()
        ->with('VmisRequestToTransportOfficer')
        ->get();

        
        $tripcounts=$triprequests->count();
        // $tripRequestMember=PlantripTriprequest::select('plantrip_members.*')
        // ->leftJoin('plantrip_purposes','plantrip_purposes.plantrip_triprequest_id','plantrip_triprequests.id')
        // ->leftJoin('plantrip_members','plantrip_members.plantrip_purpose_id','plantrip_purposes.id')
        // ->where('status',1)
        // ->where('plantrip_members.requested_by',1)->get();
        // dd($triprequests);
        return view('visitrequest.seerequest',['triprequests'=>$triprequests ,'tripcounts'=>$tripcounts]);
    }   

    public function proceedFurther($id)
    {
        // dd($id);
        $triprequest = PlantripTriprequest::where('id',$id)->first();

        $requesteeName = PlantripTriprequest::select('plantrip_triprequests.*','users.first_name','users.last_name')
        ->leftJoin('plantrip_purposes','plantrip_purposes.plantrip_triprequest_id','plantrip_triprequests.id')
        ->leftJoin('plantrip_members','plantrip_members.plantrip_purpose_id','plantrip_purposes.id')
        ->leftJoin('users','plantrip_members.user_id','users.id')
        ->where('plantrip_triprequests.status',1)
        ->where('plantrip_members.requested_by',1)
        ->distinct()
        ->get();
        // dd($requesteeName[0]->first_name);
        $purposeCounts=$triprequest->PlantripPurpose->count();
        $drivers= VmisDriver::all();
        $vehicles=VmisVehicle::all();
        // dd($triprequest->PlantripRequestedcity[0]->PlantripCity->name);
        return view('visitrequest.proceedfurther',['vehicles'=>$vehicles,'drivers'=>$drivers,'triprequest'=>$triprequest,'purposeCounts'=>$purposeCounts ,' requesteeName'=> $requesteeName]);

    }
    public function sentRequests()
    {
        $requesteeName = PlantripTriprequest::select('plantrip_triprequests.*','users.first_name','users.last_name')
        ->leftJoin('plantrip_purposes','plantrip_purposes.plantrip_triprequest_id','plantrip_triprequests.id')
        ->leftJoin('plantrip_members','plantrip_members.plantrip_purpose_id','plantrip_purposes.id')
        ->leftJoin('users','plantrip_members.user_id','users.id')
        ->where('plantrip_members.requested_by',1)
        ->distinct()
        ->get();

        // dd($requesteeName);
        $triprequests = PlantripTriprequest::where('status',0)
        ->where('approval_status','Pending')
        ->orWhere('approval_status','Approved')
        ->orWhere('approval_status','Not Approved')
        ->get();
        
        $tripcounts=$triprequests->count();
        // dd($triprequests[0]->VmisRequestToTransportOfficer[0]->VmisAssignedDriver[0]->VmisDriver->User->name);
        return view('visitrequest.sentforapproval',['triprequests'=>$triprequests,'tripcounts'=>$tripcounts,'requesteeName'=> $requesteeName]);
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
        $assignedDriver->vmis_request_to_transport_officer_id=$tripRequest->id;
        $assignedDriver->vmis_vehicle_id=$request->assignvehicle;
        $assignedDriver->save();

        $assignedVehicle =new VmisAssignedDriver();
        $assignedVehicle->vmis_request_to_transport_officer_id=$tripRequest->id;
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
