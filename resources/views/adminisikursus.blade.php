@extends('layout.app')

@section('content')
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ url('/storeAdminIsiKursus') }}" enctype="multipart/form-data" method="POST">
                @csrf <!-- Tambahkan ini untuk token CSRF -->
                <div class="mb-5">
                    <label for="id_kursus" class="mb-3 block text-base font-medium text-[#07074D]">
                        Kursus
                    </label>
                    <select name="id_kursus" id="id_kursus" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        @foreach ($course as $kurs)
                            <option value="{{$kurs->id_kursus}}">{{$kurs->judul_kursus}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="judul_isi_kursus" class="mb-3 block text-base font-medium text-[#07074D]">
                        Judul
                    </label>
                    <input type="text" name="judul_isi_kursus" id="judul_isi_kursus" placeholder="Masukkan judul" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-5">
                    <label for="lokasi" class="mb-3 block text-base font-medium text-[#07074D]">
                        Lokasi
                    </label>
                    <input type="text" name="lokasi" id="lokasi" placeholder="Masukkan lokasi" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-5">
                    <label for="fasilitas" class="mb-3 block text-base font-medium text-[#07074D]">
                        Fasilitas
                    </label>
                    <input type="text" name="fasilitas" id="fasilitas" placeholder="Masukkan fasilitas" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-5">
                    <label for="jadwal_biaya" class="mb-3 block text-base font-medium text-[#07074D]">
                        Jadwal dan Biaya
                    </label>
                    <input type="text" name="jadwal_biaya" id="jadwal_biaya" placeholder="Masukkan jadwal dan biaya" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div>
                    <button type="submit" class="hover:shadow-form rounded-md bg-bl py-3 px-8 text-base font-semibold text-white outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
