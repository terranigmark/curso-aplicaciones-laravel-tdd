<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-200">
        @foreach($repositories as $repository)
        <h2>{{ $repository->url }}</h2>
        <p>{{ $repository->description }}</p>
        @endforeach
    </body>
</html>
