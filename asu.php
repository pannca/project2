<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nilai Kompeten/Tidak Kompeten</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-primary-subtle text-primary-emphasis"> 
  
    <form method="post" action="">
        <h1>CEK KETERANGAN NILAI</h1>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required><br><br>
        <label for="nilai">Nilai</label>
        <input type="number" name="nilai" id="nilai" required><br><br>
        <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="submit" name="submit">Kirim</button>
        </div>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        $keterangan = '';
        $emoticon = '';

        if ($nilai >= 71 && $nilai <= 100) {
            $keterangan = 'Kompeten';
            $emoticon = '<img src ="smile.svg">';
        } else {
            $keterangan = 'Belum Kompeten';
            $emoticon = '<img src ="betmut.svg">';
        }

        echo "<div class='output'>";
        echo "<div class='atas'>";
        echo "$emoticon";
        echo "$keterangan <br>";
        echo "</div>";
        echo "<div class='bawah'>";
        echo "Nama : $nama<br>";
        echo "Nilai : $nilai<br> </div>";
        echo "</div>";
    }
    ?>
  </body>
</html>

    