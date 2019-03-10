@extends('layouts.app')
@section('style')
    <style>
        body{
            background: url("images/cover photo.jpg") fixed center center;
            background-size: cover;
        }

    </style>
@endsection
@section('content')
<div class="container">
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="d-flex align-items-center justify-content-center"  style="height: 60vh">
        <div class="mt-5 pt-5 pl-5 pr-5 pb-5 col-lg-8 col-md-10 col-sm-12 text-center text-justify" style="background-color: #e9eae0ee">
            <p style="color: #bc3204"><strong>Most of the challenges will be inside a function, and you will have to fill the piece of code after the return keyword.
                    return instructs the function that this is the result of that function, thus it is mandatory in most cases.
                    Here's a short video that explains how the interface works and how to approach solving challenges.
                    Feel free to skip this video as you can watch it on the next page if you feel that some things don't make sense.</strong></p>
            <button class="btn btn-lg btn-danger" style="border-radius: 0"><a class="text-white" style="text-decoration: none" href="#">Hire Us</a></button>


        </div>

    </div>


</div>
@endsection
