@extends('layouts.client.appWithoutCategory')

@section('style')
    <style>
        #statusSession{
            position:absolute;
            bottom:20px;
            right:20px;
            z-index:10;
        }
    </style>
@endsection

@section('content')


@livewire('filter')
   

  
@endsection

                
 

{{-- Test hidden form --}}

@section('script')
    {{-- <script type='text/javascript'>
        let products = {!! json_encode($products, JSON_HEX_TAG) !!};

        let a = 'ab';

        for(let i=1; i<=products.data.length + 1; i++){
            $('.productButton').ready(function(){
                $('#removeWishlist' + i).click(function(){
                    $('#wishlistHidden' + i).click();
                });
            });
        }
    </script> --}}
    <script>
          $( "#statusSession" ).fadeIn( 500 ).delay( 2000 ).fadeOut( 500 );
    </script>
@endsection
