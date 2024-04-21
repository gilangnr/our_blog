@extends('layouts.main')

@section('container')
    {{-- <h1 class="mb-3 text-center">Single Post</h1> --}}

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By: <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                @if ($post->image)
                <div style="max-height: 450px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @else
                <div style="max-height: 400px; overflow:hidden">
                    <img src="/img/no-image.png" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/blog" class="btn btn-outline-dark btn-lg">Back</a>
            </div>
        </div>
    </div>
        
    
    
    
@endsection