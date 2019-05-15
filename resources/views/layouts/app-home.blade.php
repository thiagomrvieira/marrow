<!DOCTYPE HTML>
<html>
    

    <head>
		<title>Paradigm Shift by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="{{asset('front/css/main.css')}}" />
	</head>




    <body class="is-preload">
        @hasSection('body')
            @yield('body')
        @endif
        <script src="{{asset('css/app.css')}}" type="text/javascript"></script>

        <!-- Scripts -->
        <script src="{{asset('front/js/jquery.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.scrolly.min.js')}}"></script>
        <script src="{{asset('front/js/browser.min.js')}}"></script>
        <script src="{{asset('front/js/breakpoints.min.js')}}"></script>
        <script src="{{asset('front/js/util.js')}}"></script>
        <script src="{{asset('front/js/main.js')}}"></script>


    </body>

</html>