@extends('layouts.frontend.app')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 mx-auto my-3">
                @include('frontend.includes.productcard')
            </div>
        </div>
    </div>
@endsection
