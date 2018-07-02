@extends('layouts.layout')
@section('body')
<body class="no-sidebar">
  @include('header')

    <div id="main">
      <div class="container">
        <div class="row">

          <!-- Content -->
          <div id="content" class="12u skel-cell-important">
            <section>
              <header>
                <h2 style="line-height:1em">{{$post->name}}</h2>
                <span class="byline">{{$post->head}}</span>
              </header>
              <a href="#" class="image full"><img src='{{$post->img}}' alt="" /></a>
              {{$post->text}}
            </section>
          </div>
        </div>
        <div class="row">
          <form action="{{route('delete',$post->id)}}" method="post">
            @csrf
            <button type="submit" name='delete'>Удалить</button>
          </form>
        </div>
      </div>
    </div>




  @include('content.footer')

  @include('content.copy')
</body>
@endsection
