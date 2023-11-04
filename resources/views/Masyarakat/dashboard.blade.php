<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard|Masyarakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
</head>
<style>
  /* Style untuk tampilan daftar produk */
  body{
    background: linear-gradient(100deg,#ffcfdf,#a5dee5,#D8B4F8 );
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
          <a class="nav-link active" aria-current="page" href="{{url('masyarakat/masyarakat')}}"></a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">Laporan</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="{{url('masyarakat/pengaduan')}}">Pengaduan</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">Riwayat Laporan</a>
        </li> --}}
          
      </ul>
      <form class="d-flex">
        {{-- <button type="button" class="Masuk"><a href="#">Masuk</a></button> --}}
        <button type="button" class="Logout"><a href="{{url('masyarakat/logout')}}">Logout</a></button>
      </form>
    </div>
  </div>
</nav>

<div>
  <h1>Selamat Datang di Website SIAPLAPOR</h1>
  <header> Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang </header>
</div>

		</tbody>
  
</body>
</html>