<?php
$hasil = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $hasil = $angka1 + $angka2;
}
?>

<form action="" method="post">
    <input type="number" name="angka1" placeholder="angka 1" required>
    <input type="number" name="angka2" placeholder="angka 2" required>
    <button type="submit">Jumlahkan</button>
</form>

<h2><?php echo $hasil; ?></h2>
