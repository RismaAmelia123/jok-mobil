@extends('layouts.app')

@section('title','Home')

@section('content')

@include('partials.hero')
@include('partials.about')
@include('partials.services')
@include('partials.gallery')
@include('partials.testimonial')
@include('partials.faq')
@include('partials.contact')
@include('partials.footer')

@endsection