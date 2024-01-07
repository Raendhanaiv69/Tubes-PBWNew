<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
     @vite('resources/css/app.css')
</head>
<body>
  <div class="bg-gray-100 flex flex-row-reverse justify-center items-center h-screen">
    <div class="justify-center items-end p-10 w-1/2 h-screen lg:flex flex-col hidden bg-bk">
      <div class="text-6xl text-txt font-bold pb-28 font-ultra">Welcome Back!</div>
      <img src="{{ asset('assets/image/logo.png') }}" alt="back" class="w-55 h-auto absolute pr-56">
    </div>
    <!-- Right: Register Form -->
    <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2 max-h-screen">
      <h1 class="text-3xl font-bold mb-4 text-bll text-center">Daftar</h1>

      @if(session('success'))
          <div class="mb-4 text-green-500">
              {{ session('success') }}
          </div>
      @endif

      @if ($errors->any())
          <div class="mb-4">
              <ul class="text-red-500">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <form action="{{ route('register') }}" method="POST">
        @csrf
        <!-- Username Input -->
        <div class="mb-4">
          <label for="name" class="block text-gray-600">Username</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full border border-gray-300 rounded-full py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
        </div>
        {{-- Email --}}
        <div class="mb-4">
          <label for="email" class="block text-gray-600">E-mail</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full border border-gray-300 rounded-full py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
        </div>
        <!-- Password Input -->
        <div class="mb-4">
          <label for="password" class="block text-gray-600">Password</label>
          <input type="password" id="password" name="password" value="{{ old('password') }}" class="w-full border border-gray-300 rounded-full py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
        </div>
        {{-- Password Confirmation --}}
        <div class="mb-4">
          <label for="password_confirmation" class="block text-gray-600">Konfirmasi Kata Sandi</label>
          <input type="password" id="password_confirmation" name="password_confirmation" class="w-full border border-gray-300 rounded-full py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
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
        <!-- Register Button -->
        <button type="submit" class="bg-bk focus:bg-fx focus:text-black text-txt font-semibold rounded-full py-2 px-4 w-full">Daftar</button>
      </form>
      <!-- Sign up Link -->
      <div class="mt-6 text-blue-500 text-center">
        <a href="login" class="hover:underline">Sudah punya akun? Masuk sekarang</a>
      </div>
      <!-- Back to Home Link -->
      <a href="/" class="hover:underline">
        <img src="{{ asset('assets/image/back2.png') }}" alt="back" class="w-8 h-auto absolute top-5 left-5">
      </a>
    </div>
  </div>
</body>
</html>
