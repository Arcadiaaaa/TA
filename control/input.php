<?php
include 'config.php';
if (isset($_POST["inputakun"])) {
    //variabel yang akan di input
    $namaadmin = $_POST['namaadmin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //input database
    $result = mysqli_query($koneksi, "INSERT INTO akun (namaadmin,username,password) VALUES ('$namaadmin','$username','$password')");
    //pesan jika berhasil atau tidak
    if (!$result) {
        echo "<script>alert('Gagal!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Berhasil DiInput!');window.location='../view/registrasiadmin.php';</script>";
    }
}

if (isset($_POST["inputpemesanan"])) {
    //variabel yang akan di input  
    $tanggaltranksaksi = $_POST['tanggaltranksaksi'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $tanggalpemotretan = $_POST['tanggalpemotretan'];
    $jenispaket = $_POST['jenispaket'];
    $pembayaranmasuk = $_POST['pembayaranmasuk'];
    $keterangan = $_POST['keterangan'];
    //input database
    $result = mysqli_query($koneksi, "INSERT INTO pemesanan (tanggaltranksaksi,nama,alamat,email,telepon,tanggalpemotretan,jenispaket,pembayaranmasuk,keterangan) VALUES ('$tanggaltranksaksi','$nama','$alamat','$email','$telepon','$tanggalpemotretan','$jenispaket','$pembayaranmasuk','$keterangan')");
    //pesan jika berhasil atau tidak
    if (!$result) {
        echo "<script>alert('Gagal!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Berhasil DiInput!');window.location='../view/pelanggan.php';</script>";
    }
}

if (isset($_POST["inputpemesananpribadi"])) {
    //variabel yang akan di input
    $tanggaltranksaksipribadi = $_POST['tanggaltranksaksipribadi'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $tanggalpemotretan = $_POST['tanggalpemotretan'];
    $jampemotretan = $_POST['jampemotretan'];
    $jenispaket = $_POST['jenispaket'];
    $pembayaranmasuk = $_POST['pembayaranmasuk'];
    $keterangan = $_POST['keterangan'];
    //input database
    $result = mysqli_query($koneksi, "INSERT INTO pemesananpribadi (tanggaltranksaksipribadi,nama,alamat,email,telepon,tanggalpemotretan,jampemotretan,jenispaket,pembayaranmasuk,keterangan) VALUES ('$tanggaltranksaksipribadi','$nama','$alamat','$email','$telepon','$tanggalpemotretan','$jampemotretan','$jenispaket','$pembayaranmasuk','$keterangan')");
    //pesan jika berhasil atau tidak
    if (!$result) {
        echo "<script>alert('Gagal!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Berhasil DiInput!');window.location='../view/pelanggan.php';</script>";
    }
}

if (isset($_POST["inputpaket"])) {
    //variabel yang akan di input

    $namapaket = $_POST['namapaket'];
    $hargapaket = $_POST['hargapaket'];
    $deskripsi = $_POST['deskripsi'];
    $ekstensi_diperbolehkan = array('pdf', 'jpeg', 'png', 'jpg');
    $nama = $_FILES['gambar']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran  = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../img/datapaket/' . $nama);
        $result = mysqli_query($koneksi, "INSERT INTO paket (namapaket,hargapaket,deskripsi,gambar) VALUES ('$namapaket','$hargapaket','$deskripsi','$nama')");
        if (!$result) {
            echo "<script>alert('Gagal!');history.go(-1);</script>";
        } else {
            echo "<script>alert('Berhasil DiInput!');window.location='../view/paketphoto.php';</script>";
        }
    }
}
