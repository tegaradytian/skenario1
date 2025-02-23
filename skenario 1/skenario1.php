<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan nilai</title>
    <link rel="stylesheet" href="ske1.css">
</head>

<body>
    <h1>Daftar Nilai</h1>
    <form method="post">
        <label for="nilai">Masukkan nilai</label>
        <input type="number" id="nilai" name="nilai" required>
        <button type="submit">Cek nilai</button>
    </form>

    <!-- Hasil akan ditampilkan di sini -->
    <div class="hasil">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai = $_POST['nilai'];
            $kelas = ""; // Kelas CSS untuk styling

            if ($nilai >= 90 && $nilai <= 100) {
                $kelas = "a";
                echo "<p class='php-output $kelas'>Nilai $nilai = A</p>";
            } elseif ($nilai >= 80 && $nilai <= 89) {
                $kelas = "b";
                echo "<p class='php-output $kelas'>Nilai $nilai = B</p>";
            } elseif ($nilai >= 70 && $nilai <= 79) {
                $kelas = "c";
                echo "<p class='php-output $kelas'>Nilai $nilai = C</p>";
            } elseif ($nilai >= 0 && $nilai <= 69) {
                $kelas = "d";
                echo "<p class='php-output $kelas'>Nilai $nilai = D</p>";
            } else {
                $kelas = "error";
                echo "<p class='php-output $kelas'>Nilai wajib di antara 0 - 100</p>";
            }
        }
        ?>
    </div>

</body>

</html>
