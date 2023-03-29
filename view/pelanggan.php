<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<?php include '../model/head.php'; ?>

<body>

    <!-- head content -->
    <?php include '../model/headcontent.php'; ?>
    <!-- end head content -->

    <!-- menu -->
    <?php include '../model/menu.php'; ?>
    <!-- end menu -->
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin page-header -->
        <h1 class="page-header">Data Pelanggan</h1>
        <!-- end page-header -->

        <!-- <a href="pemesanan.php"><button type="submit" class="btn btn-primary">Tambah Pemesanan</button></a><br><br> -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-12 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Data Pelanggan Event </h4>
                    </div>
                    <div class="panel-body">
                        <table id="data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Tranksaksi</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Tanggal Pemotretan</th>
                                    <th>Jenis Paket</th>
                                    <th>Pembayaran Masuk</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $result1 = mysqli_query($koneksi, "SELECT * FROM pemesanan ");
                                while ($user_data1 = mysqli_fetch_array($result1)) {
                                    $id = $user_data1['id'];
                                    $nama = $user_data1['nama'];
                                    $tanggaltranksaksi = $user_data1['tanggaltranksaksi'];
                                    $tanggalpemotretan = $user_data1['tanggalpemotretan'];
                                    $pembayaranmasuk = $user_data1['pembayaranmasuk'];
                                    $keterangan = $user_data1['keterangan'];
                                    $jenispaket = $user_data1['jenispaket'];
                                    $addr = $user_data1['alamat'];
                                    $telf = $user_data1['telepon'];
                                    $mail = $user_data1['email'];

                                    $result2 = mysqli_query($koneksi, "SELECT * FROM paket where namapaket='$jenispaket' ");
                                    while ($user_data2 = mysqli_fetch_array($result2)) {

                                        $namapaket = $user_data2['namapaket'];
                                    }

                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $no++; ?>
                                        </td>
                                        <td>
                                            <?php echo $tanggaltranksaksi; ?>
                                        </td>
                                        <td>
                                            <a href="#" title="<?= ' ' . $telf . ', ' . $mail . ', ' . $addr; ?>"><?php echo $nama; ?></a>
                                        </td>
                                        <td>
                                            <?php echo $tanggalpemotretan; ?>
                                        </td>
                                        <td>
                                            <?php echo $jenispaket; ?>
                                        </td>
                                        <td>
                                            Rp. <?php echo number_format($pembayaranmasuk); ?>
                                        </td>
                                        <td>
                                            <?php echo $keterangan; ?>
                                        </td>
                                        <td><a href="editpelanggan.php?id=<?php echo $id; ?>">
                                                <button type="submit" class="btn btn-info">Ubah</button></a> &nbsp;

                                            <a href="../control/hapus.php?hal=pemesanan&idhapus=<?php echo $id; ?>"><button type="submit" class="btn btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->

    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin page-header -->
        <h1 class="page-header">Data Pelanggan Pribadi</h1>
        <!-- end page-header -->

        <!-- <a href="pemesanan.php"><button type="submit" class="btn btn-primary">Tambah Pemesanan</button></a><br><br> -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-12 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Data Pelanggan Pribadi </h4>
                    </div>
                    <div class="panel-body">
                        <table id="data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Tranksaksi</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Tanggal Pemotretan</th>
                                    <th>Jam Pemotretan</th>
                                    <th>Jenis Paket</th>
                                    <th>Pembayaran Masuk</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $result3 = mysqli_query($koneksi, "SELECT * FROM pemesananpribadi ");
                                while ($user_data3 = mysqli_fetch_array($result3)) {
                                    $id = $user_data3['id'];
                                    $tanggaltranksaksipribadi = $user_data3['tanggaltranksaksipribadi'];
                                    $nama = $user_data3['nama'];
                                    $tanggalpemotretan = $user_data3['tanggalpemotretan'];
                                    $jampemotretan = $user_data3['jampemotretan'];
                                    $pembayaranmasuk = $user_data3['pembayaranmasuk'];
                                    $keterangan = $user_data3['keterangan'];
                                    $jenispaket = $user_data3['jenispaket'];
                                    $addr = $user_data3['alamat'];
                                    $telf = $user_data3['telepon'];
                                    $mail = $user_data3['email'];

                                    $result4 = mysqli_query($koneksi, "SELECT * FROM paket where namapaket='$jenispaket' ");
                                    while ($user_data4 = mysqli_fetch_array($result4)) {

                                        $namapaket = $user_data4['namapaket'];
                                    }

                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $no++; ?>
                                        </td>
                                        <td>
                                            <?php echo $tanggaltranksaksipribadi; ?>
                                        </td>
                                        <td>
                                            <a href="#" title="<?= ' ' . $telf . ', ' . $mail . ', ' . $addr; ?>"><?php echo $nama; ?></a>
                                        </td>
                                        <td>
                                            <?php echo $tanggalpemotretan; ?>
                                        </td>
                                        <td>
                                            <?php echo $jampemotretan; ?>
                                        </td>
                                        <td>
                                            <?php echo $jenispaket; ?>
                                        </td>
                                        <td>
                                            Rp. <?php echo number_format($pembayaranmasuk); ?>
                                        </td>
                                        <td>
                                            <?php echo $keterangan; ?>
                                        </td>
                                        <td><a href="editpelangganpribadi.php?id=<?php echo $id; ?>">
                                                <button type="submit" class="btn btn-info">Ubah</button></a> &nbsp;

                                            <a href="../control/hapus.php?hal=pemesananpribadi&idhapuspribadi=<?php echo $id; ?>"><button type="submit" class="btn btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->

    <!-- begin theme-panel -->
    <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <h5 class="m-t-0">Color Theme</h5>
            <ul class="theme-list clearfix">
                <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a>
                </li>
            </ul>
            <div class="divider"></div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Header Styling</div>
                <div class="col-md-7">
                    <select name="header-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">inverse</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label">Header</div>
                <div class="col-md-7">
                    <select name="header-fixed" class="form-control input-sm">
                        <option value="1">fixed</option>
                        <option value="2">default</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                <div class="col-md-7">
                    <select name="sidebar-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">grid</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label">Sidebar</div>
                <div class="col-md-7">
                    <select name="sidebar-fixed" class="form-control input-sm">
                        <option value="1">fixed</option>
                        <option value="2">default</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                <div class="col-md-7">
                    <select name="content-gradient" class="form-control input-sm">
                        <option value="1">disabled</option>
                        <option value="2">enabled</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Content Styling</div>
                <div class="col-md-7">
                    <select name="content-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">black</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-12">
                    <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end theme-panel -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/js/table-manage-default.demo.min.js"></script>
    <script src="assets/js/apps.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            TableManageDefault.init();
        });
    </script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-53034621-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>