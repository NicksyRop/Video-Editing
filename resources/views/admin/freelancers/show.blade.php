@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body text-center">
                <span class="avatar avatar-xxl mb-3">
                    @if ($user->avatar != null)
                        <img src="{{ asset($user->avatar)}}">
                    @else
                        <img src="{{ my_asset('assets/frontend/default/img/avatar-place.png') }}">
                    @endif
                    <span class="badge badge-dot badge-circle badge-success badge-status badge-md"></span>
                </span>
                <div class="rating rating-sm">
                    {{ renderStarRating(getAverageRating($user->id)) }}
                </div>
                <h1 class="h5 mb-1">{{ $user->name }}</h1>
                <h5 class="mb-3 fs-12 opacity-60">{{ '@' . $user->name }}</h5>

                <div class="mt-5 text-left">
                    <h6 class="separator mb-4 text-left"><span class="bg-white pr-3">{{ translate('Verification') }}</span></h6>
                    <p class="text-muted text-capitalize">
                        <span>{{ translate('Email Verification') }} :</span>
                        @if ($user->email_verified_at != null)
                            <span class="badge badge-sm float-right badge-circle badge-success"> <i class="las la-check"></i> </span>
                        @else
                            <span class="badge badge-sm float-right badge-circle badge-secondary"> <i class="las la-times"></i> </span>
                        @endif
                    </p>

                    @if ($user->verifications != null)
                        @foreach ($user->verifications as $key => $verification)
                            <p class="text-muted text-capitalize"><span>{{ str_replace('_', ' ', $verification->type) }} :</span>
                                @if ($verification->verified != 0)
                                    @if ($verification->type == 'identity_verification')
                                        <span class="badge badge-sm float-right badge-circle badge-success"> <i class="las la-check"></i> </span>
                                    @else
                                        <span class="badge badge-sm float-right badge-circle badge-success"> <i class="las la-check"></i> </span>
                                    @endif
                                @else
                                    @if ($verification->type == 'identity_verification')
                                        <span class="badge badge-sm float-right badge-circle badge-secondary"> <i class="las la-times"></i> </span>
                                    @else
                                        <span class="badge badge-sm float-right badge-circle badge-secondary"> <i class="las la-times"></i> </span>
                                    @endif
                                @endif
                            </p>
                        @endforeach
                    @endif
                </div>
                <div class="text-left mt-5">
                    <h6 class="separator mb-4 text-left"><span class="bg-white pr-3">{{ translate('Account Information') }}</span></h6>

                    <p class="text-muted">
                        <strong>{{ translate('Full Name') }} :</strong>
                        <span class="ml-2">{{ $user->name }}</span>
                    </p>

                    {{-- <p class="text-muted">
                        <strong>{{ translate('Mobile') }} :</strong>
                        <span class="ml-2">{{ $user->profile->phone }}</span>
                    </p> --}}
                    <p class="text-muted">
                        <strong>{{ translate('Email') }} :</strong>
                        <span class="ml-2">{{ $user->email }}</span>
                    </p>
                    <p class="text-muted">
                        <strong>{{ translate('Location') }} :</strong>
                        <span class="ml-2">

                            {{ $profile->country }}
                        </span>
                    </p>

                    <p class="text-muted">
                        <strong>{{ translate('Category') }} :</strong>
                        <span class="ml-2">
                            {{ App\Models\Category::where('id',$profile->category_id)->first()->name}}
                        </span>
                    </p>
                    <p class="text-muted">

                    <p class="text-muted"><strong>{{ translate('Balance') }} :</strong>
                        <span class="ml-2">
                            @if (App\Models\Wallet::where('user_id',$user->id)->first() == null)

                            <b>0 Dollars</b>

                            @else
                            {{ App\Models\Wallet::where('user_id',$user->id)->first()->total }}

                            @endif

                        </span>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">

        @if ($profile->bio != null)
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">{{ translate('Bio') }}</h6>
            </div>
            <div class="card-body">
                {{ $profile->bio }}
            </div>
        </div>
        @endif

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{ $user->name }} {{ translate('Account Information') }}</h5>
                </div>
                <div class="card-body">
                    <div class="text-left">

                        <p class="text-muted"><strong>{{ translate('Paypal Email') }} :</strong> <span class="ml-2">{{ $user->profile->paypal_email }}</span></p>

                    </div>
                </div>
            </div>
            <div class="card">

                <form action="{{ route('freelancers.destroy',$user->id)}}" method="POST">
                    @csrf
                    @method('DELETE')


                    <button class="btn btn-danger">Delete</button>

                </form>

            </div>



    </div>
</div>
@endsection
