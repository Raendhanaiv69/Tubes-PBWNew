<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin</title>
    @vite('resources/css/app.css')
</head>
<body>
  <div class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="relative p-10 justify-center w-1/2 h-screen lg:flex flex-col hidden bg-bk gap-5">
      <div class="text-6xl text-txt font-extrabold font-ultra mb-10 pb-10">Welcome Back Admin!</div>
      <img src="{{ asset('assets/image/logo.png') }}" alt="back" class="w-55 h-auto absolute ml-3.5">
      <a href="/" class="hover:underline">
        <img src="{{ asset('assets/image/button 1.png') }}" alt="back" class="w-8 h-auto absolute top-5 left-5">
      </a>
    </div>
    <!-- Right: Login Form -->
    <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
      <h1 class="text-3xl font-bold mb-4 text-bll text-center">Login Admin</h1>
      <form action="{{ route('loginAdmin') }}" method="POST">
        @csrf
        <!-- Username Input -->
        <div class="mb-4">
          <label for="username" class="block text-gray-600">Username</label>
          <input type="text" id="username" name="username" class="w-full border border-gray-300 rounded-full py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
        </div>
        <!-- Password Input -->
        <div class="mb-4">
          <label for="password" class="block text-gray-600">Kata Sandi</label>
          <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-full py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
        </div>
        <!-- Remember Me Checkbox -->
        <div class="mb-4 flex items-center">
          <input type="checkbox" id="remember" name="remember" class="text-blue-500">
          <label for="remember" class="text-gray-600 ml-2">Remember Me</label>
        </div>
        <!-- Forgot Password Link -->
        <div class="mb-6 text-blue-500">
          <a href="#" class="hover:underline">Forgot Password?</a>
        </div>
        <!-- Login Button -->
        <button type="submit" class="bg-bk focus:bg-fx focus:text-black text-txt font-semibold rounded-full py-2 px-4 w-full">Login</button>
      </form>
      <!-- Sign up Link -->
      <div class="mt-6 text-blue-500 text-center">
        <a href="{{ route('registerAdmin') }}" class="hover:underline">Belum punya akun? Daftar sekarang</a>
      </div>
    </div>
  </div>
</body>
</html>
