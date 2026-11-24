<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'SmartRestaurant') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="text-red-500">
       <h1 class="text-4xl text-red-500 underline underline-offset-8 bg-red-500 text-white">welcome</h1>
    </body>
</html>