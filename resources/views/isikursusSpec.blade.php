<Html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Tambahkan gaya CSS sesuai kebutuhan Anda */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }

        .popup {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border: 1px solid #ccc;
        }

        /* Gaya tambahan untuk tombol Gabung */
        .gabung-button {
            margin-bottom: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input,
        select,
        textarea {
            border: 1px solid #ccc;
            padding: 8px;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        /* Gaya tambahan untuk judul */
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }
    </style>
</head>
  <body>
    <x-Header>
    </x-Header>
    <div class="pt-10">
    <div class="mr-10 ml-10 px-10 py-10 bg-purple-200 border-8 border-bk lg:flex">  
      <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
        <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-2">
          @foreach ($adminIsi as $item)
          <div class="bg-bk rounded-2xl shadow-xl px-8 py-10 sm:px-12 lg:px-8">
            <div class="mb-5 space-y-4">
                        <h3 class="text-2xl font-semibold text-purple-900">{{$item->judul_isi_kursus}}</h3>
                          <p class="mb-5 ">{{$item->fasilitas}}</p>
                          <p class="mb-5 ">Lokasi : {{$item->lokasi}}</p>
                          <p class="mb-5 ">Jadwal dan Biaya : {{$item->jadwal_biaya}}</p>
                          <a href="#" class="block font-medium text-purple-600 gabung-button" onclick="showPopup()"><button class="bg-bl focus:bg-fx focus:text-black text-txt font-semibold rounded-full py-3 px-4 w-46">Gabung</button></a>
                        </div>
             </div>
          @endforeach

          </div>
      </div>
    </div>

    
    <div id="overlay" class="overlay pt-16">
      <div id="registrationPopup" class="popup">
          <h2 class="font-bold ">Gabung Kursus</h2>
          <!-- Isi formulir pendaftaran di sini -->
          <form id="registrationForm" action="{{ route('storePendaftaran') }}" method="POST">
            @csrf
              <div class="form-row">
                  <label for="nama">Nama:</label>
                  <input type="text" id="nama" name="nama" class="bg-abu w-full" required>
              </div>
              @foreach ($adminIsi as $isi)
              <select id="id_isi_kursus" name="id_isi_kursus" class="bg-abu" required>
                <option value="{{$isi->id_isi_kursus}}">{{$isi->id_isi_kursus}}</option>
            </select>
              @endforeach
              <div class="form-row">
                  <label for="tanggal_lahir">Tanggal Lahir:</label>
                  <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="bg-abu" required>
                  
                  <label for="gender">Gender:</label>
                  <select id="gender" name="gender" class="bg-abu" required>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                  </select>
              </div>
  
              <label for="no_handphone">No Handphone:</label>
              <input type="tel" id="nomor_hp" name="nomor_hp" class="bg-abu" required>
  
              <label for="alamat">Alamat:</label>
              <textarea id="alamat" name="alamat" rows="4" class="bg-abu" required></textarea>
  
              <label for="pembayaran">Metode Pembayaran:</label>
              <select id="pembayaran" name="pembayaran" class="bg-abu" required>
                  <option value="transfer">Transfer Bank</option>
                  <option value="cash">Pembayaran Tunai</option>
                  <!-- Tambahkan opsi pembayaran lainnya sesuai kebutuhan -->
              </select>
              <label for="tanggal_kursus">Tanggal Kursus:</label>
              <input type="date" id="tanggal_kursus" name="tanggal_kursus" class="bg-abu" required>
  
              <button type="submit" class="bg-bk rounded-full pt-3">Submit</button>
          </form>
          <button onclick="closePopup()">Tutup</button>
      </div>
  </div>
  
  <script>
      function showPopup() {
          // Tampilkan overlay dan pop-up
          document.getElementById("overlay").style.display = "flex";
          document.getElementById("registrationPopup").style.display = "block";
      }
  
      function closePopup() {
          // Tutup overlay dan pop-up
          document.getElementById("overlay").style.display = "none";
          document.getElementById("registrationPopup").style.display = "none";
      }
  </script>
      <x-footer>
      </x-footer>
  <body>
</html>