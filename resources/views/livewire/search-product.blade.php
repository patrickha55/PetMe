<div class="w-50 rounded my-auto">
    <div class="">
        <input id="searchInput" wire:model="search" type="text" placeholder="Search Poduct by name...">
    </div>
    <div style="position: relative; width:100%;">
        <ul style="display:block;z-index:13; position: absolute; background-color: rgb(184, 214, 223); width: 100%">
            @if ($search != '')
                @foreach ($product as $item)
                    <a class="hover-shadow" href="{{ route('home.show', $item) }}">
                        <li style="display:block;" class="p-4 mb-2 ">
                            <img style="width: 50px; margin-right: 2rem;"
                                src="/storage/Image/product/{{ $item->img }}" alt="{{ $item->name }}">
                            {{ $item->name }}
                        </li>
                    </a>
                @endforeach
            @endif
        </ul>
    </div>
</div>
