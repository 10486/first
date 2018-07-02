<div id="redact">
<div>
  <form class="form"enctype="multipart/form-data" action="{{isset($post->id)?route('edit',$post->id):route('add')}}" method="post">
    <div class="form-group">
    <div class="form-row">
      <label>
        <h2>Название</h2>
        <input type="text" class="input"name="name"v-model="name" >
      </label>
      <label style="margin-left: 25%;">
        <h2>Заголовок</h2>
        <input type="text" class="input"name="head"v-model="header">
      </label>
    </div>
    <div class="form-row">
      <label style="width:100%;">
        <h2>Текст</h2>
        <textarea class='input textarea'name="text" v-model="text"></textarea>
      </label>
    </div>
    <div class="form-row">
      <label>
        <div class="custom-file btn">
        Выберите фото
        </div>
        <input @change="sync" class='type-file'type="file" name="img" value="">
      </label>
    </div>
    @csrf
    <div class="form-row">
      <div class="btn-group">
        <button type="button" class='btn' @click="show =! show">Предпросмотр</button>
        <button type="submit" class='btn'>Оправить</button>
      </div>
    </div>
    </div>
  </form>
</div>
<div v-if="show" id="main">
  <div class="container">
    <div class="row">

      <!-- Content -->
      <div id="content" class="12u skel-cell-important">
        <section>
          <header>
            <h2 style="line-height:1em">@{{name}}</h2>
            <span class="byline">@{{header}}</span>
          </header>
          <a href="#" class="image full"><img :src='img' alt="" /></a>
          <span v-html='text'></span>
        </section>
      </div>
    </div>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript">
addStyle('master.css');
var preview = new Vue({
  el:'#redact',
  data:{
    show:false,
    header:'{{$post->head??""}}',
    name:'{{$post->name??""}}',
    text:'{{$post->text??""}}',
    img:'{{$post->img??""}}'
  },
  methods: {
    sync (e) {
      e.preventDefault();
      var input = event.target;
           if (input.files && input.files[0]) {
               var reader = new FileReader();
               var vm = this;
               reader.onload = function(e) {
                   vm.img = e.target.result;
               }
               reader.readAsDataURL(input.files[0]);
        }
      }
    }

});
</script>
