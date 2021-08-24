@extends('admin.layouts.app')


@section('content')

<div class="container p-8">
    <div class="card p-3">

        <form action="{{ route('tests.store')}} " method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">

                <label for="title">Title</label>
                <input type="text" name="title" id="" class="form-control">
            </div>

            <div class="form-group">

                <label for="upload Files">Upload Files</label>
                <input type="file" name="file" id="" class="form-control">
                @error('file') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror

            </div>

            <div class="form-group">
                <label for="categorr">Category</label>
                <select name="category" id="" class="form-control">

                    @foreach ($categories as $category)
                        <option value="{{$category->id }}"> {{$category->name }}</option>
                    @endforeach
                    <option value=""></option>
                </select>
                @error('category') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror

            </div>
            <div class="form-group">
                <label for="instructions">Instructions</label>
                <input id="x" type="hidden" name="instructions" value="{{ old('instructions') }}">
                <trix-editor input="x"> </trix-editor>
                @error('instructions') <span class="error"  style="color: #ff8000">{{ $message }}</span> @enderror

            </div>

            <button type="submit" class="btn btn-sm btn-primary">Create</button>

        </form>



    </div>


</div>




@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" defer>

</script>

@endsection

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">

@endsection


@section('trix-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">

@endsection

@section('trix-js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.js"></script>

@endsection

