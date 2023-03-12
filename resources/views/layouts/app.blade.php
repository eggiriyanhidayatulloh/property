<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile-Property</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
     {{-- memasukan navbar yg ada di component --}}
     @include('layouts.components.navbar')
     
     {{-- memberi tempat untuk codingan yang dinamis --}}
     @yield('main')

     @include('layouts.components.footer')
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>