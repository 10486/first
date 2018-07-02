<!-- Main -->
<div id="main">
  <div class="container">
    <div class="row">

      <!-- Content -->
      <div id="content" class="8u skel-cell-important">
        <section>
          <form class="form-control" enctype="multipart/form-data" action="{{route('admin')}}" method="post">
            <header>
              <h2><input class="input" type="text" name="name" value="{{$home->name}}"></h2>
              <input type="text"class="input"  name="head" value="{{$home->head}}">
            </header>
            <label class="image full">
              <img id="image"src="{{asset($home->img)}}" alt="" />
              <input type="file" id="img"name="img" class="file-input">
            </label>
            <textarea class="textarea input"name="text">{{$home->text}}</textarea>
            @csrf
            <button type="submit" class="btn"name="save">Сохранить</button>
          </form>

        </section>
      </div>

      <!-- Sidebar -->
      <div id="sidebar" class="4u">
        <section>
          <header>
            <h2>Последние Новости</h2>
          </header>
          <ul class="style">
            @foreach($news as $new)
            <li style="max-height:150px;overflow:hidden;">
              <p class="posted">{{$new->updated_at}}</p>
              <img style="max-width:50%;"src="{{$new->img}}" alt="" />
              <h3 class="text">{{$new->name}}</h3>
              <p class='text'>{{$new->head}}</p>
            </li>
            @endforeach
          </ul>
        </section>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<div id="featured">
  <div class="container">
    <div class="row">
      @foreach($posts as $post)
      <div class="4u">
        <h2>{{$post->name}}</h2>
        <a href="#" class="image full"><img src="{{$post->img}}" alt="" /></a>
        <p>{{$post->text}}</p>
        <p><a href="{{route('post',[$post->id])}}" class="button">Читать Далее</a></p>
      </div>
      @endforeach
      </div>
    </div>
  </div>
</div>



<!-- Copyright -->
<div id="copyright">
  <div class="container">
    Design: <a href="http://templated.co">TEMPLATED</a>
  </div>
</div>
<script type="text/javascript">
  addStyle('master.css');
  addStyle('home_form.css');
  img.onchange = function(event){
    event.preventDefault();
    var input = event.target;
         if (input.files && input.files[0]) {
             var reader = new FileReader();
             reader.onload = function(e) {
                 image.setAttribute('src',e.target.result);
             }
             reader.readAsDataURL(input.files[0]);
      }
    }
</script>
