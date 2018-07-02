@extends('layouts.layout')
@section('body')
<body class="no-sidebar">
@include('header')
<div id="main">
  <div class="container">
    <div class="row">
      <div class="12u">
        Краснодарское Региональное Экологическое Общественное Движение «Наследие Руси» создано с целью привлечения внимания органов государственной власти, органов местного самоуправления и другие организации на острые вопросы, связанные с экологией в крае и по стране в целом.
      </div>
    </div>
    <div class="row">
      <div class="12u">
        Наши первоочередные цели:
        <ul>
          <li>Cпособствовать сохранению природных богатств</li>
          <li>Препятствовать разрушению естественного экологического баланса природы</li>
          <li>Сохранение и содействие в восстановлении естественной среды водных ресурсов</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="12u">
        Необходимо сегодня подумать о том, что мы оставим нашим детям завтра!!!  
      </div>
    </div>
  </div>
</div>





@include('content.footer')
@include('content.copy')



<script type="text/javascript">
  addStyle('aboutUs.css');
</script>
</body>


@endsection
