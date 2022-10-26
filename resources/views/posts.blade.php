@extends('layouts.main')
@section('container')
    <h1 class=mb-5>{{ $title }}</h1>

    @foreach ( $posts as $post)

            <article class="mb-5 border-bottom pb-5">
                <h2><a href="/posts/{{ $post->slug }} " class="text-decoration-none">{{ $post->title }}</a></h2>

                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

@section('container')
@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-4">
    <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post-> title}}</a></h2>
    {!! $post->body !!}    

    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
            {{ $post->category->name}}</a></p>
    <h5> {{ $post["autor"] }}</h5>
    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}">Read more..</a>
</article>
@endforeach
@endsection

                <p>{{ $post->excerpt }}</p>

                <a href="/posts/{{ $post->slug }}" class="d-block mt-5">Read more..</a>
            </article>
        @endforeach

    @endsection