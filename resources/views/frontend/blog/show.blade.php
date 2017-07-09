@extends('layouts.frontend')

@section('body_class', 'page-post')

@section('highlight')
    <div class="cover">
        <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" class="img-fluid">
    </div>
    <div class="post-title">
        <h1 class="pb-3 pt-2">{{ $post->title }}</h1>
        @include('frontend.blog.partials.publication-infos')
    </div>
@endsection

@section('content')
    <div class="post-body">
        {!! clean($post->body) !!}
    </div>

    <nav class="nav">
        <span class="navbar-brand">@lang('labels.frontend.blog.tags')</span>

        @foreach($post->tags as $tag)
        <a class="nav-link" href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a>
        @endforeach
    </nav>
@endsection
