<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoodRaising: Donate to charity projects around the world</title>
    <link rel="icon" href="{{ asset('favicon/favicon-32x32.png') }}" type="image/x-icon">
    <!-- Link to your app's CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/deletePopUp.js'])
</head>
<body class="font-hanken bg-background">
    <x-nav />
    @yield('content')
    <x-footer />

    <script>
        AOS.init({
            duration: 2000, // Animation duration in milliseconds
            easing: 'ease-in-out', // Easing function
            once: true,
        });
    </script>
      
</body>
</html>