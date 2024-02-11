@extends('layouts.app')

@section('title')
Rent Car Admin | Register
@endsection

@section('content')
    <!-- <div id="register" class="animate form registration_form"> -->
    <div id="register" class="animate form">
        <section class="login_content">
        {{-- <form method="POST" action="{{ route('register') }}" id="registerForm"> --}}
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Create Account</h1>
            <div>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name" required="" />

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <input type="text" class="form-control" name="userName" value="{{ old('userName') }}" placeholder="User Name" required="" />

                    @error('userName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                     <div>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email" required="" />

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required="" />

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                <input type="hidden" name="active" value="0">

            
            {{-- <div>
                <a class="btn btn-default submit" href="{{ route('register') }}">Submit</a>
            </div> --}}
            <div>
                <button type="submit" class="btn btn-default btn-sm btn-block">
                    {{ __('Submit') }}
                </button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">Already a member ?
                <a href="{{ route('login') }}" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                <h1><i class="fa fa-car"></i></i> Rent Car Admin</h1>
                <p>©2016 All Rights Reserved. Rent Car Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
            </div>
        </form>
        </section>
    </div>
@endsection
      