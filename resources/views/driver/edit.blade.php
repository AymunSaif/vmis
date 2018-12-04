@extends('layouts.upperNavigation')
<link rel="stylesheet" href="{{ asset('_monitoring/css/pages/advance-elements/css/bootstrap-datetimepicker.css')}}" />
<link rel="stylesheet" href="{{ asset('_monitoring/css/css/daterangepicker.css')}}" />
<link rel="stylesheet" href="{{ asset('_monitoring/css/css/responsive.bootstrap4.min.css')}}" />
<style>

</style>
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card z-depth-0">
            <div class="card-header">
                <h4>Update Driver 
            </h4></div>
        <form action="{{route('driver.update',$driver->id)}}" method="POST" enctype="multipart/form-data" id="add_driver">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PUT">
            <div class="card-block">
                <div class="row"> 
                    <div class="col-md-12">
                        <div class="row form-group ">
                            <div class="col-md-3 offset-md-2">
                                <label for=""><b>Driver Name </b></label>
                                <input type="text" class="form-control form-control-round" name="f_name" id="f_name" value="{{$driver->User->first_name}}">
                            </div>
                            <div class="col-md-3 offset-md-1">
                                    <label for=""><b>Last Name </b></label>
                                    <input type="text" class="form-control form-control-round" name="l_name" id="l_name" value="{{$driver->User->last_name}}">
                                </div>
                        </div>
                        <div class="row form-group ">
                                <div class="col-md-2 offset-md-2">
                                    <label for=""><b>User Name </b></label>
                                    <input type="text" class="form-control form-control-round" name="u_name" value="{{$driver->User->username}}" id="u_name">
                                </div>
                                <div class="col-md-3 ">
                                    <label for=""><b>Email Address </b></label>
                                    <input type="email" class="form-control form-control-round" name="email" value="{{$driver->User->email}}" id="email">
                                </div>
                                <div class="col-md-2 ">
                                        <label for=""><b>Password </b></label>
                                        <input type="password" class="form-control form-control-round"  value="{{$driver->User->password}}" name="p_word" id="p_word">
                                    </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-3 offset-md-2">
                            <label for=""><b>Driver CNIC </b></label>
                            <input autocompleteoff type="text" id="cnic" maxlength="15" name="d_cnic" value="{{$driver->User->UserDetail->cnic}}" class="form-control form-control-round" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-3 offset-md-2">
                                <label for=""><b>Driver BirthDate</b></label>
                                <input type="text" class="form-control form-control-round" name="dob" id="dob" value="{{date('m/d/y',strtotime($driver->User->UserDetail->dob))}}">
                            </div>
                            <div class="col-md-3 offset-md-1 ">
                                    <label for=""><b>Driver Gender</b></label>
                                <div>
                                <input name="gender" value="female" type="radio" {{$driver->User->UserDetail->gender=='female' ?  "checked" : "" }}> Female
                                <input name="gender" value="male" type="radio" {{$driver->User->UserDetail->gender=='male' ?  "checked" : "" }}> Male       
                                </div>   
                                </div>    
                        </div>
                        <div class="row form-group">
                            <div class="col-md-3 offset-md-2">
                                <label for=""><b>Driver License Issuance Date</b></label>
                                <input type="text" class="form-control form-control-round" name="doi" id="doi" value="{{date('m/d/y',strtotime($driver->licenseIssuanceDate))}}">
                            </div>
                            <div class="col-md-3 offset-md-1">
                                    <label for=""><b>Driver License Expiry Date</b></label>
                                    <input type="text" class="form-control form-control-round" name="doe" id="doe" value="{{date('m/d/y',strtotime($driver->licenseExpiryDate))}}">
                                </div>
                            
                        </div>
                        <div class="row form-group">
                            <div class="col-md-3 offset-md-2">
                                <label for=""><b>Driver Number</b></label>
                                <input type="text" class="form-control form-control-round" name="d_number" id="number" value="{{$driver->User->UserDetail->phone_no}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            
                            <div class="col-md-3 offset-md-2">
                                <label for=""><b>Driver Documents</b></label>
                                <input type="file" name="d_documents" id="d_documents" value="{{$driver->VmisDocument[0]->documents}}" multiple>
                            </div>
                            <div class="col-md-3 offset-md-1">
                                    <label for=""><b>Driver Picture </b></label>
                                    <input type="file"  name="d_pic" id="d_pic" multiple value="{{$driver->VmisDocument[0]->picture}}">
                                </div>
                        </div> 
                </div>
            </div>
            </div>
       
            <div class="card-footer"> 
                <div class="col-md-3 offset-md-5">
                <input type="hidden" name="driver_id" value="{{$driver->User->id}}">
                    <button class="btn btn-md btn-primary" name="update" type="submit"> Update</button>
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

{{-- <script src="{{asset('_monitoring/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script> --}}
{{-- <script src="{{asset('_monitoring/css/pages/advance-elements/bootstrap-datetimepicker.min.js')}}"></script> --}}
<script src="{{asset('_monitoring/js/bootstrap-daterangepicker/js/daterangepicker.js')}}"></script>
{{-- <script src="{{asset('_monitoring/css/pages/advance-elements/custom-picker.js')}}"></script> --}}
<script type="text/javascript">
    $('#cnic').keydown(function () {
     //allow  backspace, tab, ctrl+A, escape, carriage return
     if (event.keyCode == 8 || event.keyCode == 9 ||
         event.keyCode == 27 || event.keyCode == 13 ||
         (event.keyCode == 65 && event.ctrlKey === true))
         return;
     // if ((event.keyCode < 48 || event.keyCode > 57))
     //     event.preventDefault();

     var length = $(this).val().length;

     if (length == 5 || length == 13)
         $(this).val($(this).val() + '-');
 });

</script>
<script>
$(function() {
    $('input[name="dob"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });
});
$(function() {
    $('input[name="doi"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });
});

$(function() {
    $('input[name="doe"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });
});
</script>
@endsection