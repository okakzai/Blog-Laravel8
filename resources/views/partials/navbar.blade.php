<div class="container">
  <header class="blog-header py-3">
    <div class="text-center">
      <a class="blog-header-logo text-dark" href="{{ url('/') }}">
        <img src="{{ url('img/logo.png') }}" class="img-fluid">
      </a>
  </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      @foreach ($categories as $category)
        @if ($category->id == 1)
          <?php  $textCategory = 'text-primary'; ?>
        @elseif ($category->id == 2)
          <?php  $textCategory = 'text-success'; ?>
        @elseif ($category->id == 3)
          <?php  $textCategory = 'text-danger'; ?>
        @endif    
        <a class="p-2 link-secondary {{ $menu === $category->name ? 'active '.$textCategory:'' }}" href="{{ url('/categories/'.$category->slug) }}">{{ $category->name }}</a>
      @endforeach
    </nav>
  </div>
</div>