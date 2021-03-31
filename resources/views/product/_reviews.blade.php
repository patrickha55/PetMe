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
                        <a href="#">Be the first to write your review!</a>
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
            </div>
        </div>
    </div>
</div>
