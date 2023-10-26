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
    </style>
</head>
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
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                      @foreach ($val as $aduan)
                                      <tr>
                                        <td>{{$aduan->nik}}</td>
                                        <td>{{$aduan->tgl_pengaduan}}</td>
                                        <td>{{$aduan->isi_laporan}}</td>
                                        <td>{{$aduan->foto}}</td>
                                        <td>{{$aduan->status}}</td>
                                        <td>
                                          <a href="#" class="btn btn-secondary"><i class="bi bi-pencil-fill"></i></a>
                                          <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
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
        
</body>
</html>
