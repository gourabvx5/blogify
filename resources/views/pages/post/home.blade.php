@extends('layout.app')

@section('title')
    Create a unique and beautiful blog easily
@endsection

{{-- Header --}}
<x-header/>

@section('content')

    {{-- Hero --}}
    <x-post.main-post/>

    {{-- Latest Post --}}
    <x-post.latest-post/>
    
    {{-- Footer --}}
    <x-footer/>
    
@endsection

