@extends('frontend.default.layouts.app')

@section('content')

<div class="py-4 py-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-xxl-4 col-xl-5 col-md-7 mx-auto">
                <div class="card">
                    <div class="card-body">

                        <div class="mb-5 text-center">
                            <h1 class="h3 text-primary mb-0">Welcome back</h1>
                            <p>Login to manage your account.</p>
                        </div>

                        <form class="" method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control " name="email" id="email" placeholder="Email address" required >
                                                            </div>

                            <div class="form-group">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" class="form-control " name="password" id="password" placeholder="********" required>
                                                            </div>

                            <div class="mb-3 text-right">
                                <a class="link-muted text-capitalize font-weight-normal" href=" {{ route('password.reset', 'token' ) }}">Forgot Password?</a>
                            </div>


                            <div class="mb-5">
                                <button type="submit" class="btn btn-block btn-primary">Login to your Account</button>
                            </div>

                                                        <div class="mb-5">
                                <div class="separator mb-3">
                                    <span class="bg-white px-3">Or Login With</span>
                                </div>

                                <ul class="list-inline social colored text-center">
                                                                            <li class="list-inline-item">
                                            <a href="https://ediyt.com/social-login/redirect/facebook" class="facebook" title="Facebook"><i class="lab la-facebook-f"></i></a>
                                        </li>
                                                                                                                                                                                </ul>
                            </div>

                            <div class="text-center">
                                <p class="text-muted mb-0">Don&#039;t have an account?</p>
                                <a href="{{ route('register') }} ">Create an account</a>
                            </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
