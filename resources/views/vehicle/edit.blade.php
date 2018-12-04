@extends('layouts.upperNavigation')
<link rel="stylesheet" href="{{ asset('_monitoring/css/pages/advance-elements/css/bootstrap-datetimepicker.css')}}" />
<link rel="stylesheet" href="{{ asset('_monitoring/css/css/daterangepicker.css')}}" />
<link rel="stylesheet" href="{{ asset('_monitoring/css/css/responsive.bootstrap4.min.css')}}" />
 <!-- Select 2 css -->
 <link rel="stylesheet" href="{{ asset('_monitoring/css/css/select2.min.css')}}" />
 <link rel="stylesheet" href="{{ asset('_monitoring/css/css/component.css')}}" />
 <!-- Multi Select css -->
<link rel="stylesheet" href="{{ asset('_monitoring/css/css/bootstrap-multiselect.css')}}" />
<link rel="stylesheet" href="{{ asset('_monitoring/css/css/multiselect/css/multi-select.css')}}" />
<!-- Notification.css -->
<link rel="stylesheet" type="text/css" href="{{asset('_monitoring/css/pages/notification/notification.css')}}">
<!-- Animate.css -->
<link rel="stylesheet" type="text/css" href="{{asset('_monitoring/css/css/animate.css')}}">
<style>

