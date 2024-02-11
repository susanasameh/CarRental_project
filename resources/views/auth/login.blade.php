@extends('layouts.app')
@section('title')
Rent Car Admin | Login 
@endsection

@section('content')

      <div class="animate form login_form">
        <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <h1>Login Form</h1>
            <div>
               
                  <input type="text" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username" required="" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
   
                               
                        <div>
                        
                                <input type="password" class="form-control " name="password" required autocomplete="current-password" placeholder="Password" required="" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div>
                                <a class="btn btn-default submit" href="{{route('login')}}">Log in</a>
                                  <a class="reset_pass" href="#">Lost your password?</a>                            
                              </div> --}}
                              <div>
                                <button type="submit" class="btn btn-default btn-block">{{ __('Log in') }}</button>
                                    
                                
                            </div>
                              <div class="clearfix"></div>
                              <div class="separator">
                                <p class="change_link">New to site?
                                  <a href="{{route('register')}}" class="to_register"> Create Account </a>
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