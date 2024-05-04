<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dern Support</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/emoji-picker-element@1.2.0/dist/emoji-picker-element.min.css">
    <script src="https://cdn.jsdelivr.net/npm/emoji-picker-element@1.2.0/dist/emoji-picker-element.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include("components.navbar")
    @if (session("alert"))
    <div id="sticky-alert" class="flex sticky top-0 items-center p-4 text-sm text-white bg-green-600 transition-opacity duration-500" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <div>
            {{ session("alert") }}
        </div>
    </div>


    <script>
        // JavaScript to make the element disappear after 1 second
        setTimeout(function() {
            var element = document.getElementById('sticky-alert');
            element.style.opacity = '0';
            setTimeout(function() {
                element.style.display = 'none';
            }, 500);
        }, 2000);
    </script>
    @endif

    @yield("content")
</body>

</html>
