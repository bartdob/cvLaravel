<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Strona CV</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>

.navbar.scrolled {
  background: #12bee0;
  color: hotpink;
}

body{
      font-family: 'Merriweather', serif;
      color: white;
      background-color: #12bee0;
    }

  .img-thumbnail {
    max-height: 325px;
  }

  .style {
    height: 12px;
    border: 0;
    box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
}
                </style>
    </head>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



     <div class="container border-top">
     <div class="card-body text-right">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
			<h3 class="display-4 text-center">O Mnie:</h3>
      <div class="container">
			<hr class="style">
			<div class="align-text-center">
			<p class="text-center">Cześć, mam na imię Bartosz.</p>
			<p class="text-center">
      Jestem absolwentem Akademii Ekonomicznej w Poznaniu. </p>
      <p class="text-center">
      Po paru latach pracy w energetyce zdecydowałem rozwinąć moje hooby, <br> jakim są technologie i ukończyć zaocznie studia informatyczne.</p>
			<p class="text-center">Ukończyłem je w 2019 :)</p>
			<p class="text-center">W związku z powyższm chciałbym zająć się w 100% it, a ta strona jest moim projektem.</p>
			<p class="text-center">W zakładce Git możesz zobaczyć moje inne projekty.</p>
			<hr class="style">
	</div>
	</div>
  </div>

	

	<h3 class="display-4 text-center">TECHNOLOGIE:</h3>

<div class="container flex-column flex-sm-row border border-primary justify-content-center bg-light p-3 justify-content-around">
  	<div class="row align-items-center">
   				 <div class="col-sm-3">
     				 <img src="storage/images/html.png" class="img-fluid img-thumbnail p-4">
    			</div>
    			<div class="col-sm-3">
      				<img src="storage/images/css3.png" class="img-fluid img-thumbnail p-4">
    			</div>
   				 <div class="col-sm-3">
      				<img src="storage/images/js.png" class="img-fluid img-thumbnail p-4 borderborder-info ">
    			</div>
       			<div class="col-sm-3">
      				<img src="storage/images/bootstrap.png" class="img-fluid img-thumbnail p-4 ml-0" style="max-height: 206px: ">
    			</div>
  	</div>

  	<hr class="style">

  	<div class="row align-items-center p-b-4">
   				 <div class="col-sm-3">
     				<img src="storage/images/php_elephant.png" class="img-fluid img-thumbnail p-4 borderborder-info" >
    			</div>
    			<div class="col-sm-3">
    				<img src="storage/images/clogo.png" class="img-fluid img-thumbnail p-4 borderborder-info" >
      				
    			</div>
   				 <div class="col-sm-3">
      				<img src="storage/images/c1.png" class="img-fluid img-thumbnail p-4 borderborder-info" >
    			</div>
       			<div class="col-sm-3">
      				<img src="storage/images/mysql.png" class="img-fluid img-thumbnail p-4 borderborder-info" >
    			</div>
  	</div>
  	<hr class="style">

  	<div class="row align-items-center p-b-4">
   				 <div class="col-sm-3">
     				<img src="storage/images/nodejs.jpg" class="img-fluid img-thumbnail p-4 borderborder-info" >
    			</div>
    			<div class="col-sm-3">
    				<img src="storage/images/expressjs.jpg" class="img-fluid img-thumbnail p-4 borderborder-info" >
      				
    			</div>
   				 <div class="col-sm-3">
      				<img src="storage/images/mongodb.jpg" class="img-fluid img-thumbnail p-4 borderborder-info" >
    			</div>
       			<div class="col-sm-3">
      				<img src="storage/images/passport.jpg" class="img-fluid img-thumbnail p-4 borderborder-info" >
    			</div>
  	</div>
  	<hr class="style">

  	<div class="row align-items-center p-b-4">
   				 <div class="col-sm-4">
     				<img src="storage/images/python.png" class="img-fluid img-thumbnail p-4 borderborder-info" >
    			</div>
    			<div class="col-sm-4">
    				<img src="storage/images/linux.jpg" class="img-fluid img-thumbnail p-4 borderborder-info" >
      				
    			</div>
   				 <div class="col-sm-4">
      				<img src="storage/images/arduino.jpg" class="img-fluid img-thumbnail p-4 borderborder-info" >
    			</div>
       			
  	</div>
  	<hr class="style">

</div>

	<br>
	<br>
	<br>

    	<!-- losowanie motta na dzis -->
	

	<blockquote class="blockquote text-center">
  		<p class="mb-0" id="cytat">How embarrassing to be human</p>
  		<footer class="blockquote-footer" id="authors">Kurt Vonnegut <cite title="Kurt Vonnegut">Kurt Vonnegut</cite></footer>
	</blockquote>


    <script src="js/cytaty.js"></script>
<script src="js/podswietlenie.js"></script>

    </body>
</html>

