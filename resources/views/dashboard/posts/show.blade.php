@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"> <span data-feather="arrow-left"></span> Back to all my post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Hapus data?')"><span data-feather="x-circle" class="custom-feather-icon"></span> Delete</button>
            </form>
            
            @if ($post->image)
            <div style="max-height: 450px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>
            @else
            <div style="max-height: 350px; overflow:hidden">
                <img src="/img/no-image.png" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>
            @endif
           
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection