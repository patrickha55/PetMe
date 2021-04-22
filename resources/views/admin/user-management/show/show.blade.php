@extends('layouts.admin.admin')

@section('style')
    <style>
        :root {
            --main-color: #4a76a8;
        }

        .bg-main-color {
            background-color: var(--main-color);
        }

        .text-main-color {
            color: var(--main-color);
        }

        .border-main-color {
            border-color: var(--main-color);
        }

    </style>
@endsection

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="md:flex no-wrap md:-mx-2 ">
          <!-- Left Side -->
          <div class="w-full md:w-3/12 md:mx-2">
              <!-- Profile Card -->
              <div class="bg-white p-3 border-t-4 border-green-400">
                  <div class=" overflow-hidden">
                      <img class="h-auto mx-auto" src="/storage/Image/user/{{ $user->img }}" width="200px"
                          alt="User Image">
                  </div>
                  <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">
                      {{ $user->firstName . ' ' . $user->lastName }}</h1>
                  <h3 class="text-gray-600 font-lg text-semibold leading-6">
                      @if ($user->hasRole('user'))
                          Customer
                      @else
                          Administrator
                      @endif
                  </h3>
                  <ul
                      class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                      <li class="flex items-center py-3">
                          <span>Status</span>
                          @if ($user->active == 1)
                              <span class="ml-auto"><span
                                      class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                          @else
                              <span class="ml-auto"><span
                                      class="bg-red-500 py-1 px-2 rounded text-white text-sm">Banned</span></span>
                          @endif
                      </li>
                      <li class="flex items-center py-3">
                          <span>Member since</span>
                          <span class="ml-auto">{{ $user->created_at->toFormattedDateString() }}</span>
                      </li>
                  </ul>
              </div>
              <!-- End of profile card -->
              <div class="my-4"></div>
              <!-- Friends card -->
              <div class="bg-white p-3 hover:shadow">
                  <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8">
                      <span class="text-green-500">
                          <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                          </svg>
                      </span>
                      <span>Similar Profiles</span>
                  </div>
                  <div class="grid grid-cols-3">
                    @if($user->hasRole('user'))
                      @foreach($users as $randomUser)
                        <div class="text-center my-2">
                          <img class="h-16 w-16 rounded-full mx-auto"
                              src="/storage/Image/user/{{ $randomUser->img }}"
                              alt="User Image">
                          <a href="{{ route('users.show', $randomUser) }}" class="text-main-color">{{ $randomUser->firstName . ' ' . $randomUser->lastName }}</a>
                        </div>
                      @endforeach
                    @else
                      @foreach($admins as $randomAdmin)
                        <div class="text-center my-2">
                          <img class="h-16 w-16 rounded-full mx-auto"
                              src="/storage/Image/user/{{ $randomAdmin->img }}"
                              alt="User Image">
                          <a href="{{ route('users.show', $randomAdmin) }}" class="text-main-color">{{ $randomAdmin->firstName . ' ' . $randomAdmin->lastName }}</a>
                        </div>
                      @endforeach
                    @endif
                  </div>
              </div>
              <!-- End of friends card -->
          </div>
          <!-- Right Side -->
          <div class="w-full md:w-9/12 mx-2 h-64">
            <!-- Profile tab -->
            <!-- About Section -->
            <div class="bg-white p-3 shadow-sm rounded-sm">
                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                    <span clas="text-green-500">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span class="tracking-wide">About</span>
                </div>
                <div class="text-gray-700">
                    <div class="grid md:grid-cols-2 text-sm">
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">First Name</div>
                            <div class="px-4 py-2">{{ $user->firstName }}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Last Name</div>
                            <div class="px-4 py-2">{{ $user->lastName }}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Gender</div>
                            <div class="px-4 py-2">{{ $user->gender }}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Contact No.</div>
                            <div class="px-4 py-2">{{ $user->phoneNumber }}</div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Email.</div>
                            <div class="px-4 py-2">
                                <a class="text-blue-800" href="mailto:jane@example.com">{{ $user->email }}</a>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Birthday</div>
                            <div class="px-4 py-2">{{ $user->dob }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of about section -->

            <div class="my-4"></div>

            <!-- Experience and education -->
            <div class="bg-white p-3 shadow-sm rounded-sm">

                <div class="grid grid-cols-2">
                    <div>
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                            <span clas="text-green-500">
                              <i class="material-icons">
                                home
                              </i>
                            </span>
                            <span class="tracking-wide">Address</span>
                        </div>
                        @if(isset($user->address))
                        <ul class="list-inside space-y-2">
                          <li>
                              <div class="text-teal-600">Address: </div>
                              <div class="text-gray-500 text-xs">{{ $user->address->address }}</div>
                          </li>
                          <li>
                              <div class="text-teal-600">Ward: </div>
                              <div class="text-gray-500 text-xs">{{ $user->address->ward }}</div>
                          </li>
                          <li>
                              <div class="text-teal-600">District: </div>
                              <div class="text-gray-500 text-xs">{{ $user->address->district }}</div>
                          </li>
                          <li>
                              <div class="text-teal-600">City: </div>
                              <div class="text-gray-500 text-xs">{{ $user->address->city}}</div>
                          </li>
                        </ul>
                        @else
                        <ul class="list-inside space-y-2">
                          <li>
                            <div class="text-teal-600">User does not has an address. </div>
                          </li>
                        </ul>
                        @endif
                    </div>
                    <div>
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                            <i class="material-icons">
                              rate_review
                            </i>
                            <span class="tracking-wide">Product Reviews</span>
                        </div>
                        <ul class="list-inside space-y-2">
                            @if(count($reviews))
                            
                              @foreach($reviews as $review)
                              <li>
                                <div class="text-teal-600">Review #{{ $review->id }}:</div>
                                <div class="text-gray-500 text-sm">Product: {{ \App\Product::find($review->product_id)->name }}</div>
                                <div class="text-gray-500 text-sm">Tittle: {{ $review->title }}</div>
                                <div class="text-gray-500 text-sm">Rating: 
                                    @for($i = 0; $i < 5; $i++)
                                    @if(floor($review->rating) - $i >= 1)
                                        <i class="fas fa-star" style="color: #facf2c"></i>
                                    @elseif($review->rating -$i > 0)
                                        <i class="fas fa-star-half" style="color: #facf2c"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor    
                                </div>
                                <div class="text-gray-500 text-sm">Content: {{ $review->content }}</div>
                                <div class="text-gray-500 text-sm">Date: {{ $review->created_at->toDateTimeString() }}</div>
                              </li>
                              @endforeach
                            @else
                              <li>
                                <div class="text-teal-600">User does not has a review.</div>
                              </li>
                            @endif
                        </ul>
                        {{ $reviews->links() }}
                    </div>
                </div>
                <!-- End of Experience and education grid -->
            </div>
          </div>    
        </div>
      </div>
    </div>
@endsection
