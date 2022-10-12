@extends('layouts.app')

@section('metaTitle', 'Miei bellissimi treni strani')

@section('header')
    @include('partials.headerTrains')
@endsection

@section('content')
    @include('partials.contentTrains')
@endsection

@section('footer')
    @include('partials.footerTrains')
@endsection