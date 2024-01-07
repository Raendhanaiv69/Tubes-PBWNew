<!DOCTYPE html>
<html>
<head>
    <!-- Head section here -->
</head>
<body>
    <x-Header>
    </x-Header>
    <div class="lg:flex flex-col"> <!-- Tambahkan class relative pada container utama -->
        <img src="{{ asset('assets/image/gambar.png') }}" alt="back" class="h-80 w-2/5 absolute ml-20 mt-10 ">
        
        <div class="items-end lg:flex flex-col ">
            <img src="{{ asset('assets/image/logo.png') }}" alt="logo" class="w-40 h-auto absolute mt-32 mr-96 lg:flex ">
            <div class="text-2xl font-semibold pt-40 pr-72 mr-32">Hallo, User ! </div>
            <div class="text-2xl font-semibold pr-72 ">cari kursus mu sekarang</div>
            
            <!-- Pindahkan class absolute ke sini agar gambar logo tampil sesuai keinginan -->
        </div>
    </div>
    
    <div class="items-end justify-end lg:flex pr-96 pt-5">
            <!-- Login Button -->
            <a href="isikursus"><button  class="bg-bk focus:bg-fx focus:text-black text-txt font-semibold rounded-full py-3 px-4 w-40">Cari Kursus</button></a>
    </div>

    <div class="text-2xl font-bold pt-20 ml-16"> Rekomendasi untuk kamu </div>
        <div class="container pb-20 p-5">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
            @foreach ($kursus as $course)
            <div class="bg-white rounded-lg border-8 border-bk  p-4">
              <img src="{{ asset('gambar_kursus/'.$course->gambar_kursus) }}" alt="Placeholder Image" class="w-full h-48 rounded-md object-cover">
              <div class="px-1 py-2">
                <div class="font-bold text-xl mb-2">{{$course->judul_kursus}}</div>
                <p class="text-gray-700 text-base">
                  {{$course->deskripsi}}
                </p>
              </div>
              <div class="px-1 py-1">
                <a href="{{route('detailIsiKursus',$course->id_kursus)}}"> <button class="text-blue-500 hover:underline bg-bk rounded-full py-2 px-3">Pelajari Kelas</a><button>
                
              </div>
            </div>
            @endforeach

            </div>
          </div>
        </div>
      </div>
      <x-footer>
      </x-footer>
</body>
</html>
