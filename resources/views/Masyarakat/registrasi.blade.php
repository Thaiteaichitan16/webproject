<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
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