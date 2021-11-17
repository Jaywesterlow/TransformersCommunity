@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <article class="blog-post">
            <h2 class="blog-post-title">
                <a href="/posts/{{ $post->slug }}">
                    {!! $post->title !!}
                </a>
            </h2>

            <p class="blog-post-meta">
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in<a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
            </p>
            
            <p>
                {{ $post->excerpt }}
            </p>
        </article>
    @endforeach
@endsection 