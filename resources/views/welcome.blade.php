<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel multiple roles user login project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
        </style>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
        <link rel="stylesheet" href="{{asset('css/custom_theme.css')}}">
        
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
                    Laravel7 project by farook 
                </div>
                
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <div class="container">

                    <h2 class="text-center">
                        login with multiple roles user project
                    </h2>
                    <p class="pt-3">
                        this project is to show login user with a multiple roles of user such as "admin","moderate","generic user" or "member" so call in this project
                    </p>
                    <p class="pt-2 text-center">
                        today is {{date('Y-m-d H:i:s')}} check if your time is match with your current time zone if it not you can just simply change this from the config file that live in "config/app.php" look for the line 'timezone' => 'change it to your time zone',
                    </p>
                    
                    <p class="pt-3">
                    <img src="https://i.ibb.co/mXFSV77/far-forgive.gif" class="responsive">
                    </p>
                    <p class="pt-3">if you want to try out this system now just get login by using the user account below.</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p class="pt-2">
                                to login as "Admin" <span class="alert alert-info">admin@test.com</span> the password is <span class="alert alert-info">password</span>
                            </p>
                        
                        </li>
                        <li class="list-group-item">
                            
                            <p class="pt-2">
                                to login as "Moderate" <span class="alert alert-info">mod@test.com</span> the password is <span class="alert alert-info">password</span>
                            </p>
                        </li>
                        <li class="list-group-item">

                            <p class="pt-2">
                                to login as "Generic User" <span class="alert alert-info">test@test.com</span> the password is <span class="alert alert-info">password</span>
                            </p>
                        </li>
                    </ul>
                   <p class="pt-2">
                    or to create your own account by click "register" link.
                   </p>
                   

        </div>
        
    </body>
</html>
