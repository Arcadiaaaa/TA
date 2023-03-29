<!DOCTYPE html>
<html lang="en">

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
        <h1 class="page-header">FORM PEMESANAN</h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-20">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Form Pelanggan</h4>
                    </div>
                    <div class="panel-body panel-form">
                        <?php
                        $idpemesananpribadi = $_GET['id'];
                        $result = mysqli_query($koneksi, "SELECT * FROM pemesananpribadi where id='$idpemesananpribadi' ");
                        while ($user_data = mysqli_fetch_array($result)) {
                            $idpemesananpribadi = $user_data['id'];
                            $nama = $user_data['nama'];
                            $tanggaltranksaksipribadi = $user_data['tanggaltranksaksipribadi'];
                            $alamat = $user_data['alamat'];
                            $email = $user_data['email'];
                            $telepon = $user_data['telepon'];
                            $tanggalpemotretan = $user_data['tanggalpemotretan'];
                            $jampemotretan = $user_data['jampemotretan'];
                            $jenispaket = $user_data['jenispaket'];
                            $pembayaranmasuk = $user_data['pembayaranmasuk'];
                            $keterangan = $user_data['keterangan'];
                        }
                        ?>
                        <form class="form-horizontal form-bordered" data-parsley-validate="true" method="POST" action="../control/update.php" name="demo-form">

                            <div class="form-group" hidden>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="id" name="id" placeholder="Masukkan Nama Anda" data-parsley-required="true" value="<?php echo $idpemesananpribadi; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="email">Tanggal Tranksaksi:</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="Date" id="tanggaltranksaksipribadi" name="tanggaltranksaksipribadi" data-parsley-type="email" placeholder="" data-parsley-required="true" value="<?php echo $tanggaltranksaksipribadi; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="fullname">Nama Lengkap* :</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" data-parsley-required="true" value="<?php echo $nama; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="message">Alamat :</label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea class="form-control" id="alamat" name="alamat" rows="4" data-parsley-range="[20,200]" placeholder="Masukkan Alamat Anda"><?php echo $alamat; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="email">Email * :</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="email" name="email" data-parsley-type="email" placeholder="Email" data-parsley-required="true" value="<?php echo $email; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="email">No HP :</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="telepon" name="telepon" data-parsley-type="email" placeholder="Masukkan No Hp Anda" data-parsley-required="true" value="<?php echo $telepon; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="email">Tanggal Pemotretan :</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="Date" id="tanggalpemotretan" name="tanggalpemotretan" data-parsley-type="email" placeholder="Masukkan No Hp Anda" data-parsley-required="true" value="<?php echo $tanggalpemotretan; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="email">Jam Pemotretan :</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="time" id="jampemotretan" name="jampemotretan" data-parsley-type="email" placeholder="Masukkan jam" data-parsley-required="true" value="<?php echo $jampemotretan; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="email">Jenis Paket :</label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" id="jenispaket" name="jenispaket">
                                        <option value="<?php echo $jenispaket; ?>"><?php echo $jenispaket; ?></option>
                                        <option value="Prewed">Prewed</option>
                                        <option value="Dewekan">Dewekan</option>
                                        <option value="Ramean">Ramean</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="website">Pembayaran Masuk Rp.:</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" id="pembayaranmasuk" name="pembayaranmasuk" data-parsley-type="text" placeholder="Rp. " value="<?php echo $pembayaranmasuk; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="message">Keterangan :</label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea class="form-control" id="keterangan" name="keterangan" rows="4" data-parsley-range="[20,200]" placeholder="Masukkan Alamat Anda"><?php echo $keterangan; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4"></label>
                                <div class="col-md-6 col-sm-6">
                                    <button type="submit" class="btn btn-primary" id="updatepemesananpribadi" name="updatepemesananpribadi">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->

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
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
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
    <script src="assets/plugins/parsley/dist/parsley.js"></script>
    <script src="assets/js/apps.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
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