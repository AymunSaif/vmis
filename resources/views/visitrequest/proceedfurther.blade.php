@extends('layouts.upperNavigation')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <label for="">
                  <span style="background: black; color:white;">  Request By :
                    <b>{{$triprequest->User->first_name}} {{$triprequest->User->last_name}} 
                        {{-- {{$triprequest->UserDetails->father_name}}  --}}
                        </b></span>
                </label>
            </div>
            <div class="card-block">
               
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for=""><b>Trip Type :</b></label>
                    </div>
                    <div class="col-md-2">
                        <p>{{$triprequest->PlantripTriptype->name}}</p>
                    </div>
                    <div class="col-md-2">
                            <label for=""><b>Purpose Type :</b></label>
                    </div>
                    <div class="col-md-2">
                            @if(isset($triprequest->PlantripPurpose[0]->PlantripPurposetype->name))
                            <p>{{$triprequest->PlantripPurpose[0]->PlantripPurposetype->name}}</p>
                            @else
                            <p><span style="color:red;">Not Available</span></p>
                            @endif
                        </div>
                    <div class="col-md-2">
                            <label for=""><b>Sub City Type :</b></label>
                        </div>
                        <div class="col-md-2">
                            @if(isset($triprequest->PlantripPurpose[0]->PlantripSubcitytype->name))
                            <p>{{$triprequest->PlantripPurpose[0]->PlantripSubcitytype->name}}</p>
                            @else
                            <p><span style="color:red;">Not Available</span></p>
                            @endif
                        </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for=""><b>Locations To Visit :</b></label>
                    </div>
                    <div class="col-md-2">
                            @if(isset($triprequest->PlantripRequestedcity))
                            @foreach ($triprequest->PlantripRequestedcity as $city)
                                <p>{{$city->PlantripCity->name}}</p>
                            @endforeach
                            @endif
                            
                        
                    </div>
                    <div class="col-md-2">
                            <label for=""><b>Visit Dates</b></label>
                    </div>
                    <div class="col-md-2">
                            @if(isset($triprequest->fullDateoftrip))
                            <p>{{$triprequest->fullDateoftrip}}</p>
                            @else
                            <p><span style="color:red;">Not Available</span></p>
                            @endif
                           
                        </div>
                   
                </div>
               
               @foreach ($triprequest->PlantripPurpose as $plantripPurpose)
               <div class="row" >
                    <div class="col-md-10 offset-md-1" style="margin-top:10px; margin-bottom:15px;  border:1px solid lightgrey"></div>
               </div>
                <div class="row form-group">
                        <div class="col-md-2 offset-md-2">
                            <label for=""><b>Visit Reason : </b></label>
                        </div>
                        <div class="col-md-2">
                        <p>
                            @if(isset($plantripPurpose->PlantripVisitreason->name))
                            {{$plantripPurpose->PlantripVisitreason->name}}
                            @else
                            <span style="color:red;">Noxt Available</span>
                            @endif
                        </p>
                        </div>
                        @if(isset($plantripPurpose->PlantripVisitreason->name) && $plantripPurpose->PlantripVisitreason->name == "Meeting" || $plantripPurpose->PlantripVisitreason->name == "Other")
                        <div class="col-md-3 ">
                            <label for=""><b>Reason Description : </b></label>
                        </div>
                        <div class="col-md-2">

                            <p>{{$plantripPurpose->PlantripVisitedproject->description}}</p>
                        </div>
                    @elseif(isset($plantripPurpose->PlantripVisitreason->name) &&  $plantripPurpose->PlantripVisitreason->name=="Monitoring" || $plantripPurpose->PlantripVisitreason->name=="Evaluation")
                   
                    <div class="col-md-1">
                            <label for=""><b>Title : </b></label>
                        </div>
                        <div class="col-md-3">
                                @if(isset($plantripPurpose->PlantripVisitedproject->AssignedProject->Project->title))
                            <p>{{$plantripPurpose->PlantripVisitedproject->AssignedProject->Project->title}}</p>
                            @endif
                        </div>
                    
                    @endif
                
                </div>
                <div class=" form-group row">
                    {{-- <div class="col-md-2"><h5><b>Location(s)</b></h5><small>{{$lo  cCounts}} locations needs to visit.</small></div> --}}
                </div>
                <div class="row form-group">
                    <div class="col-md-10 offset-md-1 table-responsive">
                        <table id="#" class="table table-bordered nowrap">
                            <thead>
                            <tr>
                                <th style="text-align:center;">Sr #.</th>
                                <th style="text-align:center;">From Location</th>
                                <th style="text-align:center;">To Location</th>
                                <th style="text-align:center;">From Date</th>
                                <th style="text-align:center;">To Date</th>
                                <th style="text-align:center;">Duration</th>
                                <th style="text-align:center;">Departure Time</th>
                                <th style="text-align:center;">Members</th>

                            </tr>
                            </thead>
                            <tbody>
                                    @php
                                    $i=0;   
                                @endphp
                                @if(isset($plantripPurpose->PlantripTriplocation))
                                @foreach ($plantripPurpose->PlantripTriplocation as $triplocation)
                                    <tr>
                                        <td style="text-align:center;">
                                                @php
                                                    echo $i++;
                                                @endphp
                                        </td>
                                        <td> @if(isset($triplocation->plantrip_city_from))
                                                <p>{{$triplocation->PlantripCityFrom->name}}</p>
                                                @else
                                                <p><span style="color:red;">Not Available</span></p>
                                                @endif</td>
                                        <td> @if(isset($triplocation->plantrip_city_to))
                                            {{-- {{dd($triplocation->PlantripCityTo->name)}} --}}
                                                <p>{{$triplocation->PlantripCityTo->name}}</p>
                                                @else
                                                <p><span style="color:red;">Not Available</span></p>
                                                @endif</td>
                                        <td> @if(isset($triplocation->from_Date))
                                                <p>{{$triplocation->from_Date}}</p>
                                                @else
                                                <p><span style="color:red;">Not Available</span></p>
                                                @endif</td>
                                        <td>  @if(isset($triplocation->to_Date))
                                            <p>{{$triplocation->to_Date}}</p>
                                            @else
                                            <p><span style="color:red;">Not Available</span></p>
                                            @endif
                                        </td>
                                        <td>
                                            @if($triprequest->PlantripTriptype->name=='Local')
                                             1 Day
                                           
                                            @elseif($triprequest->PlantripTriptype->name=='Outstation')
                                           @php
                                                 $datetime1 = date_create($triplocation->from_Date);
                                                $datetime2 = date_create($triplocation->to_Date);
                                                
                                                $interval = date_diff($datetime2, $datetime1);
                                                
                                               echo $interval->format("%a days"); 
                                            @endphp
                                            @endif
                                            {{-- @if(isset($triplocation->to_Date))
                                            <p>{{$triplocation->to_Date}}</p>
                                            @else
                                            <p><span style="color:red;">Not Available</span></p>
                                            @endif --}}
                                        </td>
                                        <td>
                                            @if(isset($triplocation->time_to_Departure))
                                            <p>{{$triplocation->time_to_Departure}}</p>
                                            @else
                                            <p><span style="color:red;">Not Available</span></p>
                                            @endif
                                        </td>
                                        <td>
                                         
                                          {{-- {{dump($triprequest->PlantripPurpose->PlantripTriplocation[0]->PlantripMember)}} --}}
                                          @php
                                          $j=0;
                                          @endphp
                                           @if(isset($triplocation->PlantripMember))
                                          @foreach ($triplocation->PlantripMember as $PlantripMembers)
                                             <p> {{$PlantripMembers->User->first_name}}   {{$PlantripMembers->User->last_name}}<br> </p>
                                             
                                             @php
                                             $j++;
                                             @endphp
                                          @endforeach 
                                           @endif
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<form action="{{route('requestsentfurthertoauthority')}}" method="POST" enctype="multipart/form-data" id="">
    {{csrf_field()}}
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><b>Driver Assignment</b></h5></div>
            <div class="card-block">
                <div class="row">
                    <div class="col-md-6 form-group ">
                        <label for=""><b>Pick Driver :</b></label><br>
                        <select name="assigndriver" class="form-control" id="">
                                <option value="" selected disabled> Choose Driver</option>
                            @foreach ($drivers as $driver)
                        <option value="{{$driver->id}}">{{$driver->User->first_name}} {{$driver->User->last_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group ">
                        <label for=""><b>Pick Vehicle : </b></label><br>
                        <select name="assignvehicle" class="form-control" id="">
                        <option value="" selected disabled> Choose Vehicle</option>
                            @foreach ($vehicles as $vehicle)
                        <option value="{{$vehicle->id}}">{{$vehicle->name}}-{{$vehicle->no_plate}}</option>
                            @endforeach
                        </select> 
                    </div>
                    
                      
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                        <div class="col-md-5">
                                <p><small>After Assigning Driver and Vehicle this request will be forwarded to DG (M&E) AND DC(M&E).</small></p></div>
                            <div class="col-md-3">
                            <input type="hidden" name="triprequest_id" value="{{$triprequest->id}}">
                            <button class="btn btn-md btn-info " type="submit">Assign & Forward</button>
                            </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
</form>
@endsection
