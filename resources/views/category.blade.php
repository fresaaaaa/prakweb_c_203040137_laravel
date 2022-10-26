
{{-- @dd($posts) --}}

@extends('layout.main')


@section('container')
    
@foreach ($posts as $post)
<article class="mb-5">
    <h1>Post Category : {{ $category }}</h1>
    <h2>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
    <h5>By. Fresabayu <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    {!! $post->body !!}
</article>    
@endforeach

@endsection

