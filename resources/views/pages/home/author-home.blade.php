@extends('layout.app')

@section('title')
    Create a unique and beautiful blog easily
@endsection



@section('content')

    {{-- Header --}}
<<<<<<<< HEAD:resources/views/pages/post/home/home.blade.php
    {{-- <x-header.header/>  --}}
    <x-header.author-header/> 
========
    <x-header.author-header/>
>>>>>>>> b5e397dce7f0366115af9e7d993d0cdecf14525c:resources/views/pages/home/author-home.blade.php

    {{-- Hero --}}
    <x-post.main-post/>

    {{-- Latest Post --}}
    <x-post.latest-post/>

    <section>
        <div class="container">
            <div class="mt-4 text-center">
                <a class="all-post-btn" href="{{route('all.post')}}">View All Post</a>
            </div>
        </div>
    </section>
    
    {{-- Footer --}}
    <x-footer/>

@endsection

