<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Strona CV</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                /* height: 100vh; */
                margin: 0;
                
                
            }

            html{
                height: 100%;
                background-image: url('storage/images/rocket1.jpg');
                background-repeat:no-repeat;
                background-size:cover;
            }

            /* .full-height {
                height: 100vh;
            } */

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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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

                .ball{
                padding-top: 30%;
                }

                .jumbotron{
                text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
                            0px 4px 3px rgba(0,0,0,0.1),
                            0px 4px 3px rgba(0,0,0,0.1);
                }
        </style>
    </head>
    <body>
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

            


            <div class="content">
                <div class="jumbotron bg-transparent">
                        <h1 class="display-4">Cześć mam na imię Bartosz</h1>
                            <p class="lead">To jest moja strona Cv</p>
                                <hr align="left">

                                    <div class="ball">
                                        <a class="btn btn-primary btn-lg" href="index2/index2.html" role="button" ><i class="far fa-hand-spock"></i> START!</a>
                                    </div>
                    </div>
                </div>
            </div>
    </body>
</html>
