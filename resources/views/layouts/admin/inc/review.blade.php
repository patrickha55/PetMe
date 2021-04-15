<div class="mx-auto bg-white shadow-lg rounded-lg my-32 px-4 py-4 max-w-sm ">
    <div class="mb-1 tracking-wide px-4 py-4" >
        <div class="rating-number pt-4 pb-4 m-auto">
            @php
                $rating = \App\ProductReview::where('product_id', $product->id)->avg('rating');
            @endphp
            @for($i = 0; $i < 5; $i++)
                @if(floor($rating) - $i >= 1)
                    <i class="fas fa-star fa-2x m-auto" style="color: #facf2c"></i>
                @elseif($rating -$i > 0)
                    <i class="fas fa-star-half fa-2x m-auto" style="color: #facf2c"></i>
                @else
                    <i class="far fa-star fa-2x m-auto"></i>
                @endif
            @endfor
        </div>
        <h2 class="text-gray-800 font-semibold mt-1">{{ $product->userReviews->count() }} Reviewed</h2>
        <div class="-mx-8 px-8 pb-3">
            <div class="flex items-center mt-1">
                <div class=" w-1/5 text-indigo-500 tracking-tighter">
                    <span>5 star</span>
                </div>
                <div class="w-3/5">
                    <div class="bg-gray-300 w-full rounded-lg h-2">
                        <div class="bg-indigo-600 rounded-lg h-2" style="width: {{ $five }}%;"></div>
                    </div>
                </div>
                <div class="w-1/5 text-gray-700 pl-3">
                    <span class="text-sm">{{ $five }}%</span>
                </div>
            </div><!-- first -->
            <div class="flex items-center mt-1">
                <div class=" w-1/5 text-indigo-500 tracking-tighter">
                    <span>4 star</span>
                </div>
                <div class="w-3/5">
                    <div class="bg-gray-300 w-full rounded-lg h-2">
                        <div class="bg-indigo-600 rounded-lg h-2" style="width: {{ $four }}%;"></div>
                    </div>
                </div>
                <div class="w-1/5 text-gray-700 pl-3">
                    <span class="text-sm">{{ $four }}%</span>
                </div>
            </div><!-- second -->
            <div class="flex items-center mt-1">
                <div class="w-1/5 text-indigo-500 tracking-tighter">
                    <span>3 star</span>
                </div>
                <div class="w-3/5">
                    <div class="bg-gray-300 w-full rounded-lg h-2">
                        <div class="bg-indigo-600 rounded-lg h-2" style="width: {{ $three }}%;"></div>
                    </div>
                </div>
                <div class="w-1/5 text-gray-700 pl-3">
                    <span class="text-sm">{{ $three }}%</span>
                </div>
            </div><!-- third -->
            <div class="flex items-center mt-1">
                <div class=" w-1/5 text-indigo-500 tracking-tighter">
                    <span>2 star</span>
                </div>
                <div class="w-3/5">
                    <div class="bg-gray-300 w-full rounded-lg h-2">
                        <div class="bg-indigo-600 rounded-lg h-2" style="width: {{ $two }}%;"></div>
                    </div>
                </div>
                <div class="w-1/5 text-gray-700 pl-3">
                    <span class="text-sm">{{ $two }}%</span>
                </div>
            </div><!-- 4th -->
            <div class="flex items-center mt-1">
                <div class="w-1/5 text-indigo-500 tracking-tighter">
                    <span>1 star</span>
                </div>
                <div class="w-3/5">
                    <div class="bg-gray-300 w-full rounded-lg h-2">
                        <div class="bg-indigo-600 rounded-lg h-2" style="width: {{ $one }}%;"></div>
                    </div>
                </div>
                <div class="w-1/5 text-gray-700 pl-3">
                    <span class="text-sm">{{ $one }}%</span>
                </div>
            </div><!-- 5th -->
        </div>
    </div>
</div>
