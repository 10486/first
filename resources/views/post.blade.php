@extends('layouts.layout')
@section('body')
<body class="no-siderbar">
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
    </div>
  </div>
@include('content.footer')
@include('content.copy')
</body>

@endsection
