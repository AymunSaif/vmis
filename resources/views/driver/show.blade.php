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
        <form action="{{route('driver.edit',$driver->id)}}" method="GET" enctype="multipart/form-data" id="edit_driver">
            {{csrf_field()}}
            <div class="card-block">
                <div class="row"> <div class="col-md-12">
                    <div class="row form-group">
                        <div class="col-md-5 offset-md-1">
                                <label for=""><b>Driver Picture </b>
                                    <img src="{{asset('/storage/driver_pictures/'.$driver->picture)}}" height="30px" width="30px"/>
                                </label>
                                {{-- <input type="file"  name="d_pic" id="d_pic" multiple> --}}
                            </div>
                    </div>
                    <div class="row form-group ">
                        <div class="col-md-5 offset-md-1">
                        <label for=""><b>Driver Name :</b> {{$driver->name}}</label>
                            {{-- <input type="text" class="form-control form-control-round" name="d_name" id="name"> --}}
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <label for=""><b>Driver CNIC :</b>{{$driver->cnic}}</label>
                            {{-- <input autocompleteoff type="text" id="cnic" maxlength="15" name="d_cnic" placeholder="xxxxx-xxxxxxx-x" class="form-control form-control-round" required> --}}
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-5 offset-md-1">
                            <label for=""><b>Driver BirthDate :</b> {{$driver->dob}}</label>
                            {{-- <input type="text" class="form-control form-control-round" name="dob" id="dob"> --}}
                        </div>
                        <div class="col-md-5 offset-md-1 ">
                                <label for=""><b>Driver Gender :</b> {{$driver->gender}}</label>
                            {{-- <div>
                             <input name="gender" value="female" type="radio"> Female
                             <input name="gender" value="male" type="radio"> Male       
                            </div>    --}}
                            </div>    
                    </div>
                    <div class="row form-group">
                        <div class="col-md-5 offset-md-1">
                            <label for=""><b>Driver License Issuance Date :</b>{{$driver->doi}}</label>
                            {{-- <input type="text" class="form-control form-control-round" name="doi" id="doi"> --}}
                        </div>
                        <div class="col-md-5 offset-md-1">
                                <label for=""><b>Driver License Expiry Date :</b>{{$driver->doe}}</label>
                                {{-- <input type="text" class="form-control form-control-round" name="doe" id="doe"> --}}
                        </div>
                        
                    </div>
                    <div class="row form-group">
                        <div class="col-md-5 offset-md-1">
                            <label for=""><b>Driver Number :</b>{{$driver->number}}</label>
                            {{-- <input type="text" class="form-control form-control-round" name="d_number" id="number"> --}}
                       </div>
                       <div class="col-md-5 offset-md-1">
                            <label for=""><b>Driver Documents :</b> </label>
                            @foreach ($driver->VmisDocument as $item)
                            <a href="{{asset('/storage/driver_license_pictures/'.$item->documents)}}" download><b style="color:red;">Download Here</b></a>
                            @endforeach
                            {{-- <input type="file" name="d_documents" id="d_documents" multiple> --}}
                        </div>
                    </div>
                </div></div>
            </div>
       
            <div class="card-footer"> <div class="col-md-3 offset-md-5"><button class="btn btn-md btn-warning" disabled name="edit" type="submit"> Edit</button></div></div>
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