@@ -0,0 +1,61 @@
<!-- index.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Absensi Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Form Absensi Mahasiswa</h2>

    <form method="POST">
        <label>Nama Mahasiswa</label>
        <input type="text" name="nama" placeholder="Masukkan nama..." required>

        <label>Status Kehadiran</label>
        <select name="status" required>
            <option value="">-- Pilih Status --</option>
            <option value="Hadir">Hadir</option>
            <option value="Izin">Izin</option>
            <option value="Sakit">Sakit</option>
            <option value="Tidak Hadir">Tidak Hadir</option>
        </select>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['submit'])) {

        $nama = $_POST['nama'];
        $status = $_POST['status'];

        echo "<div class='hasil'>";
        echo "<h3>Hasil Absensi</h3>";
        echo "Nama Mahasiswa : <b>$nama</b><br>";
        echo "Status : <b>$status</b><br><br>";


if($status == "Hadir") {
            echo "Anda hadir hari ini";
        } 
        else if($status == "Izin") {
            echo "Anda izin";
        } 
        else if($status == "Sakit") {
            echo "Semoga cepat sembuh";
        } 
        else {
            echo "Anda tidak hadir hari ini";
        }

        echo "</div>";
    }
    ?>

</div>

</body>
</html>
