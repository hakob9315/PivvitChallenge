<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('ember-app/assets/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('ember-app/assets/ember-app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('layouts.head')

        @yield('content')
    </div>
</body>
</html>
