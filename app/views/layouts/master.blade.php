<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Larashop - simple laravel shop website</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/page.css">
    </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container" style="">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">LaraShop</a>
                </div>
                <div class="collapse navbar-collapse" style="">
                    <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                    <li>{{link_to_route('user.profile', 'Profile')}}</li>
                    <li>{{link_to_route('auth.log_out', 'Log Out')}}</li>
                    @else
                    <li>{{link_to_route('auth.sign_in', 'Sign In')}}</li>
                    <li>{{link_to_route('auth.register', 'Register')}}</li>
                    @endif

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>

        <div class="container page-content">
            @include('flash::message')
            @yield('content')
        </div>

        <script src="http://code.jquery.com/jquery.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>