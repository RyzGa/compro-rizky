<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tambahan</title>
</head>
<body>
    <h3>Matematika Sederhana</h3>
    <form action="{{route('tambah-action')}}" method="post">
        @csrf
        <label for="">Angka 1</label>
        <input type="text" placeholder="Masukan angka" name="angka1" required>
        <br>
        <label for="">Angka 2</label>
        <input type="text" placeholder="Masukan angka" name="angka2" required>
        <br><br>
        <button>Hitung</button>
    </form>

    <h2>Jumlahnya Adalah : {{ $jumlah ?? 0 }}</h2>
</body>
</html>