<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"></meta>

        <title>TMS TASK</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="container" id="app">

            @include('layouts.nav')


            <router-view></router-view>


        </div>
      <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
