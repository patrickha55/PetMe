@extends('layouts.client.appWithoutCategory')

@section('content')
    <div class="w-75 row m-auto" style="margin-top: 50px; margin-bottom: 200px;">
        <h1 class="text-center font-weight-bold col-12 mt-2 mb-5">
            My Reviews
        </h1>
        @if(count($reviews))
            <div class="col-12">
                @foreach($reviews as $review)
                    <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body row">
                            <div class="col-lg-2 col-md-4">
                                <img src="/storage/Image/product/{{ $review->product->img }}" width="150px" height="auto" alt="Product Image">
                            </div>
                            <div class="col-lg-10 col-md-8">
                                <a href="{{ route('home.show', $review->product) }}">
                                    <h3>{{ $review->product->name }}</h3>
                                </a>
                                <p>{{ $review->created_at->toDayDateTimeString() }}</p>
                                <h3 class="pb-2">{{ $review->title }}</h3>
                                {{--Rating--}}
                                <div class="ratings pt-2 pb-2" id="ratings">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $review->rating)
                                            <i class="fas fa-star fa-2x" style="color: #ffff36"></i>
                                        @else
                                            <i class="far fa-star fa-2x"></i>
                                        @endif
                                    @endfor
                                </div>
                                <!--Status-->
                                <h3 class="text-success pt-2">{{$review->status}}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="col-12">
                <div class="card mb-3 shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body row text-center">
                        <div class="m-auto">
                            <img src="/storage/Image/review.jpg" alt="Empty Cart">
                        </div>
                        <h3 class="col-12 mt-20 mb-20">There is no review</h3>
                        <div class="m-auto">
                            <a href="{{ route('order.index') }}" class="col-12 btn-lg rounded btn-danger">Rate your Purchased Product</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
