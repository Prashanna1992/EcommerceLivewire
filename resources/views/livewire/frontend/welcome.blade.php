@extends('layouts.frontend.app')

@section('title')
    {{$title}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-md-10 mx-auto my-3">
                @include('frontend.includes.productcard',['products'=>$products, 'type'=>"Trending"])
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-10 mx-auto my-3">
                @include('frontend.includes.productcard',['products'=>$bestSellers, 'type'=>"Best Sellers"])
            </div>
        </div>
    </div>
@endsection
