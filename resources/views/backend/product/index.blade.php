@extends('layouts.backend.app')

@section('header')
    All Products
@endsection

@section('title')
    All Products
@endsection

@section('content')
    @livewire('backend.products-table');
@endsection
