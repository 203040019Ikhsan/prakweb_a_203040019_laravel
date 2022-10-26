@extends('layouts.main')
@section('container')

<h1 class="mb-5">{{ $post->title }}</h1>

<p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name}}</a></p>
<p>By. Linggih Kusumah Dilagga in <a href="/categories/{{ $post->category->slug }}"{{ $post->category->name }}></a></p>

{!! $post->body !!}    

{!! $post->body !!}
<a href="/blog">Back to Posts</a>


<a href="/blog" class="d-block mt-3">Back to post</a>

@endsection
@endsection