@extends('layouts.layout')
@section('body')
  <body>
    @include('header')
    <iframe src="https://money.yandex.ru/quickpay/shop-widget?writer=seller&targets=%D0%9F%D0%BE%D0%B6%D0%B5%D1%80%D1%82%D0%B2%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%B2%20%D1%84%D0%BE%D0%BD%D0%B4%20%D0%9D%D0%B0%D1%81%D0%BB%D0%B5%D0%B4%D0%B8%D0%B5%20%D0%A0%D1%83%D1%81%D0%B8&targets-hint=&default-sum=&button-text=14&payment-type-choice=on&hint=&successURL=https%3A%2F%2Fnasledie-rusi.ru&quickpay=shop&account=410015891512315" width="100%" height="222" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
    @include('content.footer')
    @include('content.copy')
  </body>
@endsection