</style>
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card z-depth-0">
            <div class="card-header">
                <h4>Add New Vehicle
            </h4></div>
        <form action="{{route('vehicle.update',$vehicle->id)}}" method="POST" enctype="multipart/form-data" id="add_vehicle">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PUT">
            <div class="card-block">
                <div class="row"> <div class="col-md-12">
                    <div class="row form-group ">
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>Vehicle Name </b></label>
                        <input type="text" class="form-control form-control-round" name="v_name" id="name" value="{{$vehicle->name}}">
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <label for=""><b>Vehicle Type </b></label>
                            <select  name="vehicletype" class="form-control col-sm-12"  >
                            <option value="{{$vehicle->VmisVehicleType->id}}" selected >{{$vehicle->VmisVehicleType->name}}</option>
                                @foreach ($v_types as $v_type)
                                    <option value="{{$v_type->id}}">{{$v_type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-md-2 offset-md-2"> <label><b>Vehicle</b></label></div>
                        <div class="col-md-3 form-radio">
                                
                                <div class="radio radio-outline radio-inline">
                                    <label>
                                        
                                        <input type="radio" class="rented" name="rentcheck" id="rented" value="yes"
                                        {{$vehicle->VmisVehicleDetails->rentedCheck=='yes' ?  "checked" : "" }} />
                                        <i class="helper"></i><b>Rented</b>
                                    </label>
                                </div>
                            </div>
                         
                            <div class="col-md-2  form-radio">
                                <div class="radio radio-outline radio-inline">
                                    <label>
                                        <input type="radio" class="notrented" name="rentcheck" id="notrented" value="no" 
                                         {{$vehicle->VmisVehicleDetails->rentedCheck=='no' ?  "checked" : "" }}  />
                                        <i class="helper"></i><b>Not Rented</b>
                                    </label>
                                </div>
                            </div>
                         
                    </div>
                    <div class="row form-group">
                            <div class="col-md-3 offset-md-2">
                                    <label for=""><b>Number Plate</b></label>
                            <input type="text" class="form-control form-control-round" value="{{$vehicle->no_plate}}" name="num_plate" id="num_plate">
                                </div>
                            
                            <div class="col-md-3 offset-md-1 rentDuration" style=" {{$vehicle->VmisVehicleDetails->rentedCheck=='no' ? 'display:none;' : ''}}">
                                    <label for=""><b>Rent Duration</b></label>
                                    <input type="text" class="form-control form-control-round " value="{{$vehicle->VmisVehicleDetails->rent_duration}}" placeholder="Duration In Months" name="rentDuration" id="rentDuration">
                                </div>
                            
                </div>
                    <div class="row form-group">
                            <div class="col-md-3 offset-md-2">
                                <label for=""><b>Vehicle Picture</b></label>
                                <input type="file"  name="vehicle_pic" id="vehicle_pic" multiple>
                            </div>
                        <div class="col-md-3 offset-md-1">
                                <label for=""><b>Documents</b></label>
                                <input type="file"  name="v_doc" id="v_doc">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>Milage</b></label>
                        <input type="number" class="form-control form-control-round" value="{{$vehicle->VmisVehicleDetails->milage}}" name="milage" id="milage">
                        </div>
                        <div class="col-md-3 offset-md-1">
                                <label for=""><b>Kilometers</b></label>
                        <input type="number" class="form-control form-control-round" value="{{$vehicle->VmisVehicleDetails->kilometers}}" name="km" id="km">
                            </div>
                    </div>
                       
                    <div class="row form-group">
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>Tunning</b></label>
                        <input type="text" class="form-control form-control-round" value="{{$vehicle->VmisVehicleDetails->tunning}}" name="tunning" id="tunning"  placeholder="Write Days">
                      </div>
                      <div class="col-md-3 offset-md-1">
                            <label for=""><b>Liters</b></label>
                      <input type="number" class="form-control form-control-round" value="{{$vehicle->VmisVehicleDetails->liters}}" name="liter" id="liter">
                        </div>
                </div>
                    <div class="row form-group">
                        
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>Brake Shoe</b></label>
                        <input type="text" class="form-control form-control-round"  value="{{$vehicle->VmisVehicleDetails->brakeshoe}}" name="brake_shoe" id="brake_shoe"  placeholder="Write Days">
                       
                        </div>
                        <div class="col-md-3 offset-md-1">
                                <label for=""><b>Tyre </b></label>
                                <input type="text" class="form-control form-control-round" value="{{$vehicle->VmisVehicleDetails->tyres}}" name="tyre" id="tyre" placeholder="Write Days">

                            </div>
                    </div> 
                </div></div>
            </div>
       
            <div class="card-footer"> 
                <div class="col-md-3 offset-md-5 ">
                        <button class="btn btn-success" type="submit" >Update</button>
                    {{-- <button class="btn btn-md btn-primary" name="create" type="submit"> Create</button> --}}
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
@section('js_scripts')

<script src="{{asset('_monitoring/js/jquery.cookie/js/jquery.cookie.js')}}"></script>
<script src="{{asset('_monitoring/js/jquery.steps/js/jquery.steps.js')}}"></script>
<script src="{{asset('_monitoring/js/jquery-validation/js/jquery.validate.js')}}"></script>
<script src="{{asset('_monitoring/css/pages/form-validation/validate.js')}}"></script>

<script src="{{asset('_monitoring/css/pages/forms-wizard-validation/form-wizard.js')}}"></script>
<script src="{{asset('_monitoring/css/pages/advance-elements/moment-with-locales.min.js')}}"></script>
<script src="{{asset('_monitoring/js/select2/js/select2.full.min.js')}}"></script>
<!-- Multiselect js -->
<script src="{{asset('_monitoring/js/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('_monitoring/js/multiselect/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('_monitoring/css/pages/advance-elements/select2-custom.js')}}"></script>
<script src="{{asset('_monitoring/css/js/jquery.quicksearch.js')}}"></script>
{{-- <script src="{{asset('_monitoring/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script> --}}
{{-- <script src="{{asset('_monitoring/css/pages/advance-elements/bootstrap-datetimepicker.min.js')}}"></script> --}}
<script src="{{asset('_monitoring/js/bootstrap-daterangepicker/js/daterangepicker.js')}}"></script>
{{-- <script src="{{asset('_monitoring/css/pages/advance-elements/custom-picker.js')}}"></script> --}}
<script  src="{{asset('_monitoring/css/js/bootstrap-growl.min.js')}}"></script>
<script src="{{asset('_monitoring/css/pages/notification/notification.js')}}"></script>

<script>
 
  $(".rented").click(function()
    {
        $(".rentDuration").show(1000);
        
    });
    $(".notrented").click(function()
    {
        $(".rentDuration").hide(1000);
        
    });
</script>
{{-- <script>
$(document).on('submit','form',function(event){
      event.preventDefault();

    //   var triptype= $('.triptype_id').val();
    //   var outstationPur= $('.purposetypeForOutstation').val();
    //   var localpurpose=$('.purposetype').val();
    //   var subcity=$('.subcitytypeForOutstation').val();
      var formdata=$(this).serialize();
  $.ajax({
   headers : { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
   type: 'POST',
   url: $(this).attr('action'),
   data: formdata,   // I WANT TO ADD EXTRA DATA + SERIALIZE DATA
   success: function(data){
      console.log(data);
    //   $('.tampil_vr').text(data);
    }
    // error: function()
    // {

    // }
    });
    // disabledFields($(this));

});
</script> --}}
@endsection