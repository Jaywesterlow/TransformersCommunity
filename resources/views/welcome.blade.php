@extends('layouts.layout2')


@section('topic')
  @foreach ($categories as $cat)
    <li><a class="text-decoration-none text-white lh-lg" href="/categories/{{ $cat->slug }}">{{ $cat->name }}</a></li>
  @endforeach
@endsection
@section('post')
  @foreach ($posts as $post)
    <article class="blog-post">
      <h2 class="blog-post-title"><a href="/posts/{{ $post->slug }}">{!! $post->title !!}</a></h2>
      <span class="DecsPost">{{ $post->created_at->format('d-m-Y') }}</span>
      <p class="blog-post-meta">By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in<a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
      <p>{{ $post->excerpt }}</p>
    </article>
  @endforeach
@endsection