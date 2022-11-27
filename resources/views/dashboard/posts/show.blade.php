@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-y">
    <div class="col-lg-8">
        <h1 class="mb-3">{{ $post->title }}</h1>

        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my all post</a>
        <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
        <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">

        <article class="my-3 fs-5">
            {!! $post->body !!}
          </article>

            <a href="/blog" class="text-decoration-none d-block mt-3">Back to Blog</a>
        </div>
    </div>
</div>

@endsection
