<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penentuan Waktu</title>
    <link rel="stylesheet" href="ske2.css">

</head>
<body>
    <h1>Penentuan Waktu</h1>
    <form method="post">
        <label for="jam">Masukkan Jam (HH:MM):</label>
        <input type="text" id="jam" name="jam" required>
        <button type="submit">Cek Waktu</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST['jam'];
        $waktu = explode(":", $jam);
        $jamInt = (int)$waktu[0];
        $menitInt = (int)$waktu[1];
        if ($jamInt >= 0 && $jamInt < 4) {
            echo "<p class='dini-hari'>Waktu $jam = Dini hari</p>";
        } elseif ($jamInt >= 4 && $jamInt < 10) {
            echo "<p class='pagi'>Waktu $jam = Pagi</p>";
        } elseif ($jamInt >= 10 && $jamInt < 15) {
            echo "<p class='siang'>Waktu $jam = Siang</p>";
        } elseif ($jamInt >= 15 && $jamInt < 17.5) {
            echo "<p class='sore'>Waktu $jam = Sore</p>";
        } elseif ($jamInt >= 17.5 && $jamInt < 18.5) {
            echo "<p class='petang'>Waktu $jam = Petang</p>";
        } else {
            echo "<p class='malam'>Waktu $jam = Malam</p>";
        }        
        } else {
            echo "Waktu tidak valid. Masukkan jam antara 00:00 - 23:59.";
        }
    ?>
</body>
</html>