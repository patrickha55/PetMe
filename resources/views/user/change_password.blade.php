@extends('layouts.client.appWithoutCategory')

@section('content')
    <div class="wrapper bg-white mt-sm-5">
        <h4 class="pb-4 border-bottom font-weight-bold">CHANGE PASSWORD</h4>
        {{-- <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
            <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
            </div>
        </div> --}}
        <div class="py-2">
            <div class="row py-2">
                <div class="col-md-12"> <label for="currpassword">Current Password<span class="span-star">*<span></label> <input type="password" class="bg-light form-control" placeholder="" required> </div>
            
            </div>
            <div class="row py-2">
                <div class="col-md-12"> <label for="newpassword">New Password<span class="span-star">*<span></label> <input type="password" class="bg-light form-control" placeholder="" required> </div>
                
            </div>
            <div class="row py-2">
                <div class="col-md-12"> <label for="cfpassword">Confirm Password<span class="span-star">*<span></label> <input type="password" class="bg-light form-control" placeholder="" required> </div>
                
            </div>
            <div class="py-3 pb-4 border-bottom"> 
                <button type="submit" class="btn-secondary border button">Save Changes</button> 
                <button class="border button">Cancel</button> 
            </div>
        </div>
    </div>
@endsection