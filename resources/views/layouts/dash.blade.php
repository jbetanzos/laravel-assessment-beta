<!DOCTYPE html>
<html ng-app="app">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ env("APP_NAME") }}</title>

    @include('shared.assets_css')

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    @yield('navbar')
</nav>

<div class="container-fluid">
    <div ng-controller="MainController as vm">
        @yield('content')
    </div>
</div>


@include('shared.assets_js')

</body>
</html>
