@extends('layouts.upperNavigation')
@section('content')
<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <label for="">
                        <h3><b> New Pending Visit Requests</b>
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
                        <th style="text-align:center;">Total Purposes</th>
                        <th style="text-align:center;">Action</th>
                        <th style="text-align:center;">Remove</th>
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
                            {{$triprequest->User->first_name}}   {{$triprequest->User->last_name}}
                        </td>
                    <td style="text-align:center;">
                            {{-- {{dd($triprequest->plantrip_triptype_id->PlantripTriptype->name[0])}} --}}
                        
                           {{$triprequest->PlantripTriptype->name}}</td>
                        <td style="text-align:center;">
                            {{$triprequest->PlantripPurpose->count()}}
                        </td>
                           <td style="text-align:center;">
                           {{-- {{dump($triprequest->id)}} --}}
                           {{-- <input type="hidden" value> --}}
                            <a href="{{route('proceedfurther',$triprequest->id)}}" class="btn btn-info btn-sm"><b>Process Further</b></a>
                           </td>
                           <td style="text-align:center;">
                                <form action="{{route('VmisRequestToTransportOfficer.destroy',$triprequest->id)}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
                                       {{-- <a href="#" class="btn btn-danger btn-sm" type="a"><b>Discard Request</b></a>                                 --}}
                                        <input type="submit" class="btn btn-sm btn-danger" value="Discard Request">
                                       </form> 
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