@extends('layouts.client.appWithoutCategory')

@section('content')
    <!--Content-->
    <div class="text-center my-5 h2 font-weight-bold">
        Products Comparison
    </div>
    <div class="mr-auto ml-auto" style="width: 90%;">
        <div class="row m-auto">
            @foreach($results as $result)
            <div class="col-3 shadow bg-white rounded  mb-100 m-auto p-5">
                <h4 class="p-4  font-weight-bold border-bottom-1">{{$result->name}}</h4>
                @if (session('status'))
                    <p class="text-success font-weight-bolder">
                        {{ session('status') }}
                    </p>
                @endif
                <div class="row font-weight-bold h6">
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3"  >
                        First Name:
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3" >

                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3" >
                        Last Name :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3" >

                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                        Username :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3">

                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                        Email :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3">

                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3" >
                        Birthday :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3">

                    </div>
                    <div class="col-md-2 border-bottom-1 mt-3 mb-3">
                        Gender :
                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3">

                    </div>
                    <div class="col-md-4 border-bottom-1 mt-3 mb-3" >
                        Phone Number :
                    </div>
                    <div class="col-md-8 border-bottom-1 mt-3 mb-3">

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
