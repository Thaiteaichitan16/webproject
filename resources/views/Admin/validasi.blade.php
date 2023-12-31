<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi|Admin</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/icons/bootstrap-icons.min.css">
    
    <style>
        * {
            font-family: 'poppins', sans serif;
        }
        .headertabel{
            background-color:#a5dee5;
        }
        body{
            background: linear-gradient(100deg,#D8B4F8,#a5dee5,#ffcfdf);
        }
        button{
			background-color: #ffcfdf;
			color: white;

        }
    </style>
</head>
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
            <a class="nav-link" href="{{url('admin/tanggapan')}}">Tanggapan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/validasi')}}">Validasi</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Riwayat Laporan</a>
          </li> --}}
            
        </ul>
        <form class="d-flex">
          {{-- <button type="button" class="Masuk"><a href="#">Masuk</a></button> --}}
          <button type="button" class="Logout"><a href="/logout">Logout</a></button>
          <button type="button" class="Register"><a href="{{url('admin/register')}}">Registrasi</a></button>
        </form>
      </div>
    </div>
  </nav>
  
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
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Tanggal</th>
                                        <th>Isi Laporan</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                      @foreach ($val as $aduan)
                                      <tr>
                                        <td>{{$aduan->id_pengaduan}}</td>
                                        <td>{{$aduan->nik}}</td>
                                        <td>{{$aduan->tgl_pengaduan}}</td>
                                        <td>{{$aduan->isi_laporan}}</td>
                                        <td><img src="/upload_data/{{$aduan->foto}}" alt="" style="width:50px"></td>
                                        
                                        <td>
                                          <a href="{{url('admin/status/'.$aduan->id_pengaduan)}}" class="btn btn-secondary"><i class="bi bi-pencil-fill">Validasi</i></a>
                                          
                                        </td>
                                        <td></td>
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
        
</body>
</html>
