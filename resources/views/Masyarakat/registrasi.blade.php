<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .container{
            padding: 30px 0;

        }
        * {
            font-family: 'poppins', sans serif;
        }
        body{
    background: linear-gradient(120deg,#ffcfdf,#a5dee5 );
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
                <a class="nav-link active" aria-current="page" href="/registrasi">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              
                
            </ul>
          </div>
        </div>
      </nav>
      </head>
              </tbody>
          </table>
          {{-- tampilan regis --}}
    <div class="main" class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px">
                <div class="card-body">
                    
                    <h4 class="h4">Daftarkan Diri Anda</h4>

                        @if (session('pesan'))
                        <div class="alert alert-dark" role="alert">
                            {{session('pesan')}}
                          </div>
                      @endif
                    {{-- jika validasi gagal --}}
                      @if ($errors->any())
                      <div class="alert alert-dark" role="alert">
                          Gagal Registrasi
                        </div>
                    @endif
                    <form action="{{url('simpan')}}" method="POST">
                        <div class="mb-3">
                            @csrf
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                            @error('nik')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                            @error('nama')
                            <div class="form-text">
                                {{$message}}
                            </div>
                            @enderror
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            @error('username')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                            @error('password')
                            <div class="form-text">
                                {{$message}}
                            </div>
                            @enderror
                            <label for="telp" class="form-label">No Telp</label>
                            <input type="text" class="form-control" name="telp" id="telp" placeholder="No Telp">
                            @error('telp')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <button class="btn form-control btn-primary mb-2">Registrasi</button>
                        <button class="btn form-control btn-outline-success mb-2">Batal</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body> 
</html>