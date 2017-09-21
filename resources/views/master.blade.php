<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <title>@yield('title','Laravel')</title>

		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/fileserve.js') }}"></script>
		
		
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		
        <!-- Styles -->
        <style>
            html, body {
               font-family: 'Raleway', sans-serif;
                font-weight: 100;
            }
			.container{max-width:800px}
			.logo{max-height:45px;/* background-color:#ddd; */}
			.bg-red{/* background-color:#ddd; */}
			.navbar-brand{margin:0;padding:2px 10px;}
			.width-150{width:150px;}
			.nomargin{margin:0;}
			.nopadding{padding:0;}
			
			* {
			  -webkit-border-radius: 0 !important;
				 -moz-border-radius: 0 !important;
					  border-radius: 0 !important;
			}
			.footer{position:fixed;bottom:0px;width:100%;text-align:center;
				background-color:#fff;border-top:1px solid #ddd;padding:1em;}
			.padding-top-10{margin-top:20px;}
			
			@yield('css')

        </style>
    </head>
    <body>
	<nav class="navbar navbar-default navbar-static-top">
	 <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::to('/home') }}"><img alt="Brand" src="{{ asset('img/logo.png') }}" class="img-responsive logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
	  
	  <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
					
					
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
	
	
	
	
	
	
  <div class="container hide">
  
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="{{ asset('img/logo.png') }}" class="img-responsive logo">
      </a>
    </div>
  </div>
  
  
     <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
  </div>
</nav>
	<div class="container">
      
	  
		<div class="content">
			@yield('container')
		</div>
			

      <div class="jumbotron hide">
		  <div class="jumbotron">
			<h1>Jumbotron heading</h1>
			<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
		  </div>

		  <div class="row marketing">
			<div class="col-lg-6">
			  <h4>Subheading</h4>
			  <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

			  <h4>Subheading</h4>
			  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

			  <h4>Subheading</h4>
			  <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
			</div>

			<div class="col-lg-6">
			  <h4>Subheading</h4>
			  <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

			  <h4>Subheading</h4>
			  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

			  <h4>Subheading</h4>
			  <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
			</div>
		  </div>
		
		</div>
     


    </div> <!-- /container -->

	 <footer class="footer">
	 
        &copy; <? echo date('Y');?> Fileshare, Inc.
      </footer>
   <?/*  @if (Route::has('login'))
		<div class="top-right links">
			@if (Auth::check())
				<a href="{{ url('/home') }}">Home</a>
			@else
				<a href="{{ url('/login') }}">Login</a>
				<a href="{{ url('/register') }}">Register</a>
			@endif
		</div>
	@endif 
	
	xxxxxxxxx
	*/
	?>

    </body>
</html>
