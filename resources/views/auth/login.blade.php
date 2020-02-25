
@extends('layouts.admin_auth')
@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                <div class="card my-5">
                    <div class="card-body p-5 text-center">
                        <div class="h3 font-weight-light mb-3">Sign In</div>
                        <a class="btn sb-btn-icon sb-btn-facebook mx-1" href="javascript:void(0);"><i class="fab fa-facebook-f fa-fw fa-sm"></i></a><a class="btn sb-btn-icon sb-btn-github mx-1" href="javascript:void(0);"><i class="fab fa-github fa-fw fa-sm"></i></a><a class="btn sb-btn-icon sb-btn-google mx-1" href="javascript:void(0);"><i class="fab fa-google fa-fw fa-sm"></i></a><a class="btn sb-btn-icon sb-btn-twitter mx-1" href="javascript:void(0);"><i class="fab fa-twitter fa-fw fa-sm"></i></a>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body p-5">
                        <form  method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label  class="text-gray-600 small" for="emailExample">Email address</label>
                                <input name="email" class="form-control sb-form-control-solid py-4 @error('email') is-invalid @enderror" type="email" placeholder aria-label="Email Address" aria-describedby="emailExample" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-gray-600 small" for="passwordExample">Password</label>
                                <input name="password" class="form-control sb-form-control-solid py-4 @error('password') is-invalid @enderror" type="password" placeholder aria-label="Password" aria-describedby="passwordExample" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <a class="small" href="{{ route('password.request') }}">Forgot your password?</a>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mb-0">
                            <div class="custom-control sb-custom-control-solid custom-checkbox"><input class="custom-control-input small" name="remember"  id="customCheck1"  {{ old('customCheck1') ? 'checked' : '' }} type="checkbox" /><label class="custom-control-label" for="customCheck1">Remember password</label></div>

                              
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body px-5 py-4">
                        <div class="small text-center">New user? <a href="register-social.html">Create an account!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
