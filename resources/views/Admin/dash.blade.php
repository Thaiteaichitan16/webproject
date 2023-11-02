<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard|Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/icons/bootstrap-icons.min.css">
</head>
<style>
  /* Style untuk tampilan daftar produk */
  body{
    background: linear-gradient(100deg,#D8B4F8,#a5dee5,#ffcfdf);
  }
  
    button{
			background-color: #ffcfdf;
			color: white;

        }
        
        h1{
        color: black;
        font-size: 30px;
        display: flex;
        justify-content: center;
        padding: 100px 0 10px 0;
        }
        header{
        color: black;
        font-size: 30px;
        display: flex;
        justify-content: center;
        padding: 10px 0 10px 0;
        }

      
</style>

<body>
    {{-- tampilan navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAP LAPOR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/admin')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tanggapan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('admin/validasi')}}">Validasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Riwayat Laporan</a>
        </li>
          
      </ul>
      <form class="d-flex">
        {{-- <button type="button" class="Masuk"><a href="#">Masuk</a></button> --}}
        <button type="button" class="Logout"><a href="{{url('admin/logout')}}">Logout</a></button>
      </form>
    </div>
  </div>
</nav>
<div>
  <h1>Selamat Datang di Website SIAPLAPOR</h1>
  <header> Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang </header>
</div>

{{-- validasi --}}
<body class="bg-body-secondary">
  <div class="container pt-5 my-4">
      <div class="card shadow">
          <div class="card" >
              <h5 class="card-header headertabel">Status Pengaduan</h5>
              <div class="card-body">
                  {{-- <h5 class="card-title"></h5> --}}
                  <table class=" table table-striped-columns">
                      <thead>
                                      <th>NIK</th>
                                      <th>Tanggal</th>
                                      <th>Isi Laporan</th>
                                      <th>Foto</th>
                                      <th>Status</th>
                                      
                                  </thead>
                                  <tbody>
                                    @foreach ($val as $aduan)
                                    <tr>
                                      <td>{{$aduan->nik}}</td>
                                      <td>{{$aduan->tgl_pengaduan}}</td>
                                      <td>{{$aduan->isi_laporan}}</td>
                                      <td>{{$aduan->foto}}</td>
                                
                                      <td>
                                       @switch($aduan->status)
                                           @case('proses')
                                               proses
                                               @break
                                           @case('selesai')
                                               selesai
                                               @break
                                           @default
                                               tertunda
                                       @endswitch
                                        
                                      </td>
                                      
                                    </tr>
                                    @endforeach
                                  </tbody>
                              </table></p>
                          </div>
                      </div>
                  </div>
                  </div>
                {{-- akhir nambah konten --}}
                <script src="js\bootstrap.bundle.min.js"></script>

{{-- // tampilan surat  --}}
{{-- @yield('isisurat') --}}
		
  
</body>
</html>