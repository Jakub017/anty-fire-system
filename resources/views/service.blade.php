@extends('layouts.main')

@section('title', "$service->name - FPROTECT")

@section('content')
<div class="subpage">
    <div class="subpage__breadcrumbs">
        <img src="{{asset('img/tlo2.jpg')}}" alt="" class="subpage__breadcrumbs-image">
        <h1 class="subpage__breadcrumbs-title">{{ $service->name }}</h1>
        <div class="subpage__breadcrumbs-links">
            <a href="{{route('home')}}" class="subpage__breadcrumbs-link">Strona główna</a>
            <span class="subpage__breadcrumbs-separator">></span>
            <span class="subpage__breadcrumbs-text">{{ $service->name }}</span>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="subpage__path" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path d="M737.9,94.7L0,0v100h1000V0L737.9,94.7z" fill="#fff"></path>
        </svg>
    </div>

    <div class="service">
        {!! $service->content !!}
    </div>
</div>
@endsection
