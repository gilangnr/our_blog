
@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post Category</h1>
    <div class="container">
      <div class="row">
        @foreach ($categories as $category)
          <div class="col-md-4">
            <a href="/blog?category={{ $category->slug }}">
              <div class="card text-bg-dark">
                <img src="..." class="card-img" width="500px" height="200px" alt="...">
                <div class="card-img-overlay d-flex align-items-center">
                  <h5 class="card-title text-center flex-fill fs-3">{{ $category->name }}</h5>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>

@endsection
