<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name')?? 'Be-Rojgar' }}</title>

    <!-- Scripts -->

    <link rel="shortcut icon" type="image/png" href="{{asset('images/logo/joblister.png')}}" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('css')
     
</head>
<body>
    <div id="app">
       @yield('layout-holder')
    </div>
    @include('sweetalert::alert')
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js')

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
   
    <script type="text/javascript">
        var botmanWidget = {
            introMessage: 'Hello ! Welcome to Be-Rojgar. I am your Rojgar Expert BotMan. Here is the list of commands I can respond.\n  # Hello \r\n    # What is your name?    \n# I need a job. \n   # Tell me about your portal.\n     # What are the services provided?    # About website ',
            aboutText: 'Rojgar Expert '
        };
        </script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

    </body>
   

</html>
