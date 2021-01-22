@extends('front.layouts.master')
@section('title','Kullanıcı Girişi')
@section('content')
    <div class="banner">
        <div class="container">
            <!-- form content / login area -->
            <div class="login-area">
                <!-- heading -->
                <h3>Sign In, To Your Account</h3>
                <form role="form" id="login-form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputUser1" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="checkbox form-group">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                </form>
            </div>
        </div>
    </div>

@endsection
