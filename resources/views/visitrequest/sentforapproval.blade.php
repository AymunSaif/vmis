@extends('layouts.upperNavigation')
<style>
    td{white-space: unset !important;}
    .tw-w{min-width: 215px !important;}
    ol{padding: 0px 0px 0px 13px !important;}
    /* li{margin: 0px !important;padding: 0px !important;} */
    </style>
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
                <div class="col-md-12 table-responsive">
                <table id="#" class="table table-bordered nowrap">
                    <thead>
                    <tr>
                        <th style="text-align:center;">Sr #.</th>
                        <th style="text-align:center;">Requestee Name</th>
                        <th  style="text-align:center;">Request Purpose</th>
                        <th style="text-align:center;">Trip Type</th>
                        <th style="text-align:center;">Assigned Driver</th>
                        <th style="text-align:center;">Assigned Vehicle</th>
                        <th style="text-align:center;">Approval Status</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @php
                         $i=1; $j=0;  
                        @endphp
                        @foreach ($triprequests as $triprequest)
                        <tr>
                           <td style="text-align:center;">
                            @php
                                echo $i++;
                            @endphp
                           </td>
                           <td style="text-align:center;">
                            {{$requesteeName[$j]->first_name}} {{$requesteeName[$j]->last_name}}
                            @php
                                 $j++;
                            @endphp
                        </td>
                        <td style="">
                            <ol>
                            @foreach ($triprequest->PlantripPurpose as $plantripPurpose) 
                               
                                    @if(isset($plantripPurpose->PlantripVisitreason->name) && $plantripPurpose->PlantripVisitreason->name == "Meeting" || $plantripPurpose->PlantripVisitreason->name == "Other")
                            <li>{{$plantripPurpose->PlantripVisitedproject->description}} - <b>{{$plantripPurpose->PlantripVisitreason->name}}</b></li>  
                                @elseif(isset($plantripPurpose->PlantripVisitreason->name) &&  $plantripPurpose->PlantripVisitreason->name=="Monitoring" || $plantripPurpose->PlantripVisitreason->name=="Evaluation")
                                    @if(isset($plantripPurpose->PlantripVisitedproject->AssignedProject->Project->title))
                            <li>{{$plantripPurpose->PlantripVisitedproject->AssignedProject->Project->title}} - <b>{{$plantripPurpose->PlantripVisitreason->name}}</b></li> 
                                    @endif 
                                @endif  
                                
                               
                            @endforeach
                        </ol>
                    </td>
                        {{-- {{dd($triprequest->VmisRequestToTransportOfficer->VmisAssignedDriver[0]->VmisDriver->User->first_name)}} --}}
                         <td style="text-align:center;"> {{$triprequest->PlantripTriptype->name}}</td>
                         <td style="text-align:center;">
                                @if(isset($triprequest->VmisRequestToTransportOfficer->VmisAssignedDriver[0]->VmisDriver->User->first_name))
                                {{$triprequest->VmisRequestToTransportOfficer->VmisAssignedDriver[0]->VmisDriver->User->first_name}} 
                                {{$triprequest->VmisRequestToTransportOfficer->VmisAssignedDriver[0]->VmisDriver->User->last_name}}
                                @else
                                <p>Not Assigned</p>
                                @endif
                            </td>
                            <td style="text-align:center;">
                                @if(isset($triprequest->VmisRequestToTransportOfficer->VmisAssignedVehicle[0]->VmisVehicle->name))
                                {{$triprequest->VmisRequestToTransportOfficer->VmisAssignedVehicle[0]->VmisVehicle->name}} 

                                @else
                                <p>Not Assigned</p>
                                @endif
                            </td>

                        <td style="text-align:center;" >
                            @if($triprequest->VmisRequestToTransportOfficer->approval_status=='1')
                            <label class="badge badge-md badge-primary">Waiting For Approval</label> 
                            @elseif($triprequest->VmisRequestToTransportOfficer->approval_status=='2')
                            <label class="badge badge-md badge-success">Approved {{$triprequest->VmisRequestToTransportOfficer->User->first_name}} {{$triprequest->VmisRequestToTransportOfficer->User->last_name}} </label> 
                            @elseif($triprequest->VmisRequestToTransportOfficer->approval_status=='3')
                            <label class="badge badge-md badge-danger">Not Approved {{$triprequest->VmisRequestToTransportOfficer->User->first_name}} {{$triprequest->VmisRequestToTransportOfficer->User->last_name}} </label> 
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