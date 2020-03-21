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

            body {
                margin-left: auto;
                margin-right: auto;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: white;
                text-align: left;
                background-color: black;
                /*background-image: url("rocket1.jpg");*/
                background-size: 100% 140%;
                background: url('storage/images/rocket1.jpg') no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                
            }

            html{
                font-family: sans-serif;
                line-height: 1.15;
                -webkit-text-size-adjust: 100%;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            }

            /* .full-height {
                height: 100vh;
            } */

            .jumbotron{
            text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
                        0px 4px 3px rgba(0,0,0,0.1),
                        0px 4px 3px rgba(0,0,0,0.1);
            }

            .btn {
                display: inline-block;
                font-weight: 400;
                color: #212529;
                text-align: center;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-color: transparent;
                border: 1px solid transparent;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                }

            

            .btn-primary:hover{
                /*background-color: gold;*/
                /*position: absolute;*/
                top: calc(50% - 150px);
                left: calc(50% - 150px);
                width: 100px;
                height: 100px;
                border-radius: 50%;
                border: 1px solid white;
                box-shadow:
                            inset 0 0 50px #fff,      /* inner white */
                            inset 20px 0 80px #ffed94,   /* inner left  */
                            inset -20px 0 80px #7992c9,  /* inner right  */
                            inset 20px 0 300px #ffed94,  /* inner left  */
                            inset -20px 0 300px #7992c9, /* inner right  */
                            0 0 50px #fff,            /* outer white */
                            -10px 0 80px #f0f,        /* outer left magenta */
                            10px 0 80px #fff;         /* outer right cyan */
            }

            .btn-primary{
            border: 1px solid white;
            }

                .btn-primary {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
                }

                    .btn-primary:hover {
                    color: #fff;
                    background-color: #0069d9;
                    border-color: #0062cc;
                    }

                    .btn-primary:focus, .btn-primary.focus {
                    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
                    }

                    .btn-primary.disabled, .btn-primary:disabled {
                    color: #fff;
                    background-color: #007bff;
                    border-color: #007bff;
                    }

                    .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
                    .show > .btn-primary.dropdown-toggle {
                    color: #fff;
                    background-color: #0062cc;
                    border-color: #005cbf;
                    }

                    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
                    .show > .btn-primary.dropdown-toggle:focus {
                    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
                    }

                /* Cloud */

                hr{
                    border: 0;
                    height: 0; /* Firefox... */
                    box-shadow: 0 0 10px 1px white;
                    width: 200px;
                }
                hr:after {  /* Not really supposed to work, but does */
                    content: "\00a0";  /* Prevent margin collapse */
                }

                

                .jumbotron{
                text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
                            0px 4px 3px rgba(0,0,0,0.1),
                            0px 4px 3px rgba(0,0,0,0.1);
                }

                .btn-lg, .btn-group-lg > .btn 
                {
                padding: 0.5rem 1rem;
                font-size: 1.25rem;
                line-height: 1.5;
                border-radius: 0.3rem;
                }

                @media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}

.btn:hover {
  color: #212529;
  text-decoration: none;
}

.btn:focus, .btn.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.btn.disabled, .btn:disabled {
  opacity: 0.65;
}

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none;
}
        </style>
    </head>
    <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    
                        <a href="{{ url('/home') }}">Home</a>
                            
                    @else
                    <button type="button" class="btn btn-info">
                        <a href="{{ route('login') }}">Login</a>
                        </button>
                        @if (Route::has('register'))
                        <button type="button" class="btn btn-info">
                            <a  href="{{ route('register') }}">Register</a>
                        </button>
                        @endif
                    @endauth
                </div>
            @endif
    </form>
  </div>
</nav>
        <div class="flex-center position-ref full-height">
           

            


            <div class="content">
                <div class="jumbotron bg-transparent">
                        <h1 class="display-4">Cześć mam na imię Bartosz</h1>
                            <p class="lead">To jest moja strona Cv</p>
                                <hr align="left">

                                    <div class="ball">
                                        <a class="btn btn-primary btn-lg" id="buton" href="home" role="button" ><i class="far fa-hand-spock"></i> START!</a>
                                    </div>
                    </div>
                </div>
            </div>
    </body>
</html>
