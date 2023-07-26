<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Simple Blog' }}</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-200 dark:bg-gray-900 h-screen text-gray-900 dark:text-gray-200">
<x-navbar/>
{{ $slot }}
</body>

@if(session('success'))
    <div id="toast-top-right"
         class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x divide-gray-200 rounded-lg shadow top-[88px] right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800"
         role="alert">
        <div class="text-sm font-normal">{{session('success')}}.</div>
    </div>
@endif

@if(session('error'))
    <div id="toast-top-right"
         class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x divide-gray-200 rounded-lg shadow top-[88px] right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800"
         role="alert">
        <div class="text-sm font-normal">{{session('error')}}.</div>
    </div>
@endif

</html>
