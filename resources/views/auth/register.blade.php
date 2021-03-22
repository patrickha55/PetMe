@extends('layouts.client.app')
@section('content')
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" alt=""/>
                <h3>Welcome</h3>
                <p>Get started with your free account</p>
                <a href="{{url('/login')}}"><input type="submit" name="" value="Login"></a>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="register-heading">
                            <h3>Create An Account</h3>
                        </div>
                    </div>
                    <form action="{{ url('/register') }}" method="post">
                        @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('firstName') border-red-500 @enderror" name="firstName" placeholder="First Name *" value="{{ old('firstName') }}" />
                                    @error('firstName')
                                    <div class="text-sm text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('email') border-red-500 @enderror" name="lastName" placeholder="Last Name *" value="{{ old('lastName') }}" />
                                    @error('lastName')
                                    <div class="text-sm text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('userName') border-red-500 @enderror" name="userName" placeholder="Enter Your Username *" value="{{ old('userName') }}" />
                                    @error('userName')
                                    <div class="text-sm text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="M" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="F">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') border-red-500 @enderror" name="email" placeholder="Last Name *" value="{{ old('email') }}" />
                                    @error('email')
                                    <div class="text-sm text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') border-red-500 @enderror" name="password" placeholder="Password *"/>
                                    @error('password')
                                    <div class="text-sm text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password_confirmation" class="form-control @error('password_confirmation') border-red-500 @enderror" name="password_confirmation"  placeholder="Confirm Password *" />
                                    @error('password_confirmation')
                                        <div class="text-sm text-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number" minlength="10" maxlength="11" name="phoneNumber" class="form-control @error('phoneNumber') border-red-500 @enderror" placeholder="Your Phone *" value="{{ old('phoneNumber') }}" />
                                    @error('phoneNumber')
                                    <div class="text-sm text-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btnRegister">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
