@extends('layouts.layout')
@section('body')
<body class="no-sidebar">

@include('header')

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						@forelse($main as $post)
						<div class="post">
							<section class="post-content">
								<header>
									<h2>{{$post->name}}</h2>
								</header>
								<a href="{{route("post",$post->id)}}" class="image full"><img src="{{$post->img}}" alt="" /></a>
								<header>
									<span class="byline">{{$post->head}}</span>
								</header>
							</section>
							@if(Auth::check())
							<div style="margin-left:auto;">
								<a style="display:inline-block;" class="btn more" href='{{route("edit",$post->id)}}'>Редактировать</a>
								<a style="display:inline-block;"href="{{route('delete',$post->id)}}" class="btn more">Удалить</a>
							</div>

							@else
							<a class="btn more" href='{{route("post",$post->id)}}'>Перейти к посту</a>
							@endif
						</div>
						@empty
						Постов не надено
						@endforelse

						{!!isset($main)?$main->render():''!!}
					</div>

					@if(isset($news))
						@include('content.news')
					@endif

				</div>
			</div>
		</div>

		@if(isset($posts))
		<!-- Footer -->
		<div id="featured">
		  <div class="container">
		    <div class="row">
		      @forelse($posts as $post)
					@break($loop->iteration==4)
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
			@endif
		</div>


	@include('content.footer')

	@include('content.copy')

<script type="text/javascript">
  addStyle('posts.css');
	addStyle('pagination.css');
</script>
</body>
@endsection
