    @extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card card-plain">
                   <div class="shadow-lg p-3  bg-white rounded">

                        <div class="card-header card-header-dark d-flex justify-content-between">
                            <div>
                                <h4 class="card-title mt-0 text-dark ">User's Wishlist Management</h4>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover text-center">
                                    <thead class="">
                                    <tr>
                                        <th>ID</th><th>Username</th><th>Product</th><th>Stock</th><th>Price</th><th>Date Added</th><th>Days in Wishlist</th><th>Function</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        @foreach($user->favorites as $favorite)
                                            <tr>
                                                <th>{{ $favorite->id }}</th>
                                                <th>
                                                    <a class="text-yellow-700" href="{{ route('users.show', $user) }}">{{ $user->userName }}</a>
                                                </th>
                                                <th>{{ $favorite->name }}</th>
                                                <th>{{ $favorite->stock }}</th>
                                                <th>@currency($favorite->price) VNĐ</th>
                                                <th>{{ $favorite->pivot->created_at->toFormattedDateString() }}</th>
                                                <th>
                                                    {{ $favorite->pivot->created_at->diffInDays() }}
                                                <th>
                                                    @php 
                                                        $product_id = $favorite->id;
                                                        $user_id = $user->id;
                                                    @endphp
                                                    <form action="{{ route('wishlists.delete', [$product_id, $user_id]) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="" style=" font-size: 10px;"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    <span>{{ $users->links() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
