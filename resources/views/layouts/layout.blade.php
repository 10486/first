<!DOCTYPE HTML>
<!--
	Iridium by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Наследие Руси</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{asset('/css/sticky_header.css')}}">
		<link rel="stylesheet" href="{{asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="{{asset('js/skel.min.js')}}"></script>
		<script src="{{asset('js/skel-panels.min.js')}}"></script>
		<script src="{{asset('js/init.js')}}"></script>
		<noscript>
			<link rel="stylesheet" href="{{asset('css/skel-noscript.css')}}" />
			<link rel="stylesheet" href="{{asset('css/style.css')}}" />
			<link rel="stylesheet" href="{{asset('css/style-desktop.css')}}" />
		</noscript>
		<script type="text/javascript">
		function addStyle(src){
			var link = document.createElement('link');
			link.setAttribute('href',"{{asset('css/')}}/"+src);
			link.setAttribute('rel','stylesheet');
			document.getElementsByTagName('head')[0].appendChild(link);
		}
		</script>
		<!--[if lte IE 8]><link rel="stylesheet" href="{{asset('css/ie/v8.css')}}" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="{{asset('css/ie/v9.css')}}" /><![endif]-->
	</head>
	@yield('body')

</html>
