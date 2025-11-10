<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
</head>
<body>
    <h3>Matematika Sederhana</h3>
    <form action="{{route('bagi-action')}}" method="post">
        @csrf
        <label for="angka1">Angka 1:</label>
        <input type="number" id="angka1" name="angka1" required><br><br>

        <label for="angka2">Angka 2:</label>
        <input type="number" id="angka2" name="angka2" required><br><br>

        <input type="submit" value="Hitung">
    </form>
    <h2>Hasil Bagi Adalah : {{ $bagi ?? 0 }}</h2>
</body>
</html>