@section('style')
    <style>
        .ratings i {
            cursor: pointer;
            transition: all 0.5s
        }

        .ratings i:hover {
            transform: scale(1.3)
        }
    </style>
@endsection
<div class="product-description-review-area pb-90">
    <div class="container">
        <div class="product-description-review text-center">
            <div class="description-review-title nav" role=tablist>
                <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                    Description
                </a>
                @if ($product->detail->ingredients)
                    <a href="#ingredient" data-toggle="tab" role="tab" aria-selected="false">
                        Ingedients
                    </a>
                    <a href="#nutrient" data-toggle="tab" role="tab" aria-selected="false">
                        Nutrient Facts
                    </a>
                @else
                    <a href="#material" data-toggle="tab" role="tab" aria-selected="false">
                        Materials
                    </a>
                @endif
                <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                    Reviews ({{ $product->userReviews->count() }})
                </a>
            </div>
            <div class="description-review-text tab-content">
                <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                    <p>{{ $product->description }}</p>
                </div>
                <div class="tab-pane fade" id="ingredient" role="tabpanel">
                    <a href="#">{{ $product->detail->ingredients }}</a>
                </div>
                <div class="tab-pane fade" id="nutrient" role="tabpanel">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2" class="bg-dark">Nutrition Facts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Serving Size</th>
                                <td>{{ $product->detail->nutritionFact->serving_size }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Calories</th>
                                <td>{{ $product->detail->nutritionFact->calories }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Protein</th>
                                <td>{{ $product->detail->nutritionFact->protein }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Fat Content</th>
                                <td>{{ $product->detail->nutritionFact->fat_content }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Crude Fiber</th>
                                <td>{{ $product->detail->nutritionFact->crude_fiber }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Total Carbohydrate</th>
                                <td>{{ $product->detail->nutritionFact->total_carbohydrate }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Sugar</th>
                                <td>{{ $product->detail->nutritionFact->sugar }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Crude Ash</th>
                                <td>{{ $product->detail->nutritionFact->crude_ash }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Calcium</th>
                                <td>{{ $product->detail->nutritionFact->calcium }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Vitamin A</th>
                                <td>{{ $product->detail->nutritionFact->vitamin_A }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Moisture</th>
                                <td>{{ $product->detail->nutritionFact->moisture }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pro-review" role="tabpanel">
                    <link rel="stylesheet" href="/css/app.css">
                    @if ($product->userReviews->count() == 0)
                        <a href="#" title="Write Review" data-toggle="modal" data-target="#reviewModal"> 
                            Be the first to write your review!
                        </a>
                    @else
                        <div class="row">
                            <div class="col-4">
                                @include('layouts.admin.inc.review')
                            </div>
                            <div class="col-8 mt-5">
                                @foreach($userReviews as $review)
                                    <div class="border-b">
                                        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm">
                                                <p class="text-sm font-black">{{ $review->userName }} - {{ $review->pivot->created_at->toDayDateTimeString() }}</p>
                                                <p>Reviews wrote: {{ \App\User::find( $review->id)->reviews->count() }}</p>
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                <p class="text-lg font-black">{{ $review->pivot->title }}</p>
                                                <p>{{ $review->pivot->rating }}</p>
                                                <p>{{ $review->pivot->content }}</p>
                                            </dd>
                                        </div>
                                        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <form action="" method="post">
                                                <button type="submit">Reply</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                                {{ $userReviews->links() }}
                            </div>
                        </div>
                    @endif
                </div>
                
                {{-- Review --}}
                <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-hidden="true" >
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="pe-7s-close" aria-hidden="true"></span>
                    </button>
                    <div class="modal-dialog modal-quickview-width" role="document" >
                        <div class="modal-content p-10">
                            <div class="modal-body">
                                <div class="qwick-view-content text-left row">
                                    <h2 class="text-center font-weight-bold h2">Review</h2>
                                    <form action="" method="post" class="row h4">
                                        @csrf
                                        <div class="form-group col-12">
                                            <label for="title" class="h3">Title</label>
                                            <input type="text" class="form-control @error('title') border-red-500 @enderror" name="title" id="title" placeholder="Title">
                                            @error('title')
                                                <div class="text-sm text-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12">
                                            <h3 class="h3">Rate this product</h3>
                                            <div class="ratings pt-2 pb-2" id="ratings"> 
                                                <i class="far fa-star fa-2x"></i> 
                                                <i class="far fa-star fa-2x"></i> 
                                                <i class="far fa-star fa-2x"></i>
                                                <i class="far fa-star fa-2x"></i> 
                                                <i class="far fa-star fa-2x"></i> 
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="content" class="h3">Content</label>
                                            <textarea class="form-control" name="content" id="content" rows="3">Your thought...</textarea>
                                        </div>
                                        <div class="form-group col-2">
                                            <button type="submit" class="btn btn-outline-dark rounded w-75 h-75 p-3 h3">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script src="https://kit.fontawesome.com/c4201aab66.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('.ratings i').click(function() {
            $('.ratings > i').removeClass('far');
            $(this).addClass('fas');
            $('.form').css('display', 'block');
            })
        });
    </script>
@endsection
