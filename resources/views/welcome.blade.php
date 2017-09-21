<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
		
		
		
		

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
			
			h1{font-weight:500;font-size:3em;}

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center; max-width:800px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			.logo{max-height:90px;}
			
			.full-height{background-color:#eee;}
			

        </style>
		
		<script>
		$(function() {
			$(".full-height").backstretch(["img/bg1.jpg" , "img/33.jpg" , "img/22.jpg"],{
				duration: 5000, fade:1500
			});
		});

</script>

    </head>
    <body>
	
	
	
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/logout') }}">Logout</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    
					<img alt="Brand" src="{{ asset('img/logo.png') }}" class="img-responsive logo">
                </div>
				
				<h1>Easy as One-two-three</h1>
				
				<p>
				 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc venenatis nec dolor sit amet congue. Duis maximus leo vitae lectus suscipit, in venenatis elit dignissim. Cras tristique ante ut vehicula tempus. Etiam convallis lobortis iaculis. Nulla et vulputate mauris, et tempor eros. 
				</p>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
