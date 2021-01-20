<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <title>Toko Gigas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <link rel="stylesheet" href="css_welcomepage/welcome_main.css"/>
		<noscript><link rel="stylesheet" href="css_welcomepage/welcome_noscript.css" /></noscript>
       
    </head>
    <body class="is-preload">
        <div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

                <header id="header">
					<h1>Toko Gigas</h1>
                    <p>Belanja Murah, Hemat, Bersahabat</p>
    
                    <div class="flex-center position-ref full-height">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>    
                    
                    <div class="links">
                        <a href="https://laravel.com/docs">Belanja Sekarang</a>
                    </div>
                </header>    
        
                <footer id="footer">
					<span class="copyright">&copy; 2020.Toko Gigas</span>
                </footer>
                    
            </div>    
        </div>
        <script>
		    window.onload = function() { document.body.classList.remove('is-preload'); }
		    window.ontouchmove = function() { return false; }
		    window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
    </body>
</html>
