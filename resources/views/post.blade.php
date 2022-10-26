
@extends('layout.main')


@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
      <p>By. Fresabayu A</p>
        {{ $post->body }}
    </article>

    <a href="/blog">Back to Blog</a>
@endsection