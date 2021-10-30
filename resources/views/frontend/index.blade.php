@extends('layouts.layout')

@section('content')
  

  {{-- navbar atas --}}
  <nav class="navbar navbar-expand-lg">
    <a class="font-weight-bold" style="font-size: 20px;">Survei Dataset Skripsi</a>
    <a class="ml-auto" style="color: #e9894e" href="https://portofolio.ammaridhos.my.id/">Tentang Saya</a>
    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" style="color: #e9894e" href="https://portofolio.ammaridhos.my.id/">Tentang Saya</a>
        </li>
      </ul>
    </div> --}}
  </nav>


  {{-- Isi --}}
  <div class="container" id="dalam">

    <div class="row">
      <div class="col-12 pt-5">
        <h1 class="text-center">Survei Pengguna Internet Wifi Rumahan</h1>
      </div>
    </div>

    {{-- Deskripsi perkenalan --}}
    <div class="row">
      <div class="col-sm-3 p-5">
          <img src="img/fotocv.png" class="img-thumbnail">
      </div>
      <div class="col-sm-9 mb-4 mt-4">
          <p class="text-justify">Assalamualaikum, Wr. Wb. <br><br>

            Perkenalkan nama saya Ammaridho, <br><br>
            saya adalah mahasiswa prodi Teknik Informatika angkatan 2018, Fakultas Sains dan Teknologi, UIN Syarif Hidayatullah Jakarta.<br><br>
            
            Saat ini saya sedang melakukan penelitian dalam rangka penyelesaiian Tugas Akhir Skripsi yang berjudul "Pemilihan Bandwidth Internet Rumahan Dengan Metode Algoritma Decision Tree C4.5".<br><br>
            
            Saya ucapkan terimakasih kepada saudara/i atas ketersediaannya mengisi survey ini, data yang diambil hanya akan digunakan untuk penelitian saya dan tidak akan disebarluaskan.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12 pt-4 pb-4">
        <h3 class="text-center">Selamat Mengisi Survei</h3>
      </div>
    </div>

    {{-- Form Survei --}}
    <div class="row">
      <div class="col-12">

        @if ($errors->any())                                       {{-- jika ada error --}}
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)            {{-- tampilkan semua --}}
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('submitSurvei')}}" method="POST">

          @csrf

          {{-- Nama Keluarga --}}
          <div class="form-group">
            <label for="namaKeluarga">Nama Keluarga</label>
            <input type="text" class="form-control" id="namaKeluarga" name="namaKeluarga" placeholder="nama keluarga anda.." onkeypress="return /[a-z]/i.test(event.key)" required>
          </div>

          <hr class="shadow-lg bg-white mt-5 mb-5">

          <div class="row">
            <div class="col text-center">
              <h4>Penjelasan singkat</h4>
              <p>Provider = Nama penyedia layanan internet</p>
              <p>Bandwidth = Kecepatan internet (mbps)</p>
            </div>
          </div>

          {{-- Provider --}}
          <div class="form-row">
            <div class="form-group col-4">
              <label for="inputState">Provider</label>
              <select id="inputState" class="form-control" name="provider" required>
                <option selected>Provider anda saat ini..</option>
                <option value="My Republic">My Republic</option>
                <option value="Indihome">Indihome</option>
                <option value="Groovy">Groovy</option>
                <option value="biznet">Biznet</option>
                <option value="CBN Fiber">CBN Fiber</option>
                <option value="First Media">First Media</option>
                <option value="Oxygen.id">Oxygen.id</option>
                <option value="XL Home">XL Home</option>
                <option value="indosat GIG">Indosat GIG</option>
                <option value="Orbit Telkomsel">Orbit Telkomsel</option>
                <option value="MNC PLay">MNC PLay</option>
                <option value="Transvision">Transvision</option>
                <option value="Megavision">Megavision</option>
              </select>
            </div>
            <div class="form-group col-4">
              <label for="bandwidth">Bandwidth</label>
              <input type="number" class="form-control" id="bandwidth" name="bandwidth" placeholder="cth. 50" min="0" max="999" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
            </div>
            <div class="form-group col-4">
              <label for="biayaBulanan">Biaya Bulanan</label>
              <input type="number" class="form-control" id="biayaBulanan" name="biayaBulanan" placeholder="cth. 400000" min="0" max="9999999" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
            </div>
          </div>

          <hr class="shadow-lg bg-white mt-5 mb-5">

          <div class="row">
            <div class="col text-center">
              <h4>Penjelasan singkat</h4>
              <p>Penggunaan dibagi atas 3 macam yaitu:</p>
              <p>1. Ringan = Chatting, searching ringan</p>
              <p>2. Sedang = Streaming ringan (ig,facebook,dll), </p>
              <p>3. Berat  = Streaming, Upload Video, Gaming Berat</p>
            </div>
          </div>

          {{-- Penggunaan --}}
          <div class="form-row mt-5 " id="formpenghuni">
            <div class="form-col col-md-2 mb-4">
              <div class="form-group">
                <label for="jumlahPenghuni">Jumlah penghuni</label>
                <input id="jumlahpenghuni" type="number" name="jumlahPenghuni" class="form-control" placeholder="Jumlah penghuni.." min="0" max="50" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
              </div>
            </div>

            <div class="form-col col-md-4 offset-md-1 mb-4">
              <div id="penghuni"></div>
            </div>

            <div class="form-col col-md-4 offset-md-1 mb-4">
              <div id="formgadget"></div>
            </div>
          </div>

          <hr class="shadow-lg bg-white mb-5">

          
          <div class="form-group text-center">
            <div class="row">
              <div class="col">
                <label for="kesimpulan">Kesimpulan pemakaian untuk kebutuhan:</label>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div id="kesimpulan" class="btn-group btn-group-toggle" data-toggle="buttons" required>
                  <label class="btn border border-dark btn-warning" style="background-color: #e0606d">
                    <input type="radio" name="kesimpulan" id="kesimpulan" value="kurang" required> Kurang
                  </label>
                  <label class="btn border border-dark btn-warning" style="background-color: #64af75">
                    <input type="radio" name="kesimpulan" id="kesimpulan" value="cukup" required> Cukup
                  </label>
                  <label class="btn border border-dark btn-warning" style="background-color: #62acb8">
                    <input type="radio" name="kesimpulan" id="kesimpulan" value="Lebih" required> Lebih
                  </label>
                </div>
              </div>
            </div>
          </div>
          
          <hr class="shadow-lg bg-white mt-5 mb-5">

          <div class="form-row mt-5">
            <div class="col">
              <center>
                {!! NoCaptcha::renderJs('fr', false, 'recaptchaCallback') !!}
              {!! NoCaptcha::display() !!}
              </center>
              
               </div>
          </div>
          
          <div class="text-center mt-3">
            <button type="submit" class="btn serahkan" >Serahkan</button>
          </div>

        </form>

      </div>
    </div>

    <div class="row footer mt-5 p-2">
      <div class="col text-center ">
        <h5 style="font-size: 15px" class="text-center">Copyright &copy; 2021 Ammaridho </h5>
      </div>
    </div>
    
  </div>

  
  <script>
    $('#jumlahpenghuni').on("keyup change",function() {
      var jumlahpenghuni = $('#jumlahpenghuni').val();
      
      $.get("{{route('penghuni')}}",{jumlahpenghuni:jumlahpenghuni}, function(data) {
        $("#penghuni").html(data);
      });
    });

    var recaptchaCallback = function () {
      alert('bisaa');
    }

    
  </script>




@endsection