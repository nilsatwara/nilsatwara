<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<nav>
    <ul>
        <li><a href="{{url('/')}}">English</a></li>
        <li><a href="{{url('/guj')}}">Gujarati</a></li>
        <li><a href="{{url('/hi')}}">Hindi</a></li>
        <li><a href="{{url('/ru')}}">Russian</a></li>
        <li><a href="{{url('/ch')}}">Chinese</a></li>
    </ul>
</nav>

<body>
    <h1 class="text-primary">@lang('lang.greeting')</h1>
    {{-- <h1 class="text-warning">hello welcome to my home</h1>
    <h1 class="text-danger">hello welcome to my home</h1>
    <h1 class="text-info">hello welcome to my home</h1>
    <h1 class="text-success">hello welcome to my home</h1>
    <h1 class="text-dark">hello welcome to my home</h1> --}}
{{-- </body>
</html> --}}