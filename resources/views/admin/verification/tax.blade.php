

@extends('admin.layouts.app')

@section('content')

<div class="container px-10 py-3">

    <object data="{{ asset($user->profile->kra)}}" width="900" height="600" class="ml-5">
        <!--<embed src="{{ asset($user->profile->kra)}}" width="600" height="400"> </embed>-->
        <!--Error: Embedded data could not be displayed.-->
            </object>

        <!--    <iframe src="{{ asset($user->profile->kra)}}" frameborder="0" frameborder="0"  height="500px" width="1000px" allowfullscreen></iframe>-->
        <!--</div>-->


</div>





@endsection

