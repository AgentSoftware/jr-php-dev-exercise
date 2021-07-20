<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Autour+One&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            h1 {
                font-family: 'Autour One', cursive;
            }
        </style>
    </head>
    <body class="bg-gray-100">
        
        <div class="container px-24 mt-8 mx-auto">
            <header class="flex items-center mb-12">
                <h1 class="text-6xl">The Dog House</h1>
                <a href="/pictures/create" class="ml-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add your own dog
                </a>
            </header>

            @yield('content')
        </div>
    </body>
</html>
