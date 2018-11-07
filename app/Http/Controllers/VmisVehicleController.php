<?php

namespace App\Http\Controllers;

use App\VmisVehicle;
use App\VmisVehicleDocument;
use App\VmisVehicleType;
use Illuminate\Http\Request;
use App\VmisVehicleDetails;
use App\Http\Controllers\Controller;

class VmisVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles=VmisVehicle::orderBy('created_at','desc')->paginate(10);

        return view('vehicle.index')->with('vehicles', $vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(VmisVehicleType);
        $v_types=VmisVehicleType::all();
        // dd($v_types);
        return view('vehicle.create')->with('v_types',$v_types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('vehicle_pic'))
        {
             $filenameWithExt=$request->file('vehicle_pic')->getClientOriginalName();
             $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
             $extension=$request->file('vehicle_pic')->getClientOriginalExtension();
             $fileNameToStore1= $filename.'_'.time().'.'.$extension;
             $path1=$request->file('vehicle_pic')->storeAs('/storage/vehicle_pictures/',$fileNameToStore1);
        }
        else{
            $fileNameToStore1='noimage.jpg';
        }
  
        if($request->hasFile('v_doc'))
        {
             $filenameWithExt=$request->file('v_doc')->getClientOriginalName();
             $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
             $extension=$request->file('v_doc')->getClientOriginalExtension();
             $fileNameToStore2= $filename.'_'.time().'.'.$extension;
  
             $path2=$request->file('v_doc')->storeAs('/storage/vehicle_documents/',$fileNameToStore2);
        }
        else{
            $fileNameToStore2='noimage.jpg';
        }

       $vehicle =new VmisVehicle();
       $vehicle->name=$request->v_name;
       $vehicle->no_plate=$request->num_plate;
       $vehicle->v_pic=$fileNameToStore1;
       $vehicle->vmis_vehicletype_id=$request->vehicletype;
       $vehicle->save();

       $vehicleDetails =new VmisVehicleDetails();
       $vehicleDetails->vmis_vehicle_id=$vehicle->id;
       $vehicleDetails->milage=$request->milage;
       $vehicleDetails->kilometers=$request->km;
       $vehicleDetails->liters=$request->liter;
       $vehicleDetails->oilchange=$request->v_name;
       $vehicleDetails->tunning=$request->tunning;
       $vehicleDetails->brakeshoe=$request->brake_shoe;
       $vehicleDetails->tyres=$request->tyre;
       $vehicleDetails->save();

       $vehicle_documents=new VmisVehicleDocument();
       $vehicle_documents->vmis_vehicle_id=$vehicle->id;
       $vehicle_documents->documents=$fileNameToStore2;
       $vehicle_documents->save();
       return redirect()->route('vehicle.index')->with('success','New Entry!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VmisVehicle  $vmis_Vehicle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $vehicle = VmisVehicle::find($id);
        return view('vehicle.show',compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VmisVehicle  $vmis_Vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(VmisVehicle $VmisVehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VmisVehicle  $vmis_Vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vmis_Vehicle $vmis_Vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VmisVehicle  $vmis_Vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VmisVehicle::destroy($id);
        return redirect()->route('vehicle.index')->with('error','Data has been Deleted!!');
    }
}
