@extends('layouts.upperNavigation')
<link rel="stylesheet" type="text/css" href="{{ asset('_monitoring/css/css/dataTables.bootstrap4.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('_monitoring/css/pages/data-table/css/buttons.dataTables.min.css')}}" />
<link rel="stylesheet" href="{{ asset('_monitoring/css/css/responsive.bootstrap4.min.css')}}" />
@section('content')
<div class="row">
        <div class="col-md-12">
        <div class="card z-depth-5">
            <div class="card-header"> <h4><b>View All Drivers</b></h4></div>
            <div class="card-block">
                    <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                    <table id="simpletable"
                                    class="table table-bordered table-stripped nowrap">
                                <thead>
                                <tr>
                                    <th>Sr #.</th>
                                    <th>Name</th>
                                    <th>Cnic</th>
                                    <th>Phone Number</th>
                                    <th></th>
                                    <th></th>
                                    {{-- <th>Action</th> --}}
                                    
                                </tr>
                                </thead>
                                @php
                                 $i=0;   
                                @endphp
                                @foreach ($drivers as $driver)
                                    
                                
                                <tbody>
                                    <td>@php
                                        $i++;
                                        echo $i;
                                    @endphp</td>
                                    <td>{{$driver->User->first_name}} {{$driver->User->last_name}}</td>
                                    <td>{{$driver->UserDetail->cnic}}</td>
                                    <td>{{$driver->UserDetail->phone_no}}</td>
                                    <td>
                                    <form action="{{route('driver.destroy',$driver->id)}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                   </form>
                                    </td>
                                    <td>
                                        <a href="{{route('driver.show',$driver->id)}}" class="btn btn-sm btn-primary" >View</a>
                                    </td>
    
                                    
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>   
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
@endsection
@section('js_scripts')
<script src="{{asset('_monitoring/js/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('_monitoring/js/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>

<script src="{{asset('_monitoring/js/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('_monitoring/js/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('_monitoring/js/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('_monitoring/js/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('_monitoring/js/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<script src="{{asset('_monitoring/css/pages/data-table/js/data-table-custom.js')}}"></script>
@endsection