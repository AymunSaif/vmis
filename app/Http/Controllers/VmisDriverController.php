<?php

namespace App\Http\Controllers;

use App\VmisDriver;
use App\VmisDriverDocument;
use App\User;
use App\UserDetail;
use App\RoleUser;
use jeremykenedy\LaravelRoles\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VmisDriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers=VmisDriver::orderBy('created_at','desc')->paginate(10);

        return view('driver.index')->with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
       return view('driver.create',['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if($request->hasFile('d_pic'))
        {
             $filenameWithExt=$request->file('d_pic')->getClientOriginalName();
             $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
             $extension=$request->file('d_pic')->getClientOriginalExtension();
             $fileNameToStore1= $filename.'_'.time().'.'.$extension;
             $path1=$request->file('d_pic')->storeAs('/storage/driver_pictures/',$fileNameToStore1);
        }
        else{
            $fileNameToStore1='noimage.jpg';
        }
  
        if($request->hasFile('d_documents'))
        {
             $filenameWithExt=$request->file('d_documents')->getClientOriginalName();
             $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
             $extension=$request->file('d_documents')->getClientOriginalExtension();
             $fileNameToStore2= $filename.'_'.time().'.'.$extension;
  
             $path2=$request->file('d_documents')->storeAs('/storage/driver_license_pictures/',$fileNameToStore2);
        }
        else{
            $fileNameToStore2='noimage.jpg';
        }
        // $newdriver = $
        
        $user = new User();
        $user->first_name=$request->f_name;
        $user->last_name=$request->l_name;
        $user->username=$request->u_name;
        $user->password=$request->p_word;
        $user->email=$request->email;
        $user->admin_password=str_random(60);
        $user->api_token=str_random(60);
    
        $user->save();
        // dd($user); 

        $user_detail = new UserDetail();
        $user_detail->user_id=$user->id;
        $user_detail->cnic=$request->d_cnic;
        $user_detail->dob=$request->dob;
        $user_detail->gender=$request->gender;
        $user_detail->phone_no=$request->d_number;
        $user_detail->save();

        $user_role=new RoleUser();
        $role= Role::where('name','driver')->first();
        $user_role->role_id=$role->id;
        $user_role->user_id=$user->id;
        $user_role->save();
        // return $user;



         $driver=new VmisDriver();
         $driver->user_id=$user->id;
         $driver->licenseIssuanceDate=$request->doi;
         $driver->licenseExpiryDate=$request->doe;
         $driver->rating='0';
         $driver->status='1';
         $driver->save();

         $driver_documents=new VmisDriverDocument();
         $driver_documents->vmis_driver_id=$driver->id;
         $driver_documents->documents=$fileNameToStore2;
         $driver_documents->picture=$fileNameToStore1;
         $driver_documents->save();
         return redirect()->back()->with('success','New Entry!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VmisDriver  $vmis_Driver
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $driver = VmisDriver::find($id);
        // dd($driver);
        return view('driver.show',compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VmisDriver  $vmis_Driver
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = VmisDriver::find($id);
        return view('driver.edit',compact('driver'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VmisDriver  $vmis_Driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($request);
        if($request->hasFile('d_pic'))
        {
             $filenameWithExt=$request->file('d_pic')->getClientOriginalName();
             $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
             $extension=$request->file('d_pic')->getClientOriginalExtension();
             $fileNameToStore1= $filename.'_'.time().'.'.$extension;
             $path1=$request->file('d_pic')->storeAs('/storage/driver_pictures/',$fileNameToStore1);
        }
        else{
            $fileNameToStore1='noimage.jpg';
        }
  
        if($request->hasFile('d_documents'))
        {
             $filenameWithExt=$request->file('d_documents')->getClientOriginalName();
             $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
             $extension=$request->file('d_documents')->getClientOriginalExtension();
             $fileNameToStore2= $filename.'_'.time().'.'.$extension;
  
             $path2=$request->file('d_documents')->storeAs('/storage/driver_license_pictures/',$fileNameToStore2);
        }
        else{
            $fileNameToStore2='noimage.jpg';
        }
        // $newdriver = $
        
        $user =User::find($request->driver_id);
        $user->first_name=$request->f_name;
        $user->last_name=$request->l_name;
        $user->username=$request->u_name;
        $user->password=$request->p_word;
        $user->email=$request->email;
        $user->admin_password=str_random(60);
        $user->api_token=str_random(60);
        $user->save();

        $user_detail =UserDetail::where('user_id',$request->driver_id)->first();
        $user_detail->user_id=$user->id;
        $user_detail->cnic=$request->d_cnic;
        $user_detail->dob=$request->dob;
        $user_detail->gender=$request->gender;
        $user_detail->phone_no=$request->d_number;
        $user_detail->save();

        $user_role=RoleUser::where('user_id',$request->driver_id)->first();
        $role= Role::where('name','driver')->first();
        $user_role->role_id=$role->id;
        $user_role->user_id=$user->id;
        $user_role->save();
        // return $user;



         $driver=VmisDriver::where('user_id',$request->driver_id)->first();
         $driver->user_id=$user->id;
         $driver->licenseIssuanceDate=$request->doi;
         $driver->licenseExpiryDate=$request->doe;
         $driver->rating='0';
         $driver->status='1';
         $driver->save();

         $driver_documents=VmisDriverDocument::where('vmis_driver_id',$id)->first();
         $driver_documents->vmis_driver_id=$driver->id;
         $driver_documents->documents=$fileNameToStore2;
         $driver_documents->picture=$fileNameToStore1;
         $driver_documents->save();
         return view('driver.index')->with('success','Updated Entry!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VmisDriver  $vmis_Driver
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        VmisDriver::destroy($id);
        return redirect()->route('driver.index')->with('error','Data has been Deleted!!');
    }
}
