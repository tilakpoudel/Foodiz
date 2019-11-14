<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Foodiz</title>
        <link rel="icon" href="https://is1-ssl.mzstatic.com/image/thumb/Purple123/v4/f7/4a/cd/f74acd23-b4bd-2c4d-e53b-0a5d200bf148/source/512x512bb.jpg"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            body{
                background-color: #fff;
                color: goldenrod;
                font-family: '', cursive;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url('https://backgrounddownload.com/wp-content/uploads/2018/09/background-for-food-website-3.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }

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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: gold;
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
                <div class="title m-b-md">
                    Welcome Food LOvers !!!
                </div>
                {{-- <img src="https://www.tourismmail.com/public/uploads/2018/01/Nepali-foods.jpeg" alt="Nepali Foods" srcset="" width="100px" height="50px"> --}}
            </div>
        </div>
    </body>
</html>
