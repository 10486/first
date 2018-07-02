@extends('layouts.layout')
@section('body')
<body class="no-sidebar">
  @include('header')

  @include('content.post_redact')
</body>


@endsection
