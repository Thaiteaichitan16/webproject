<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register|Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
         body{
    background: linear-gradient(120deg,#ffcfdf,#a5dee5 );
  }
  * {
            font-family: 'poppins', sans serif;
        }
    </style>
</head>
<body>
     {{-- tampilan navbar --}}
     <div class="b-example-divider"></div>

     <nav class="py-2 bg-body-tertiary border-bottom">
       <div class="container d-flex flex-wrap">
         <ul class="nav me-auto">
           <li class="nav-item"><a href="{{url('masyarakat/awal')}}" class="nav-link link-body-emphasis px-2 active" aria-current="page">Home</a></li>
           <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Syarat</a></li>
           <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Ketentuan</a></li>
 
         </ul>
         <ul class="nav">
           <li class="nav-item"><a href="{{url('masyarakat/login')}}" class="nav-link link-body-emphasis px-2">Login</a></li>
           <li class="nav-item"><a href="{{url('masyarakat/registrasi')}}" class="nav-link link-body-emphasis px-2">Daftar</a></li>
         </ul>
       </div>
     </nav>
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
                    <form action="{{url('masyarakat/registrasi')}}" method="POST">
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