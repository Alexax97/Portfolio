<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$titolo ?? config('app.name')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <x-nav />


    <div class="container mt-5">
        {{ $slot }}
    </div>






</body>
</html>