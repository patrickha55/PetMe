<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Edit Profile</title>
    <style> 
        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f6fa;
        }
        
        .wrapper {
            padding: 30px 50px;
            border: 1px solid #ddd;
            border-radius: 15px;
            margin: 10px auto;
            max-width: 600px
        }
        
        h4 {
            letter-spacing: -1px;
            font-weight: 400
        }
        
        .img {
            width: 70px;
            height: 70px;
            border-radius: 6px;
            object-fit: cover
        }
        
        #img-section p,
        #changepassword p {
            font-size: 12px;
            color: #777;
            margin-bottom: 10px;
            text-align: justify
        }
        
        #img-section b,
        #img-section button,
        #changepassword b {
            font-size: 14px
        }
        
        label {
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 500;
            color: #777;
            padding-left: 3px
        }
        
        .form-control {
            border-radius: 10px
        }
        
        input[placeholder] {
            font-weight: 500
        }
        
        .form-control:focus {
            box-shadow: none;
            border: 1.5px solid #0779e4
        }
        
        select {
            display: block;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 10px;
            height: 40px;
            padding: 5px 10px
        }
        
        select:focus {
            outline: none
        }
        
        .button {
            background-color: #fff;
            color: #0779e4
        }
        
        /* .button:hover {
            background-color: #0779e4;
            color: #fff
        } */
        
        .btn-primary {
            background-color: #0779e4
        }
        

        a {
            text-decoration: none;
        }
        
        @media(max-width:576px) {
            .wrapper {
                padding: 25px 20px
            }
            #changepassword {
                line-height: 18px
            }
        }
    </style>
</head>
@extends('layouts.client.app')
@section('content')
<body class="d-flex flex-column">
    <!--Content update profile-->
    <div class="wrapper bg-white mt-sm-5">
        <h4 class="pb-4 border-bottom">Account settings</h4>
        <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
            <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
                <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
            </div>
        </div>
        <form class="py-2" name="editprofile" onsubmit="return validateform()">
            <div class="row py-2">
                <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" class="bg-light form-control" placeholder="Steve" name="firstname"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" class="bg-light form-control" placeholder="Smith" name="lastname"> </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" class="bg-light form-control" placeholder="steve_@email.com" name="email"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Phone Number</label> <input type="tel" class="bg-light form-control" placeholder="+84 933679020" name="phone"> </div>
            </div>
            <div class="row py-2">
                <div class="col-md-6"> <label for="username">Username</label> <input type="text" class="bg-light form-control" placeholder="steve_123" name="username"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="phone">Address</label> <input type="tel" class="bg-light form-control" placeholder="152 Nguyễn Trãi" name="address"> </div>
            </div>

            <div class="py-3 pb-4 border-bottom">
                <a href=""><button class="btn btn-primary mr-3">Save Changes</button></a>
                <a href=""><button class="btn btn-secondary">Cancel</button></a>
            </div>
            <div class="d-sm-flex align-items-center pt-3" id="changepassword">
                <div> <b>Change Password</b>
                    <p>Want to change password?</p>
                </div>
                <div class="ml-auto"><a href="{{url('/changepassword')}}">Change</a></div>
            </div>
        </form>
    </div>
    <!--End Update Profile-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
@endsection

</html>