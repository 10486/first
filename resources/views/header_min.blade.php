<nav id="nav">
  <ul>
    @if(!isset($admin))
    @foreach($pages as $page)
    <li class="{{Request::url() == route($page->routeName)?'active':''}}"><a href="{{route($page->routeName)}}">{{$page->name}}</a></li>
    @endforeach
    @else
      @foreach($admin as $page)
      <li class="{{Request::url() == route($page->routeName)?'active':''}}"><a href="{{route($page->routeName)}}">{{$page->name}}</a></li>
      @endforeach
    @endif
    <li>
      <form action="{{route('search')}}" class="search">
        <label>
          <i class="fa fa-search" aria-hidden="true"></i>
          <input type="search" name='keywords' placeholder="Поиск"></label>
      </form>
    </li>
  </ul>
  <script src="{{asset('/js/jquery.sticky.js')}}" charset="utf-8"></script>
  <script>
    $(function(){
        $("#nav").sticky({topSpacing:0});
    });
</script>
</nav>
