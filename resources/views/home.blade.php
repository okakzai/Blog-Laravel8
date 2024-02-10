@extends('layouts.main')

@section('container')
<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic">
            {{ $featured_home->title }}
          </h1>
          <p class="lead my-3">
            {{ $featured_home->excerpt }}
          </p>
          <p class="lead mb-0">
            <a href="{{ url('/posts/'.$featured_home->slug) }}" class="text-white fw-bold">Selengkapnya...</a>
          </p>
        </div>
    </div>

    <div class="row mb-2">
        @foreach ($posts as $post)
            @if ($post->category->id == 1)
                <?php  $textCategory = 'text-primary'; ?>
            @elseif ($post->category->id == 2)
                <?php  $textCategory = 'text-success'; ?>
            @elseif ($post->category->id == 3)
                <?php  $textCategory = 'text-danger'; ?>
            @endif
        <div class="col-md-6">
          <div
            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
          >
            <div class="col p-4 d-flex flex-column position-static">
              <a href="{{ url('/categories/'.$post->category->slug) }}"><strong class="d-inline-block mb-2 {{ $textCategory }}">{{ $post->category->name }}</strong></a>
              <h3 class="mb-0">{{ $post->title }}</h3>
              <div class="mb-1 text-muted">
                Oleh <a href="{{ url('/authors/'.$post->author->username) }}">{{ $post->author->name }}</a>
              </div>
              <p class="card-text mb-auto">{{ $post->excerpt }}</p>
              <a href="{{ url('/posts/'.$post->slug) }}">Selengkapnya</a>
            </div>
            
          </div>
        </div>
        @endforeach    
    </div>
</main>
@endsection       
    
