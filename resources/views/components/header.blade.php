<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="sticky top-0 w-full z-10 bg-txt border-b-8 border-bk p-4 flex justify-between">
        <nav class="flex w-full justify-between">
            <img src="{{ asset('assets/image/logo.png') }}" alt="" srcset="">
            <div class="flex gap-4">
                <a href="kursus"> Home</a>
                <a href="lamankursus"> course</a>
            </div>
            <div class="ml-40">
            <div>
            <a href="{{route('logout')}}"><button class="bg-bk py-2 px-5 rounded-full"> Keluar </button></a>
            </div>
        </nav>
    </div>
</body>
</html>