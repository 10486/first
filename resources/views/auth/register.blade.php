@extends('auth.layout')
@section('content')
<div class="cont">
  <form class="" action="{{route('register')}}" method="post">
<div class="demo">
  <div class="login">
    <div class="login__check"></div>
    <div class="login__form">
      <div class="login__row">
        <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
          <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
        </svg>
        <input type="text" class="login__input name" name="name"placeholder="Имя"/>
      </div>
      <div class="login__row">
        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
          <path d="M0,7 0,20 20,20 20,7 10,15 0,7 20,7" />
        </svg>
        <input type="email" class="login__input pass"name="email" placeholder="Email"/>
      </div>
      <div class="login__row">
        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
          <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
        </svg>
        <input type="password" class="login__input pass" name="password"placeholder="Пароль"/>
      </div>
      @csrf
      <button type="submit" class="login__submit">Регистрация</button>
      <a href="{{route('admin')}}"><button type="button" class="login__submit">На главную</button></a>


    </div>
  </div>
</div>
  </form>
</div>
@endsection
