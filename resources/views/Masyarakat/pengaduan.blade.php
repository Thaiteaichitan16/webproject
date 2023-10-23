<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        /* Style untuk tampilan daftar produk */
        body{
          background: linear-gradient(120deg,#ffcfdf,#a5dee5 );
        }
        
          button{
                  background-color: #ffcfdf;
                  color: white;
      
              }
              
      
            
      </style>
</head>
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
                    <a class="nav-link active" aria-current="page" href="/tampilankedua">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Laporan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/pengaduan">Pengaduan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Riwayat Laporan</a>
                  </li>
                    
                </ul>
                <form class="d-flex">
                  {{-- <button type="button" class="Masuk"><a href="#">Masuk</a></button> --}}
                  <button type="button" class="Logout"><a href="/logout">Logout</a></button>
                </form>
              </div>
            </div>
          </nav>
          
    
          </head>
          
                  </tbody>
              </table>


        <div id="main" class="d-flex align-items-center vh-100">
                    <div class="container">
                            <div class="card shadow m-auto" style="width: 400px">
                                <div class="card-body">
                                  <div class="alert alert-danger" role="alert">
                                    Terimakasih Sudah Melapor!
                                  </div>
                                    <h4 class="h4">Tulis Laporan Anda</h4>
                                    @if (session('pesan'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('pesan')}}
                                      </div>
                                    @endif
                                    @if ($errors->any())
                                    <div class="alert alert-success" role="alert">
                                        Anda Gagal Lapor
                                      </div>
                                    @endif
                                        <form action="{{url('masyarakat/pengaduan')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="nik" class="form-label">NIK</label>
                                                <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                                                @error('nik')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                <div class="mb-3">    
                                                <label for="tanggal_pengaduan" class="form-label">Tanggal Pengaduan</label>
                                                <input type="date" class="form-control" name="tanggal_pengaduan" id="nama" placeholder="tanggal_pengaduan">
                                                @error('tanggal_pengaduan')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                </div>
                                                <div class="mb-3">    
                                                    <label for="formFile" class="form-label">Foto</label>
                                                    <input class="form-control" type="file" name="foto" id="formFile">
                                                @error('foto')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                                <div class="mb-3">    
                                                    <label for="isi_laporan" class="form-label">Isi Laporan</label>
                                                    <textarea class="form-control" name="isi_laporan" id="isi_laporan" rows="3"></textarea>
                                                @error('isi_laporan')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                </div>
                                                <button class="btn form-control btn-primary mb-2">Lapor</button>
                                                <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                                        </form>    
                                </div>    
                            </div>    
                    </div>   
        </div>    
</body>
</html>