@extends('frontend.default.layouts.app')


@section('content')
<div class="py-4 py-lg-5">
	<div class="container">
		<div class="row">
			<div class="col-xxl-4 col-xl-5 col-md-7 mx-auto">
				<div class="card">
					<div class="card-body">

						<div class="mb-5 text-center">
							<h1 class="h3 text-primary mb-0">Join with us</h1>
							<p>Fill out the form to get started.</p>
						</div>
						<form class="" method="POST" action=" {{ route('register') }} " enctype="multipart/form-data" >
							@csrf

							<div class="form-group">
								<label class="form-label" for="name">Username</label>
								<input type="text" class="form-control " name="name" id="name" placeholder="Username" value="{{ old('name') }}">
								@error('name') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror
                        	</div>

							<div class="form-group">
								<label class="form-label" for="email">Email address</label>
								<input type="email" class="form-control " name="email" id="signinSrEmail" placeholder="Email address" value=" {{ old('email') }}" >

								@error('email') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror
                        	</div>



							<div class="form-group">
								<label for="avatar">Avatar</label>
								<input type="file" name="avatar" class="form-control"  value=" {{ old('avatar') }} " >
								@error('avatar') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror
							</div>

							<div class="form-group">
								<label class="form-label" for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password-confirm" placeholder="********" >

								@error('password') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror

							</div>

							<div class="form-group">
								<label class="form-label" for="password-confirm">Confirm password</label>
								<input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="********" >
								@error('password_confirmation') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror

							</div>

							<div class="form-group mb-4">
								<div class="aiz-radio-inline">
									<label class="aiz-radio">
										<input type="radio" name="user_types" value="Freelancer" checked="checked"> As A Freelancer
										<span class="aiz-rounded-check"></span>
									</label>
									<label class="aiz-radio">
										<input type="radio" name="user_types" value="Client"> As A Client
										<span class="aiz-rounded-check"></span>
									</label>
								</div>
							</div>



							<div class="form-group">
								<div class="aiz-checkbox-list">
									<label class="aiz-checkbox">
										<input type="checkbox" name="condition" >
											<span class="fs-13">By signing up you agree to our terms and conditions.</span>
										<span class="aiz-square-check"></span>
									</label>
									@error('condition') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror
								</div>
							</div>


							<div class="mb-5">
                                <button type="submit" class="btn btn-block btn-primary">Join With Us</button>
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
                                <p class="text-muted mb-0">Already have an account?</p>
                                <a href="https://ediyt.com/login">Login to your account</a>
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
