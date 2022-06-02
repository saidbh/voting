@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('users.partials._header')
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                1
            </div>
            <div class="col-lg-6 overflow-auto">
                @include('users.partials._news_feed')
            </div>
            <div class="col-lg-3">
                3
            </div>
        </div>
    </div>
{{--@include('users.partials._left_side')
    @include('users.partials._right_side') --}}
@endsection