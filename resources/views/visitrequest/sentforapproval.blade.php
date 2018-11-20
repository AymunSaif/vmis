@extends('layouts.upperNavigation')
@section('content')
<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <label for="">
                        <h3><b>Requests Sent For Approval</b>
                            <label class="badge badge-danger">{{$tripcounts}}</label>                        
                        </h3>
            </label>
        </div>
        <div class="card-block">
                <div class="col-md-10 offset-md-1 table-responsive">
                        <table id="#" class="table table-bordered nowrap">
                    <thead>
                    <tr>
                        <th style="text-align:center;">Sr #.</th>
                        <th style="text-align:center;">Requestee Name</th>
                        <th style="text-align:center;">Trip Type</th>
                        <th style="text-align:center;">Assigned Driver</th>
                        <th style="text-align:center;">Assigned Vehicle</th>
                        <th style="text-align:center;">Approval Status</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @php
                         $i=1;   
                        @endphp
                        @foreach ($triprequests as $triprequest)
                        <tr>
                           <td style="text-align:center;">
                            @php
                                echo $i++;
                            @endphp
                           </td>
                           <td style="text-align:center;">
                            {{$triprequest->User->first_name}} {{$triprequest->User->last_name}}
                        </td>
                         <td style="text-align:center;"> {{$triprequest->PlantripTriptype->name}}</td>
                           <td style="text-align:center;">{{$triprequest->VmisRequestToTransportOfficer->VmisDriver->User->first_name}} {{$triprequest->VmisRequestToTransportOfficer->VmisDriver->User->last_name}}</td>
                           <td style="text-align:center;">{{$triprequest->VmisRequestToTransportOfficer->VmisVehicle->name}}</td>
                        <td style="text-align:center;" >
                            @if($triprequest->VmisRequestToTransportOfficer->approval_status=='1')
                            <label class="badge badge-md badge-warning">Waiting For Approval</label> 
                            @elseif($triprequest->VmisRequestToTransportOfficer->approval_status=='2')
                            <label class="badge badge-md badge-success">Approved</label> 
                            @elseif($triprequest->VmisRequestToTransportOfficer->approval_status=='3')
                            <label class="badge badge-md badge-danger">Not Approved</label> 
                            @endif
                        </td>
                        </tr>

                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer"></div> 
    </div>
    </div>
</div>
@endsection