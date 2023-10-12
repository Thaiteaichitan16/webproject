<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/icons/bootstrap-icons.min.css">
</head>
<body class="bg-body-secondary">
    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
                <h4 class="card-title">Data</h4>
                <a href="{{url('siswa/tambah')}}" class="btn btn-light">
                    <i class="bi bi-plus-circle-fill"></i> Tambah
                </a>
            </div>
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Tanggal</th>
                            <th >Foto </th>
                            <th >Isi Laporan</th>
                            <th >validasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datasiswa as $item)
                        <tr>
                            <td>{{$item->}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->no_telp}}</td>
                            <td>{{$item->kode_kelas}}</td>
                            <td >
                                <a href="{{url('siswa/edit/'.$item->nisn)}}" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="{{url('siswa/hapus/'.$item->nisn)}}" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>