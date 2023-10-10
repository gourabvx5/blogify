@extends('layout.app')

@section('title')
    All Post
@endsection



@section('content')

    {{-- Header --}}
    <x-header.default-header/> 

    <section>
        <div class="container">
            <h1 class="page_title text-center text-white wow fadeInUp">All Posts</h1>
        </div>
    </section>
    {{--  All  Post --}}
    <x-post.latest-post/>
    
    {{-- Footer --}}
    <x-footer/>

@endsection