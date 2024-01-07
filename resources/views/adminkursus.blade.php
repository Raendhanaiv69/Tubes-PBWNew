@extends('layout.app')

@section('content')
<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px]">
        <form action="{{ route('adminkursusStore') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-5">
                <label for="judul_kursus" class="mb-3 block text-base font-medium text-[#07074D]">
                    Judul
                </label>
                <input type="text" name="judul_kursus" id="judul_kursus" placeholder="Judul"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>

            <div class="mb-8">
                <label for="gambar_kursus"
                    class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                    <div>
                        <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                            Drop files here
                            <input type="file" name="gambar_kursus" id="gambar_kursus" class="sr-only" />
                        </span>
                        <span class="mb-2 block text-base font-medium text-[#6B7280]">
                            Or
                        </span>
                        <span
                            class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                            Browse
                        </span>
                    </div>
                </label>
            </div>

            <div class="mb-5">
                <label for="deskripsi" class="mb-3 block text-base font-medium text-[#07074D]">
                    Deskripsi
                </label>
                <textarea rows="4" name="deskripsi" id="deskripsi" placeholder="Type your Deskripsi"
                    class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
            </div>

            <div>
                <button type="submit"
                    class="hover:shadow-form rounded-md bg-bl py-3 px-8 text-base font-semibold text-white outline-none">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
