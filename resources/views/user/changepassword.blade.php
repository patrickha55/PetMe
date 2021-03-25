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
    <title>Change Password</title>
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

        .star {
            color: red;
        }
        
        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
            color: black;
        }
        
        .account-settings .user-profile .user-avatar {
            margin: 3.5rem 0 1rem 0;
        }
        
        .account-settings .user-profile .user-avatar img {
            width: 120px;
            height: 120px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
        }
        
        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
            color: black;
            font-size: 2rem;
            font-weight: 600;
        }
        
        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 1rem;
            font-weight: 400;
            color: black;
        }
        
        .form-control {
            border: 1px solid #cfd1d8;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-size: .825rem;
            background: #ffffff;
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
        
        .btn-primary {
            background-color: #0779e4
        }
        
        a {
            text-decoration: none;
        }
    </style>
</head>
@extends('layouts.client.app')
@section('content')
<body>
    <!-- form card change password -->
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                </div>
                                <h5 class="user-name">Yuki Hayashi</h5>
                                <h6 class="user-email">yuki@Maxwell.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row gutters">

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="">Current Password</label><span class="star">*</span>
                                    <input type="password" class="form-control" id="" placeholder="Enter current password" name="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12"></div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="">New Password</label><span class="star">*</span>
                                    <input type="password" class="form-control" id="" placeholder="Enter new password" name="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12"></div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="">Confirm Password</label><span class="star">*</span>
                                    <input type="password" class="form-control" id="" placeholder="Enter confirm password">
                                </div>
                            </div>
                        </div>
                        <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-left">
                                    <button type="button" id="" name="submit" class="btn btn-primary">Update</button>
                                    <button type="button" id="" name="submit" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /form card change password -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
@endsection
</html>