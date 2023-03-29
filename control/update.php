<?php
include 'config.php';
if (isset($_POST["updateakun"])) {
    //variabel yang akan di input
    $idakn = $_POST['id'];
    $namaadmin = $_POST['namaadmin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //input database
    $result = mysqli_query($koneksi, "Update akun set namaadmin='$namaadmin',username='$username',password='$password where id='$idakn'");
    //pesan jika berhasil atau tidak
    if (!$result) {
        echo "<script>alert('Gagal Di Update!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Berhasil Di Update!');window.location='../view/registrasiadmin.php?id=$idakn';</script>";
    }
}

if (isset($_POST["updatepemesanan"])) {
    //variabel yang akan di input
    $idpemesanan = $_POST['id'];
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
    $result = mysqli_query($koneksi, "Update pemesanan set nama='$nama',alamat='$alamat',email='$email',telepon='$telepon',tanggalpemotretan='$tanggalpemotretan',jenispaket='$jenispaket',pembayaranmasuk='$pembayaranmasuk',keterangan='$keterangan' where id='$idpemesanan'");
    //pesan jika berhasil atau tidak
    if (!$result) {
        echo "<script>alert('Gagal Di Update!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Berhasil Di Update!');window.location='../view/pelanggan.php?id=$idpemesanan';</script>";
    }
}

if (isset($_POST["updatepemesananpribadi"])) {
    //variabel yang akan di input
    $idpemesananpribadi = $_POST['id'];
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
    $result = mysqli_query($koneksi, "Update pemesananpribadi set tanggaltranksaksipribadi='$tanggaltranksaksipribadi',nama='$nama',alamat='$alamat',email='$email',telepon='$telepon',jampemotretan='$jampemotretan',tanggalpemotretan='$tanggalpemotretan',jenispaket='$jenispaket',pembayaranmasuk='$pembayaranmasuk',keterangan='$keterangan' where id='$idpemesananpribadi'");
    //pesan jika berhasil atau tidak
    if (!$result) {
        echo "<script>alert('Gagal Di Update!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Berhasil Di Update!');window.location='../view/pelanggan.php?id=$idpemesananpribadi';</script>";
    }
}

if (isset($_POST["updatepaket"])) {
    //variabel yang akan di input
    $idpaket = $_POST['id'];
    $namapaket = $_POST['namapaket'];
    $hargapaket = $_POST['hargapaket'];
    $deskripsi = $_POST['deskripsi'];
    $ekstensi_diperbolehkan = array('pdf', 'jpeg', 'png', 'jpg');
    $nama = $_FILES['gambar']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran  = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    if (empty($nama)) {
        $result = mysqli_query($koneksi, "Update paket set namapaket='$namapaket',hargapaket='$hargapaket',deskripsi='$deskripsi' where id='$idpaket'");
    } else {

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, '../img/datapaket/' . $nama);
            $result = mysqli_query($koneksi, "Update paket set namapaket='$namapaket',hargapaket='$hargapaket',deskripsi='$deskripsi',gambar='$nama' where id='$idpaket'");
        }
    }

    //pesan jika berhasil atau tidak
    if (!$result) {
        echo "<script>alert('Gagal Di Update!');history.go(-1);</script>";
    } else {
        echo "<script>alert('Berhasil Di Update!');window.location='../view/paketphoto.php?id=$idpaket';</script>";
    }
}
