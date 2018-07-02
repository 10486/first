@extends('layouts.layout')
@section('body')
<body class="no-siderbar">
  @include('header')


  		<!-- Footer -->
  		<div id="featured">
  			<div class="container">
          @foreach($posts as $k => $post)
          @if($k % 3 == 0)
  				<div class="row">
          @endif
  					<div class="4u">
  						<h2>{{$post->name}}</h2>
  						<span class="image full"><img src="{{$post->img}}" alt="" /></span>
  						<p><a href="{{route('post',$post->id)}}" class="button">Открыть Пост</a></p>
  					</div>
  				@if(($k+1) % 3 == 0 || $loop->last)
  				</div>
          @endif
          @endforeach
  			</div>
        {!!$posts->render()!!}
  		</div>





  @include('content.footer')
  @include('content.copy')
  <script src="{{asset('/js/gallery.js')}}" charset="utf-8"></script>
</body>


@endsection
