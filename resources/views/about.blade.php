@extends('layouts.main')
@section('container')
<h1>Halaman About</h1>
<h2>{{ $name }}</h2>
<p>{{ $email }}</p>
<img src="img/{{ $img }}" alt="{{ $name }}" width="200px" class="img-thumbnail rounded-circle">
    
@endsection
