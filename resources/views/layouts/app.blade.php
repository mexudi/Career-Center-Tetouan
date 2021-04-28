<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
		*{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        }
        body{
            font-family: "Muli", -apple-system, BlinkMacSystemFont, 
            "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, 
            "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            background-color: #FAFAF3;
            
        }
        .left{
            margin-right: 20px;
        }
        .right{
            margin-left: 20px;
        }
        .r{
            float: right;
        }
        nav {
            box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);
        }
</style>
    <!--Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="https://vcc.careercenter.ma/vcc/" target="_blank">
	    	<img src="/images/logo_home.png" style="width: 40px;">
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	        <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('/participation/create') }}">{{ __('Participation') }}</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('/feedback/create')}}">Feedback</a>
                </li>
	        </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/admin')}}">
                                    {{ __('Pannel') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                @endguest
            </ul>
	    </div>
	  </div>
	</nav>
        <div class="container">
            <main class="py-4" style="margin-bottom: 150px;">
                @yield('content')
            </main>
        </div>

        <footer style="background-image: url(/images/footer.png); color: white;">
		<div class="container-fluid" >
		<div class="row mb-3">
			<div class="col-3" style="border-top:4px #EA4E3C solid;"></div>
			<div class="col-3" style="border-top:4px #742F8B solid;"></div>
			<div class="col-3" style="border-top:4px #25CBD3 solid;"></div>
			<div class="col-3" style="border-top:4px #F9D507 solid;"></div>
		</div>
	</div>
		<div class="container-fluid text-center" >
			<div class="row">
				<div class="col-4">
					<h3>Contact: </h3>
					<p><strong>Tel</strong>: xx.xx.xx.xx.xx</p>
					<p><strong>Email</strong>: xxxxxx@gmail.com</p>
				</div>
				<div class="col-4">
					<h3 class="mb-4">Social media: </h3>
					<div class="row d-flex justify-content-center">
						<div class="col-2">
							<a href="https://www.linkedin.com/company/career-center-maroc"  target="_blank">
								<i class="fab fa-linkedin-in" style="font-size: 50px; color: #555;"></i>
							</a>
						</div>
						<div class="col-2">
							<a href="https://web.facebook.com/Career-Center-OFPPT-T%C3%A9touan-Shore-102157351601766">
								<i class="fab fa-facebook-f" style="font-size: 50px; color: #555;"></i>
							</a>
						</div>
					</div>
					<img src="images/career.png">
				</div>
			</div>
		</div>
		<div class="container-fluid" >
		<div class="row">
			<div class="col-3" style="border-top:4px #EA4E3C solid;"></div>
			<div class="col-3" style="border-top:4px #742F8B solid;"></div>
			<div class="col-3" style="border-top:4px #25CBD3 solid;"></div>
			<div class="col-3" style="border-top:4px #F9D507 solid;"></div>
		</div>
	</div>

	</footer>
    </div>
</body>
</html>
