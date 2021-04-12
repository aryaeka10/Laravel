<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Data Buku</h1>
    <p class="text-center">Laporan Data Buku Tahun 2021</p>
    <br/>
    <table id="table-data" class="table table-bordered">
    <thead>
    <tr>
        <th>NO</th>
        <th>JUDUL</th>
        <th>PENULIS</th>
        <th>TAHUN</th>
        <th>PENERBIT</th>
        <th>COVER</th>
    </tr>
    </thead>
    <tbody>
    @php $no=1; @endphp
    @foreach($books as $book)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $book->judul }}</td>
        <td>{{ $book->penulis }}</td>
        <td>{{ $book->tahun }}</td>
        <td>{{ $book->penerbit }}</td>
        <td>
            @if($book->cover !== null)
                <img src="{{ public_path('storage/cover_buku/'.$book->cover)}}" width="80px"/>
                                                    @else
                                                    [Gambar tidak tersedia]
                                                    @endif
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
</body>
</html>