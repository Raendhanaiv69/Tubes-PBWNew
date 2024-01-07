<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen">
    {{-- @include('layout.sidebar') --}}
    <x-headeradmin>
    </x-headeradmin>
    <div class="flex min-h-screen">
        <aside class="fixed top-0 flex w-16 flex-col bg-bk h-screen">
            <div class="flex-none bg-bk w-16 h-16 flex items-center justify-center">
                <img src="{{asset('assets/image/logo.png')}}" alt="logo" class="w-10 h-8 p-1">
            </div>
            <a href="adminkursus" class="flex items-center">
                <img src="{{asset('assets/image/article.png')}}" alt="logo" class="p-5">
            </a>
            <a href="adminisikursus" class="flex items-center">
                <img src="{{asset('assets/image/loc.png')}}" alt="logo" class="p-5">
            </a>
        </aside>
        <main class="main pt-8 bg-txt w-full h-full pb-10">
            @yield('content')
        </main>
    </div>

</body>

</html>