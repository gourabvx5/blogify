@extends('layout.app')

@section('title')
    Edit Post
@endsection



@section('content')

    {{-- Header --}}
    <x-header.Author-header/> 

    {{-- Edit Post Form --}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="add_form">
                        <div class="mb-4">
                            <label for="post_title">Post Title</label>
                            <input type="text" id="post_title" required>
                        </div>
                        <div>
                            <label for="post_desc">Post Description</label>
                            <textarea id="post_desc" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="mb-4">
                        <h4>Post Thumbnail</h4>
                        <label class="picture" for="picture__input" tabIndex="0">
                            <span class="picture__image"></span>
                        </label>
                        
                        <input type="file" name="picture__input" id="picture__input">
                    </div>
                    <div class="add-category">
                        <h4>Tags</h4>
                        <div class="_box">
                            <label for="tagList">Add tag (Press ENTER to Add new Tag)</label>
                            <input type="text" id="newTag" />
                            <ul id="tagList">
                                <!-- All TagList Here! -->
                            </ul>  
                        </div>
                    </div>
                </div>
                <div>
                    <button class="post_publish_btn" type="submit">Update</button>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Footer --}}
    <x-footer/>

@endsection