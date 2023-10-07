<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan utama</title>
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

{{-- // tampilan surat  --}}
  <div>
    <form action="" method="post">
    <h1>Layanan Aspirasi dan Panduan Online Masyarakat</h1>
    <header>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</header>
  </div>
    </form>
</div>
</head>

		</tbody>
	</table>
</body>
</html>