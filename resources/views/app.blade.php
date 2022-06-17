<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title',config('app.name'))</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="py-6 flex flex-col justify-between items-center min-h-screen">
    <main role="main" class="flex flex-col justify-center items-center">
        @yield('content')
    </main>

    <footer>
        <p class="text-gray-400">
            &copy; Copyright {{date('Y')}}
            @if(!Route::is('about'))
                &middot; <a href="{{route('about')}}" class="text-indigo-300 hover:text-indigo-900 underline">About Us</a>
            @endif

        </p>
    </footer>
</body>
</html>

