@extends('layouts.upperNavigation')
<link rel="stylesheet" href="{{ asset('_monitoring/css/pages/advance-elements/css/bootstrap-datetimepicker.css')}}" />
<link rel="stylesheet" href="{{ asset('_monitoring/css/css/daterangepicker.css')}}" />
<link rel="stylesheet" href="{{ asset('_monitoring/css/css/responsive.bootstrap4.min.css')}}" />
 <!-- Select 2 css -->
 <link rel="stylesheet" href="{{ asset('_monitoring/css/css/select2.min.css')}}" />
 <!-- Multi Select css -->
<link rel="stylesheet" href="{{ asset('_monitoring/css/css/bootstrap-multiselect.css')}}" />
<link rel="stylesheet" href="{{ asset('_monitoring/css/multiselect/css/multi-select.css')}}" />
<style>

</style>
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card z-depth-0">
            <div class="card-header">
                <h4>Add New Vehicle
            </h4></div>
        <form action="{{route('vehicle.store')}}" method="POST" enctype="multipart/form-data" id="add_driver">
            {{csrf_field()}}
            <div class="card-block">
                <div class="row"> <div class="col-md-12">
                    <div class="row form-group ">
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>Vehicle Name </b></label>
                            <input type="text" class="form-control form-control-round" name="v_name" id="name">
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <label for=""><b>Vehicle Type </b></label>
                            <select  name="vehicletype" class="form-control col-sm-12"  >
                                @foreach ($v_types as $v_type)
                                    <option value="{{$v_type->id}}">{{$v_type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>Number Plate</b></label>
                            <input type="text" class="form-control form-control-round" name="num_plate" id="num_plate">
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
                            <input type="number" class="form-control form-control-round" name="milage" id="milage">
                        </div>
                        <div class="col-md-3 offset-md-1">
                                <label for=""><b>Kilometers</b></label>
                                <input type="number" class="form-control form-control-round" name="km" id="km">
                            </div>
                    </div>
                       
                    <div class="row form-group">
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>Tunning</b></label>
                            <input type="text" class="form-control form-control-round" name="tunning" id="tunning"  placeholder="Write Days">
                      </div>
                      <div class="col-md-3 offset-md-1">
                            <label for=""><b>Liters</b></label>
                            <input type="number" class="form-control form-control-round" name="liter" id="liter">
                        </div>
                </div>
                    <div class="row form-group">
                        
                        <div class="col-md-3 offset-md-2">
                            <label for=""><b>Brake Shoe</b></label>
                            <input type="text" class="form-control form-control-round" name="brake_shoe" id="brake_shoe"  placeholder="Write Days">
                       
                        </div>
                        <div class="col-md-3 offset-md-1">
                                <label for=""><b>Tyre </b></label>
                                <input type="text" class="form-control form-control-round" name="tyre" id="tyre" placeholder="Write Days">

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