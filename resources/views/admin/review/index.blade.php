@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <h1 class="text-center, font-bold sm:px-6 lg:px-8">User's Reviews</h1>
            @if (session('status'))
                <p class="text-green-500 font-black sm:px-6 lg:px-8">
                    {{ session('status') }}
                </p>
            @endif
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Username
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Product Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title & Rating
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Content
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Submitted On
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Updated On
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only"></span>
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($reviews as $review)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="/storage/Image/product/noimage.jpg" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                            {{ $review->user->userName }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                            {{ $review->user->firstName }}
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $review->product->name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $review->title }}</div>
                                        <div class="text-sm text-gray-500">{{ $review->rating }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded bg-green-100 text-green-800">
                                            <form action="{{ route('reviews.update', [$review->user_id, $review->product_id]) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <div class="form-group">
                                                    <select class="form-control select font-weight-bold h6 bg-green-100 text-green-800" name="status" id="status" data-mdb-clear-button="true">
                                                        @switch($review->status)
                                                            @case('pending')
                                                                <option selected value="pending">pending</option>
                                                                <option value="approved">approved</option>
                                                                @break
                                                            @case('approved')
                                                                <option value="pending">pending</option>
                                                                <option selected value="approved">approved</option>
                                                                @break
                                                        @endswitch
                                                    </select>
                                                    <button type="submit" class="btn-sm ">.</button>
                                                </div>
                                            </form>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $review->content }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $review->created_at }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{ $review->updated_at }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        {{-- {{ dd($review) }} --}}
                                        <form action="{{ route('reviews.destroy', [$review->user_id, $review->product_id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <a class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-trash"></i></a>
                                            </button>
                                        </form>
                                        {{-- <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection