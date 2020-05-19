@extends('layouts.master_template')
@section('title') Singharat @endsection
@section('content')
    @include('pages.home.about')
    @include('pages.home.resume')
    @include('pages.home.certificate')
    @include('pages.home.skills')
@endsection