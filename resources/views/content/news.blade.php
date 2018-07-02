<!-- Sidebar -->
<div id="sidebar" class="4u">
  <section>
    <header>
      <h2>Последние Новости</h2>
    </header>
    <ul class="style">
      @foreach($news as $new)
      <li>
        <p class="posted">{{$new->updated_at}}</p>
        <img style="max-width:50%;"src="{{$new->img}}" alt="" />
        <h3 class="text">{{$new->name}}</h3>
        <p class='text'>{{$new->head}}</p>
      </li>
      @endforeach
    </ul>
  </section>
</div>
