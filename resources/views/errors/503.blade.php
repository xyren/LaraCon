<!DOCTYPE html>
<html>
    <head>
        <title>5xx Be right babk.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
			
			.footer{margin:0 auto;text-align:center;font-size:14px;}
			.logo{max-height:50px;display:block;margin:0 auto}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">5XX. Be right babk
				<a class="navbar-brand" href="{{ URL::to('/fileshare') }}"><img alt="Brand" src="{{ asset('img/logo.png') }}" class="img-responsive logo"></a>
				<p class="footer">&copy; <? echo date('Y');?> Fileshare, Inc.</p>
				</div>
				
				
            </div>
			
        </div>
    </body>
</html>
