
{{-- @dd($posts) --}}

@extends('layout.main')


@section('container')
    
@foreach ($posts as $post)
<article class="mb-5">
    <h1>Post Category : {{ $category }}</h1>
    <h2>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h2>
    <h5>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
    {!! $post->body !!}
</article>    
@endforeach

@endsection

