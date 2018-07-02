@extends('layouts.layout')
@section('body')
<body class="no-sidebar">
  @include('header')
  @if(session('state'))
  <script type="text/javascript">
    alert('{{session('state')}}');
  </script>
  @endif
  @include('content.post_redact')
</body>
@endsection
