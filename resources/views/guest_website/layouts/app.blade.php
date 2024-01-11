<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico"> --}}

    <title>Test</title>
</head>
<body>
    <div class="p-4">
        @yield('content')
    </div>
</body>
</html>