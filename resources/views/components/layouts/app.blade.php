<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
<header class="flex justify-around items-center">
    <span></span>
    <a href="/"><h2 class="text-center text-4xl">Welcome To Books App</h2></a>
    @if(!request()->is('books/create'))
        <button
            class="bg-transparent cursor-pointer hover:bg-blue-500 text-gray-400 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
        ><a href="{{ route('books.create') }}">Add A Book</a></button>
    @else
        <span></span>
    @endif
</header>
<main>
    {{$slot}}
</main>
@livewireScripts
</body>
</html>
