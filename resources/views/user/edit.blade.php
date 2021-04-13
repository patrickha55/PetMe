@extends('layouts.client.appWithoutCategory')

@section('content')
    <div class="wrapper shadow p-3 mb-5 bg-white mt-sm-5">
        <h4 class="pb-4 border-bottom-1 font-weight-bold">MY PROFILE</h4>
        {{-- <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
            <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
            </div>
        </div> --}}
        <div class="py-2">
            <form action="{{ route('user.update', $user) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row py-2">
                    <div class="col-md-6 pt-md-0 pt-3 form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" id="firstName" class="bg-light form-control @error('userName') border-red-500 @enderror" value="{{ $user->firstName }}">
                        @error('userName')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" class="bg-light form-control @error('lastName') border-red-500 @enderror" value="{{ $user->lastName }}">
                        @error('lastName')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row py-2 form-group">
                    <div class="col-md-6">
                        <label>Gender</label>
                        <div class="row mx-auto" style="margin-top: 20px;">
                            @if ($user->gender == 'M')
                                <div class="col-6">
                                    <input class="w-25" type="radio" name="gender" value="M" checked>Male
                                </div>
                                <div class="col-6">
                                    <input class="w-25" type="radio" name="gender" value="F">Female 
                                </div>
                            @else
                                <div class="col-6">
                                    <input style="height: unset;" class="w-25" type="radio" name="gender" value="M" >Male
                                </div>
                                <div class="col-6">
                                    <input style="height: unset;" class="w-25" type="radio" name="gender" value="F" checked>Female
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="dob">Day of Birth</label>
                        <input type="date" id="dob" name="dob" class="bg-light form-control @error('dob') border-red-500 @enderror" value="{{ $user->dob }}">
                        @error('dob')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6">
                        <label for="userName">Username</label>
                        <input type="text" id="userName" name="userName" class="bg-light form-control @error('userName') border-red-500 @enderror" value="{{ $user->userName }}">
                        @error('userName')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="bg-light form-control @error('email') border-red-500 @enderror" value="{{ $user->email }}">
                        @error('email')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-md-6 form-group">
                        <label for="phoneNumber">Phone</label>
                        <input type="text" id="phoneNumber" name="phoneNumber" class="bg-light form-control @error('phoneNumber') border-red-500 @enderror" value="{{ $user->phoneNumber }}">
                        @error('phoneNumber')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12 form-group">
                                <label for="img">Upload Avatar</label>
                                <input type="file" class="form-control-file" name="img" id="img" placeholder="img">
                                @error('img')
                                    <div class="text-sm text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <img src="#" id="avatar-img-tag" class="rounded hidden" width="200px"/>
                            </div>
                        </div>
                    </div>
                </div>
                @if($user->address != null)
                    <div class="row py-2">
                        <div class="col-md-12">
                            <h4 class="pb-4 border-bottom-1 font-weight-bold">My Address</h4>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="bg-light form-control @error('address') border-red-500 @enderror" value="{{ $user->address->address }}">
                            @error('address')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="ward">Ward</label>
                            <input type="text" id="ward" name="ward" class="bg-light form-control @error('ward') border-red-500 @enderror" value="{{ $user->address->ward }}">
                            @error('ward')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row py-2 mb-10">
                        <div class="col-md-6 form-group">
                            <label for="district">District</label>
                            <input type="text" id="district" name="district" class="bg-light form-control @error('district') border-red-500 @enderror" value="{{ $user->address->district }}">
                            @error('district')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="bg-light form-control @error('city') border-red-500 @enderror" value="{{ $user->address->city }}">
                            @error('city')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                @else
                    <div class="row py-2">
                        <div class="col-md-12">
                            <h4 class="pb-4 border-bottom-1 font-weight-bold">My Address</h4>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="bg-light form-control @error('address') border-red-500 @enderror" placeholder="Your address">
                            @error('address')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="ward">Ward</label>
                            <input type="text" id="ward" name="ward" class="bg-light form-control @error('ward') border-red-500 @enderror" placeholder="Ward">
                            @error('ward')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row py-2 mb-10">
                        <div class="col-md-6 form-group">
                            <label for="district">District</label>
                            <input type="text" id="district" name="district" class="bg-light form-control @error('district') border-red-500 @enderror" placeholder="District">
                            @error('district')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="bg-light form-control @error('city') border-red-500 @enderror" placeholder="City">
                            @error('city')
                                <div class="text-sm text-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                @endif
                <div class="py-3 pb-4 border-top-1 row">
                    <div class="col-5">
                        <button type="submit" class="btn-secondary border button">Save Changes</button>
                    </div>
                    <div class="col-3">
                        <a class=" border button" href="{{ route('user.show', $user) }}">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function readUrl(input){
            if (input.files && input.files[0]){
                let reader = new FileReader();

                reader.onload = function(e) {
                    $('#avatar-img-tag').attr('src', e.target.result).removeClass('hidden');
                }

                reader.readAsDataURL(input.files[0]);
            }
        };

        $('#img').change(function(){
            readUrl(this);
        });
    </script>
@endsection