<?php
include 'config.php';

$hal = $_GET['hal'];
if ($hal == 'akun') {
    $idhpsakn = $_GET['idhapusakun'];
    $result = mysqli_query($koneksi, "DELETE FROM akun WHERE id='$idhpsakn'");
    if (!$result) {
        echo "<script>alert('Gagal!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Berhasil DiHapus!');window.location='../view/registrasiadmin.php';</script>";
    }
}

$hal = $_GET['hal'];
if ($hal == 'pemesanan') {
    $idhapus = $_GET['idhapus'];
    $result = mysqli_query($koneksi, "DELETE FROM pemesanan WHERE id='$idhapus'");
    if (!$result) {
        echo "<script>alert('Gagal!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Berhasil DiHapus!');window.location='../view/pelanggan.php';</script>";
    }
}

$hal = $_GET['hal'];
if ($hal == 'pemesananpribadi') {
    $idhapuspribadi = $_GET['idhapuspribadi'];
    $result = mysqli_query($koneksi, "DELETE FROM pemesananpribadi WHERE id='$idhapuspribadi'");
    if (!$result) {
        echo "<script>alert('Gagal!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Berhasil DiHapus!');window.location='../view/pelanggan.php';</script>";
    }
}

if ($hal == 'paket') {
    $idhpspaket = $_GET['idhapuspaket'];
    $result = mysqli_query($koneksi, "DELETE FROM paket WHERE id='$idhpspaket'");
    if (!$result) {
        echo "<script>alert('Gagal!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Berhasil DiHapus!');window.location='../view/paketphoto.php';</script>";
    }
}
