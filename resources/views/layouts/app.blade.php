<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="flex justify-between border border-black ">
        <div class=" p-2 text-2xl">
            <nav>
                <a href="{{ url('/brand') }}" class="ml-4">BRAND</a>
                <a href="{{ url('/engine') }}"  class="ml-4">ENGINE</a>
                <a href="{{ url('car') }}"  class="ml-4">CAR</a>
            </nav>
        </div>
        <div></div>
    </div>
</body>
@yield('content')
</html>
