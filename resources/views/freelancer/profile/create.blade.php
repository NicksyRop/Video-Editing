@extends('frontend.default.layouts.app')
@section('content')
<div class="container">
    <div class="col-md-8 ml-5">

<h3 class="py-5 text-align:center">Please complete your profile</h3>
        <form action="{{ route('profile.store') }}" method="post"  enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="category">Specialization</label>

                <select class="form-control" name="category" value=" {{ old('category') }} ">
                    @foreach ($categories as $category)
                        <option value="{{$category->id }}"> {{ $category->name }}</option>

                    @endforeach

                </select>
                @error('category') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror
            </div>



            <div class="form-group">
                <label for="email">Paypal address</label>
                <input type="email" name="paypal_email" class="form-control" id="" value=" {{ old('paypal_email') }} ">
                @error('paypal_email') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror
            </div>
            <input type="hidden" name="completed" id="" value="1">

            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea name="bio" id="" cols="30" rows="4" class="form-control"> {{ old('bio') }} </textarea>
                @error('bio') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="cv">CV</label>
                <input type="file" name="cv" id="cv" class="form-control" value=" {{ old('cv') }} ">
                @error('cv') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="kra">Tax Documents</label>
                <input type="file" class="form-control" name="kra" value=" {{ old('kra') }} ">
                @error('kra') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="document">Document</label>
                <select class="custom-select" name="doctype"  aria-label="Default select example">
                    <option value="Identification Card" selected>Identification Card</option>
                    <option value="Driving license">Driving License</option>

                  </select>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">

                        <label for="front">Front</label>
                        <input type="file" name="front_image" class="form-control" id="">
                        @error('front_image') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="back">Back</label>
                        <input type="file" name="back_image" class="form-control" id="">
                        @error('back_image') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror

                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="country">County</label>
                <select class="custom-select" id="country_id" name="country">
                    <option value="" selected>Choose country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('country') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror


            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

</div>

</div>

@endsection



