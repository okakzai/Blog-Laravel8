@extends('layouts.main')

@section('container')
    <div class="row g-5">
        <div class="col-md-10">
            <article class="blog-post">
                <h2 class="blog-post-title">{{ $post->title }}</h2>
                <p class="blog-post-meta">
                    Oleh <a href="{{ url('/authors/'.$post->author->username) }}">{{ $post->author->name }}</a> di <a href="{{ url('/categories/'.$post->category->slug) }}">{{ $post->category->name }}</a>
                </p>    
                {!! $post->body !!}
            </article>
        </div>
        <div class="col-md-2">
            <div class="text-center d-none d-sm-block">
                <a href="http://projects.id/sfvfjf">
                    <img src="{{ url('img/banner/banner skyscraper (160x600)-1.png') }}" class="img-fluid">
                </a>
            </div>
            <div class="text-center d-block d-sm-none">
                <a href="http://projects.id/sfvfjf">
                    <img src="{{ url('img/banner/banner square (336x280)-1.png') }}" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
@endsection