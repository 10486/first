<!-- Main -->
<div id="main">
  <div class="container">
    <div class="row">

      <!-- Content -->
      <div id="content" class="8u skel-cell-important">
        <section>
          <header>
            <h2>{{$home->name}}</h2>
            <span class="byline">{{$home->head}}</span>
          </header>
          <a href="#" class="image full"><img src="{{$home->img}}" alt="" /></a>
          {!! $home->text!!}
        </section>
      </div>

      <!-- Sidebar -->
      @if(isset($news))
        @include('content.news')
      @endif
    </div>
  </div>
</div>

<!-- Footer -->
<div id="featured">
  <div class="container">
    <div class="row">
      @forelse($posts as $post)
      <div class="4u">
        <h2>{{$post->name}}</h2>
        <a href="#" class="image full"><img src="{{$post->img}}" alt="" /></a>
        <p>{{$post->text}}</p>
        <p><a href="{{route('post',[$post->id])}}" class="button">Читать Далее</a></p>
      </div>
      @empty
      Постов не найдено
      @endforelse
      </div>
    </div>
  </div>
</div>

@include('content.footer')

@include('content.copy')
