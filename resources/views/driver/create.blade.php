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
                <h4>Add New Driver 
            </h4></div>
        <form action="{{route('driver.store')}}" method="POST" enctype="multipart/form-data" id="add_driver">
            {{csrf_field()}}
            <div class="card-block">
                <div class="row"> <div class="col-md-12">
                    <div class="row form-group ">
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>First Name </b></label>
                            <input type="text" class="form-control form-control-round" name="f_name" id="f_name">
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <label for=""><b>Last Name </b></label>
                            <input type="text" class="form-control form-control-round" name="l_name" id="l_name">
                        </div>
                    </div>
                    <div class="row form-group ">
                            <div class="col-md-2 offset-md-2">
                                <label for=""><b>User Name </b></label>
                                <input type="text" class="form-control form-control-round" name="u_name" id="u_name">
                            </div>
                            <div class="col-md-3 ">
                                <label for=""><b>Email Address </b></label>
                                <input type="email" class="form-control form-control-round" name="email" id="email">
                            </div>
                            <div class="col-md-2 ">
                                    <label for=""><b>Password </b></label>
                                    <input type="password" class="form-control form-control-round" name="p_word" id="p_word">
                                </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>Driver BirthDate</b></label>
                            <input type="text" class="form-control form-control-round" name="dob" id="dob">
                        </div>
                        <div class="col-md-3 offset-md-1 ">
                                <label for=""><b>Driver Gender</b></label>
                            <div>
                             <input name="gender" value="female" type="radio" > Female
                             <input name="gender" value="male" type="radio" style="margin-left:23px; "> Male       
                            </div>   
                            </div>    
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>Driver License Issuance Date</b></label>
                            <input type="text" class="form-control form-control-round" name="doi" id="doi">
                        </div>
                        <div class="col-md-3 offset-md-1">
                                <label for=""><b>Driver License Expiry Date</b></label>
                                <input type="text" class="form-control form-control-round" name="doe" id="doe">
                            </div>
                        
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>Driver Number</b></label>
                            <input type="text" class="form-control form-control-round" name="d_number" id="number">
                    </div>
                    <div class="col-md-3 offset-md-1">
                            <label for=""><b>Driver CNIC </b></label>
                            <input autocompleteoff type="number" id="cnic" maxlength="15" name="d_cnic" placeholder="xxxxx-xxxxxxx-x" class="form-control form-control-round" required>
                        </div>
                </div>
                    <div class="row form-group">
                        
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>Driver Documents</b></label>
                            <input type="file" name="d_documents" id="d_documents" multiple>
                        </div>
                        <div class="col-md-3 offset-md-1">
                                <label for=""><b>Driver Picture </b></label>
                                <input type="file"  name="d_pic" id="d_pic" multiple>
                            </div>
                    </div> 
                </div></div>
            </div>
       
            <div class="card-footer"> <div class="col-md-3 offset-md-5"><button class="btn btn-md btn-primary" name="create" type="submit"> Create</button></div></div>
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
         $(this).val($(this).val());
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