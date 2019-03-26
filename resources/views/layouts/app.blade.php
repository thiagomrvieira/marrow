<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Marrow</title>
    </head>

    <body>
        <div class="container">
            <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif
            </main>
        </div>
    
        <script src="{{asset('css/app.css')}}" type="text/javascript"></script>
    </body>

</html>