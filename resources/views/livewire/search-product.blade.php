{{-- <div class="categories-search-wrapper" style=" z-index: 1;">
<p>liveware</p> --}}
    {{-- <div class="categories-wrapper">
       
            <input  placeholder="Enter Your key word" type="text"  wire:model="search"">
        
       
 
    <ul>
             @if($search != "")
        @foreach($product as $item)
            <li>{{ $item->name }} </li>
        @endforeach
   @endif 
    </ul>
</div> --}}
{{-- </div> --}}
<div>
<div class="categories-search-wrapper">
    <div class="categories-wrapper">
    <input wire:model="search" type="search" placeholder="Search Poduct by name...">
</div>
</div>
<div >
    <ul style="display:block;z-index:13; position: absolute; background-color:whitesmoke">
        @if($search !="")
        @foreach($product as $item)
        <li style="padding:2px; border-top:1px solid black; display:block;"><a style="hover:"  href="{{ route('home.show',$item) }}"> <img style="width: 50px;" src="/storage/Image/product/{{ $item->img }}" alt=""> {{ $item->name  }} </a></li>
        @endforeach
        @endif
    </ul>
</div>
</div>

  

   
