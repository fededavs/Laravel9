@extends('layouts.app')

@section('title', 'blog')


@section('content')
    <h1>Blog</h1>

    <a href=" {{ route('post.create') }} ">Create new post</a>

    @foreach ($posts as $post)
        <h2>
            <a href=" {{ route('post.show', $post) }} ">
                {{ $post->title }}
            </a>
        </h2>
    @endforeach
@endsection
