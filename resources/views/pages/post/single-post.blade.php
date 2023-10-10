@extends('layout.app')

@section('title')
    Post
@endsection



@section('content')

    {{-- Header --}}
    <x-header.default-header/> 

    {{--  Post --}}
    <section class="single_post">
        <div class="container">
            <div class="single_post_content">
                <a href="#" class="single_post_tag">Technology</a>
                <h3 class="single_post_title">The Impact of Technology on the Workplace: How Technology is Changing</h3>
                <div class="d-flex align-items-center gap-4">
                    <a href="#" class="d-flex align-items-center gap-3">
                        <div class="author-img">
                            <img src="{{asset('img/post/author/author-1.jpg')}}" alt="Author">
                        </div>
                        <div class="info">
                            <p>Jason Francisco</p>
                        </div>
                    </a>
                    <p>August 20, 2022</p>
                </div>
                <div class="single_post_thumbnail">
                    <img src="{{asset('img/post/thumbnail/thumbnail-10.png')}}" alt="Thumbnail">
                </div>
                <ul class="single_post_react">
                    <li>
                        <a href="#"><i class="fa-regular fa-heart"></i>Like</a>
                    </li>
                    <li>
                        <a href="#comment"><i class="fa-regular fa-comment"></i>Comment</a>
                    </li>
                </ul>
                <p class="single_post_desc mb-3">Traveling is an enriching experience that opens up new horizons, exposes us to different cultures, and creates memories that last a lifetime. However, traveling can also be stressful and overwhelming, especially if you don't plan and prepare adequately. In this blog article, we'll explore tips and tricks for a memorable journey and how to make the most of your travels.Packing can be a daunting task, but with some careful planning and smart choices, you can pack light and efficiently. Start by making a packing list and sticking to it, focusing on versatile and comfortable clothing that can be mixed and matched. Invest in quality luggage and packing organizers to maximize space and minimize wrinkles.</p>
                <p class="single_post_desc mb-3">Traveling is an enriching experience that opens up new horizons, exposes us to different cultures, and creates memories that last a lifetime. However, traveling can also be stressful and overwhelming, especially if you don't plan and prepare adequately. In this blog article, we'll explore tips and tricks.</p>
                <p class="single_post_desc mb-3">Traveling is an enriching experience that opens up new horizons, exposes us to different cultures, and creates memories that last aexperience that opens up new horizons, exposes us to different cultures, and creates memories that last a lifetime. However, traveling can also be stressful and overwhelming, especially if you don't plan and prepare adequately. In this blog article, we'll explore.</p>
                <ul class="post_tags">
                    <li>
                        <a href="#">Technology</a>
                    </li>
                    <li>
                        <a href="#">Sports</a>
                    </li>
                    <li>
                        <a href="#">Web Development</a>
                    </li>
                    <li>
                        <a href="#">Web Design</a>
                    </li>
                </ul>
                <div class="py-5 d-flex flex-column gap-4" id="comment">
                    <h4>Comments (2)</h4>
                    <div class="post_comment">
                        <div class="comment_author">
                            <img src="{{asset('img/post/author/author-1.jpg')}}" alt="Author">
                        </div>
                        <div class="comment_text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, pariatur!</p>
                            <div class="d-flex align-items-center gap-4 mt-3">
                                <a href="#">August 20, 2022</a>
                                <a class="reply" href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="post_comment">
                        <div class="comment_author">
                            <img src="{{asset('img/post/author/author-2.jpg')}}" alt="Author">
                        </div>
                        <div class="comment_text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, pariatur!</p>
                            <div class="d-flex align-items-center gap-4 mt-3">
                                <a href="#">August 20, 2022</a>
                                <a class="reply" href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment_form">
                    <textarea name="post_comment" id="post_comment" placeholder="Write a comment"></textarea>
                    <button class="mt-4" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Footer --}}
    <x-footer/>

@endsection