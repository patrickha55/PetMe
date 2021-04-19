@extends('layouts.client.appWithoutCategory')

@section('head')
    <style>
        .ratings {
            display: inline-block;
            padding-left: 5px;
        }

        .ratings * {
            float: right;
        }

        .ratings input {
            display: none;
        }
        .ratings label {
            font-size: 30px;
        }

        .ratings i {
            padding-top: 2px;
            padding-bottom: 2px;
            cursor: pointer;
            transition: all 0.5s
        }

        .ratings i:hover {
            transform: scale(1.3)
        }

        form .error{
            color: #ff0000;
        }
    </style>
@endsection

@section('content')
    <h2 class="text-center font-weight-bold my-5">Review</h2>
    <div class="shadow w-50 mx-auto mb-100">
        <div class="p-3">
            <form action="{{ route('review.store', $product) }}" method="POST" class="row h4" name="rating-form">
                @csrf
                <div class="form-group col-12">
                    <label for="title" class="h3">Title</label>
                    <input type="text" class="form-control @error('title') border-red-500 @enderror" name="title" id="title" placeholder="Title" value="{{ old('title') }}" required>
                    @error('title')
                    <div class="text-sm text-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="h3">Rate this product</div>
                    <div class="ratings pt-2 pb-2" id="ratings">
                        <input type="radio" id="r5" name="rating" value="5">
                        <label for="r5">
                            <i class="far fa-star fa-2x" data-index="5"></i>
                        </label>
                        <input type="radio" id="r4" name="rating" value="4">
                        <label for="r4">
                            <i class="far fa-star fa-2x" data-index="4"></i>
                        </label>
                        <input type="radio" id="r3" name="rating" value="3">
                        <label for="r3">
                            <i class="far fa-star fa-2x" data-index="3"></i>
                        </label>
                        <input type="radio" id="r2" name="rating" value="2">
                        <label for="r2">
                            <i class="far fa-star fa-2x" data-index="2"></i>
                        </label>
                        <input type="radio" id="r1" name="rating" value="1">
                        <label for="r1">
                            <i class="far fa-star fa-2x" data-index="1"></i>
                        </label>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="body" class="h3">Content</label >
                    <textarea class="form-control @error('body') border-red-500 @enderror" name="body" id="body" rows="3"></textarea>
                    @error('body')
                    <div class="text-sm text-danger-mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-2">
                    <button type="submit" class="btn btn-outline-dark rounded w-75 h-75 p-3 h3">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function()
        {
            let ratedIndex = -1;

            $('i.fa-star').click(function() {
                //Reset the star
                resetRating();

                //Get star data index
                ratedIndex = parseInt($(this).attr('data-index'));
                console.log(ratedIndex);

                for(let x = 1; x <= ratedIndex; x++)
                    $('i.fa-star').eq(-x).removeClass("far").addClass('fas').css('color', '#ffff36');
            });

            /* $('.fa-star').mouseover(function() {
                 let currentIndex = parseInt($(this).attr('data-index'));

             });*/
        })

        function resetRating(){
            $('i.fa-star').removeClass('fas').addClass('far').css('color', 'gray')
        }
    </script>
@endsection
