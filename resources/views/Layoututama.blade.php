<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layoututama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
  /* Style untuk tampilan daftar produk */
  body{
    background: linear-gradient(120deg,#ffcfdf,#a5dee5 );
  }
  * {
            font-family: 'poppins', sans serif;
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
    <div class="b-example-divider"></div>

    <nav class="py-2 bg-body-tertiary border-bottom">
      <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2 active" aria-current="page">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Syarat</a></li>
          <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Ketentuan</a></li>

        </ul>
        <ul class="nav">
          <li class="nav-item"><a href="{{url('masyarakat/login')}}" class="nav-link link-body-emphasis px-2">Login</a></li>
          <li class="nav-item"><a href="{{url('masyarakat/registrasi')}}" class="nav-link link-body-emphasis px-2">Daftar</a></li>
        </ul>
      </div>
    </nav>

{{-- // tampilan surat  --}}
  @yield('isisurat')
		</tbody>
	
</body>
</html>