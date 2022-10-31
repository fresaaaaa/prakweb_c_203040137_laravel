
@extends('layout.main')


@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
        {{ $post->body }}
    </article>

    <a href="/blog" class="text-decoration-none d-block mt-3">Back to Blog</a>
@endsection