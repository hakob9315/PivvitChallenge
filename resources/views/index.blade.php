<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ember App</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{url('/ember-app/assets/vendor.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/ember-app/assets/ember-app.css')}}">
    </head>  
    <body>
        @include('layouts.head')


        <div id="app">
            
        </div>

    	<script src={{url('/ember-app/assets/vendor.js')}}></script> 
    	<script src={{url('/ember-app/assets/ember-app.js')}}></script> 
    </body>
</html>
