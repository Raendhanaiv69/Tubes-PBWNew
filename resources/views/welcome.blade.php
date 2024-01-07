<!DOCTYPE html>
<html>
<head>
    <!-- Head section here -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <x-Header1>
    </x-Header1>
    <div class="lg:flex flex-col justify-between relative"> <!-- Tambahkan class relative pada container utama -->
        <img src="{{ asset('assets/image/gambar.png') }}" alt="back" class="lg:flex h-96 w-5/6 absolute p-14 lg:w-1/2 mb-5">
            <div class="items-end justify-end lg:flex pr-96">
                <img src="{{ asset('assets/image/logo.png')}}" alt="logo" class="lg:flex h-8 w-40 mt-32">
            </div>
            <div class=" items-end justify-end lg:flex font-bold text-xl ">
                <h1 class="pr-72 mr-24">cari kursus Sesuai</h1> 
            </div>
            <div class=" items-end justify-end lg:flex font-bold text-xl pb-3">
                <h1 class="pr-80 mr-20">Hobi mu Disini</h1> 
            </div>
            <div class="pb-20 items-end justify-end lg:flex font-bold text-xl ">
            <a href="login"><button  class="bg-bk  focus:bg-fx focus:text-black text-txt font-semibold mr-96 rounded-full py-3 px-4 w-46 ">Mulai Gabung</button></a>
    </div>
</body>
</html>
  

    <div class="text-2xl font-bold ml-16 "> Rekomendasi untuk kamu </div>
        <!-- component -->
<div class="pb-20 px-10 bg-purple-200">  
  <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
      <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3">
          <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
              <div class="mb-12 space-y-4">
                  <h3 class="text-2xl font-semibold text-purple-900">Olahraga</h3>
                  <p class="mb-6">Menyediakan kursus pada bidang olahraga untuk meningkatkan skill kalian</p>
              </div>
              <img src="{{asset('assets/image/tali.png')}}" class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
          </div>
          <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
              <div class="mb-12 space-y-4">
                  <h3 class="text-2xl font-semibold text-purple-900">Keterampilan</h3>
                  <p class="mb-6">Meningkatkan keterampilan para user yang ikut bergabung dalam kelas yang dipilih</p>
              </div>
              <img src=" {{asset('assets/image/mikir.png')}}" class="w-2/3 ml-auto" alt="illustration" loading="lazy" width="900" height="600">
          </div>
          <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
              <div class="mb-12 space-y-4">
                  <h3 class="text-2xl font-semibold text-purple-900">Kesenian</h3>
                  <p class="mb-6">Tingkatkan kreativitas seni kalian disini dengan memilih kursus yang tersedia</p>
              </div>
              <img src="{{asset('assets/image/lukis.png')}}" class="w-2/3 ml-auto " alt="illustration" loading="lazy" width="900" height="600">
          </div>
      </div>
  </div>
</div>

      <x-footer>
    </x-footer>
</body>
</html>