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
                    {{-- Dem so luong review --}}
                    Reviews ({{ $product->userReviews()->where('status', 'approved')->count() }})
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
                    @if ($product->userReviews()->where('status', 'approved')->count() == 0)
                        <h4 class="text-center p-3">There is no review for this product.</h4>
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
                                                <div class="h4">{{ $review->userName }} <span class="text-sm text-gray-500"> - {{ $review->pivot->created_at->toDayDateTimeString() }}</span></div>
                                                <p>Reviews wrote: {{ \App\User::find($review->id)->reviews->count() }}</p>
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                <p class="text-lg font-semibold">{{ $review->pivot->title }}</p>
                                                <p>{{ $review->pivot->rating }}</p>
                                                <p>{{ $review->pivot->content }}</p>
                                            </dd>
                                        </div>
                                        <div class="px-4 py-2 row">
                                            <div class="col-2 text-right">
                                                <button id="displayReply" class="">Reply</button>
                                            </div>
                                            <div class="col-10 hidden" id="reply">
                                                <div class='block'>
                                                    <form action="{{ route('comment.store', $review->pivot->id) }}"  method="post" class="form-inline w-100">
                                                        @csrf
                                                        <div class="form-group w-100 mb-2" >
                                                          <textarea class="form-control rounded" style="width: 100%;" name="body" id="body" rows="1"></textarea>
                                                        </div>
                                                        <div class="mb-2 flex">
                                                            <div id="cancelReply" class="btn-sm btn-dark cursor-pointer mr-2">Cancel</div>
                                                            <button type="submit" class="btn-sm btn-dark">Reply</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pl-2 py-2 row">
                                            <div class="col-4">
                                                <button id="displayComments">Show Replies</button>
                                            </div>
                                            <div class="col-8 hidden" id="comments">
                                                <div class='row'>
                                                    @php
                                                        $comments = \App\Comment::where('product_review_id', $review->pivot->id)->get();
                                                    @endphp
                                                    @foreach($comments as $comment)
                                                        <div class="col-2 mb-2">
                                                            <img src="/storage/Image/noimage.jpg" alt="" width="70%">
                                                        </div>
                                                        <div class="col-10 mb-2 text-left block">
                                                            <div class="h5">{{ \App\User::find($comment->user_id)->userName }} <span class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</span></div>
                                                            <div class="text-left">&#64;{{ $review->userName }} &nbsp; {{ $comment->body }}</div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
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
            {{-- Hien thong so luong rating ra ngoi sao --}}

            $('.ratings i').click(function() {
                $('.ratings > i').removeClass('far');
                $(this).addClass('fas');
                $('.form').css('display', 'block');
            });

            {{-- Hien tat hoac an commet form va comment --}}

            $('#displayReply').click(function(){
                $('#reply').removeClass('hidden');
            });

            $('#cancelReply').click(function(){
                $('#reply').addClass('hidden');
            });

            let click = 0;

            $('#displayComments').click(function(){
                if(click == 0){
                    $('#comments').removeClass('hidden');
                    click++;
                } else {
                    $('#comments').addClass('hidden');
                    click = 0;
                }
                
            });
        });
    </script>
@endsection
