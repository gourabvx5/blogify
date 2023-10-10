@extends('layout.app')

@section('title')
    Profile
@endsection

@section('content')

    {{-- Header --}}
    <x-header.author-header/>

    {{-- Profile --}}
    <x-profile.profile/>

    {{-- Posts --}}
    <x-profile.posts/>

    {{-- Footer --}}
    <x-footer/>
@endsection