<!DOCTYPE>
<html lang="{{ app()->getLocale() }}"
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="http://fonts.gstatic.com">
        <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet"
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'laravel') }}
                    </a> 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupporttedContent" aria-controls="navbarSupporttedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupporttedContent">
                        <ul class="navbar-nav ms-auto">
                            
                        </ul>
                        <ul class="navbar-nav">
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                
                @yield('content')
            </main>
        </div>
    </body>