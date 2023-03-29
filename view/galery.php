<!DOCTYPE html>
<html lang="en">

<?php include '../model/head.php'; ?>

<body hidden
    <!-- head content -->
    <?php include '../model/headcontent.php'; ?>
    <!-- end head content -->

    <!-- menu -->
    <?php include '../model/menu.php'; ?>
    <!-- end menu -->

    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin page-header -->
        <h1 class="page-header">Gallery </h1>
        <!-- end page-header -->
        <a href="formgaleri.php"><button type="submit" class="btn btn-primary">Upload Photo</button></a><br><br>
        <div id="options" class="m-b-10">
            <span class="gallery-option-set" id="filter" data-option-key="filter">
                <a href="#show-all" class="btn btn-default btn-xs active" data-option-value="*">
                    Show All
                </a>
                <a href="#gallery-group-1" class="btn btn-default btn-xs" data-option-value=".gallery-group-1">
                    Gallery Group 1
                </a>
                <a href="#gallery-group-2" class="btn btn-default btn-xs" data-option-value=".gallery-group-2">
                    Gallery Group 2
                </a>
                <a href="#gallery-group-3" class="btn btn-default btn-xs" data-option-value=".gallery-group-3">
                    Gallery Group 3
                </a>
                <a href="#gallery-group-4" class="btn btn-default btn-xs" data-option-value=".gallery-group-4">
                    Gallery Group 4
                </a>
            </span>
        </div>
        <div id="gallery" class="gallery">
            <div class="image gallery-group-1">
                <div class="image-inner">
                    <a href="assets/img/gallery/gallery-1.jpg" data-lightbox="gallery-group-1">
                        <img src="assets/img/gallery/gallery-1.jpg" alt="" />
                    </a>
                    <p class="image-caption">
                        #1382 - 3D Arch
                    </p>
                </div>
                <div class="image-info">
                    <h5 class="title">Lorem ipsum dolor sit amet</h5>
                    <div class="pull-right">
                        <small>by</small> <a href="javascript:;">Sean Ngu</a>
                    </div>
                    <div class="rating">
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                    <div class="desc">
                        Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat
                        eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.
                    </div>
                </div>
            </div>
            <div class="image gallery-group-1">
                <div class="image-inner">
                    <a href="assets/img/gallery/gallery-2.jpg" data-lightbox="gallery-group-1">
                        <img src="assets/img/gallery/gallery-2.jpg" alt="" />
                    </a>
                    <p class="image-caption">
                        #2343 - Madness Arch
                    </p>
                </div>
                <div class="image-info">
                    <h5 class="title">Fusce aliquet ac quam at tincidunt</h5>
                    <div class="pull-right">
                        <small>by</small> <a href="javascript:;">Camryn Wong</a>
                    </div>
                    <div class="rating">
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                    <div class="desc">
                        Fusce eu rutrum nisi, ut pretium mi. Sed mollis nisi sed auctor molestie. Vestibulum dictum
                        pharetra leo sed euismod.
                    </div>
                </div>
            </div>
            <div class="image gallery-group-1">
                <div class="image-inner">
                    <a href="assets/img/gallery/gallery-3.jpg" data-lightbox="gallery-group-1">
                        <img src="assets/img/gallery/gallery-3.jpg" alt="" />
                    </a>
                    <p class="image-caption">
                        #3452 - Scottwills Arch
                    </p>
                </div>
                <div class="image-info">
                    <h5 class="title">Etiam lobortis egestas nisl</h5>
                    <div class="pull-right">
                        <small>by</small> <a href="javascript:;">Lelouch Wong</a>
                    </div>
                    <div class="rating">
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star active"></span>
                    </div>
                    <div class="desc">
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                        Vivamus eget ultricies arcu.
                    </div>
                </div>
            </div>
            <div class="image gallery-group-2">
                <div class="image-inner">
                    <a href="assets/img/gallery/gallery-4.jpg" data-lightbox="gallery-group-2">
                        <img src="assets/img/gallery/gallery-4.jpg" alt="" />
                    </a>
                    <p class="image-caption">
                        #4123 - Scottwills Pinecone
                    </p>
                </div>
                <div class="image-info">
                    <h5 class="title">Donec mi quis volutpat ornare</h5>
                    <div class="pull-right">
                        <small>by</small> <a href="javascript:;">Richard Leong</a>
                    </div>
                    <div class="rating">
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                    <div class="desc">
                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et augue luctus libero
                        dignissim sodales, sapien consequat lacinia fringilla.
                    </div>
                </div>
            </div>
            <div class="image gallery-group-2">
                <div class="image-inner">
                    <a href="assets/img/gallery/gallery-5.jpg" data-lightbox="gallery-group-2">
                        <img src="assets/img/gallery/gallery-5.jpg" alt="" />
                    </a>
                    <p class="image-caption">
                        #9200 Kariminal Rider
                    </p>
                </div>
                <div class="image-info">
                    <h5 class="title">Donec pretium volutpat ornare</h5>
                    <div class="pull-right">
                        <small>by</small> <a href="javascript:;">Derrick Wong</a>
                    </div>
                    <div class="rating">
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star"></span>
                    </div>
                    <div class="desc">
                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et augue luctus libero,
                        feugiat sapien consequat lacinia fringilla.
                    </div>
                </div>
            </div>
            <div class="image gallery-group-3">
                <div class="image-inner">
                    <a href="assets/img/gallery/gallery-6.jpg" data-lightbox="gallery-group-3">
                        <img src="assets/img/gallery/gallery-6.jpg" alt="" />
                    </a>
                    <p class="image-caption">
                        #1832 Scottwills Autumn
                    </p>
                </div>
                <div class="image-info">
                    <h5 class="title">Mi quis volutpat ornare sodales</h5>
                    <div class="pull-right">
                        <small>by</small> <a href="javascript:;">Apple Tong</a>
                    </div>
                    <div class="rating">
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                    <div class="desc">
                        Ut et augue luctus libero dignissim sodales. Fusce feugiat sapien consequat lacinia
                        fringilla. Vivamus eget ultricies arcu.
                    </div>
                </div>
            </div>
            <div class="image gallery-group-3">
                <div class="image-inner">
                    <a href="assets/img/gallery/gallery-7.jpg" data-lightbox="gallery-group-3">
                        <img src="assets/img/gallery/gallery-7.jpg" alt="" />
                    </a>
                    <p class="image-caption">
                        #0229 Scottwills Autumn 2
                    </p>
                </div>
                <div class="image-info">
                    <h5 class="title">Vestibulum ante ipsum primis</h5>
                    <div class="pull-right">
                        <small>by</small> <a href="javascript:;">Thomas Wong</a>
                    </div>
                    <div class="rating">
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                    <div class="desc">
                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et augue luctus libero
                        dignissim sodales, sapien consequat lacinia fringilla.
                    </div>
                </div>
            </div>
            <div class="image gallery-group-4">
                <div class="image-inner">
                    <a href="assets/img/gallery/gallery-8.jpg" data-lightbox="gallery-group-4">
                        <img src="assets/img/gallery/gallery-8.jpg" alt="" />
                    </a>
                    <p class="image-caption">
                        #5721 Scottwills Snow
                    </p>
                </div>
                <div class="image-info">
                    <h5 class="title">Nunc eget hendrerit nisi sodales</h5>
                    <div class="pull-right">
                        <small>by</small> <a href="javascript:;">Andy Wong</a>
                    </div>
                    <div class="rating">
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star active"></span>
                    </div>
                    <div class="desc">
                        Ut et augue nisi sodales luctus libero dignissim sodales. Fusce feugiat nisi sodales sapien
                        consequat lacinia fringilla.
                    </div>
                </div>
            </div>
            <div class="image gallery-group-4">
                <div class="image-inner">
                    <a href="assets/img/gallery/gallery-9.jpg" data-lightbox="gallery-group-4">
                        <img src="assets/img/gallery/gallery-9.jpg" alt="" />
                    </a>
                    <p class="image-caption">
                        #9921 Scottwills Riverbank
                    </p>
                </div>
                <div class="image-info">
                    <h5 class="title">Nunc eget hendrerit nisi dignissim</h5>
                    <div class="pull-right">
                        <small>by</small> <a href="javascript:;">William Tan</a>
                    </div>
                    <div class="rating">
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                    <div class="desc">
                        Ut et augue luctus libero dignissim sodales. Fusce feugiat sapien consequat libero dignissim
                        lacinia fringilla.
                    </div>
                </div>
            </div>
            <div class="image gallery-group-4">
                <div class="image-inner">
                    <a href="assets/img/gallery/gallery-10.jpg" data-lightbox="gallery-group-4">
                        <img src="assets/img/gallery/gallery-10.jpg" alt="" />
                    </a>
                    <p class="image-caption">
                        #6436 Scottwills Buss
                    </p>
                </div>
                <div class="image-info">
                    <h5 class="title">Sed mollis nisi sed auctor</h5>
                    <div class="pull-right">
                        <small>by</small> <a href="javascript:;">David King</a>
                    </div>
                    <div class="rating">
                        <span class="star active"></span>
                        <span class="star active"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                        <span class="star"></span>
                    </div>
                    <div class="desc">
                        Vestibulum dictum pharetra leo sed euismod. Lorem ipsum dolor sit amet, consectetur
                        adipiscing feugiat sapien elit.
                    </div>
                </div>
            </div>
        </div>
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
    <script src="assets/plugins/isotope/jquery.isotope.min.js"></script>
    <script src="assets/plugins/lightbox/js/lightbox.min.js"></script>
    <script src="assets/js/gallery.demo.min.js"></script>
    <script src="assets/js/apps.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            Gallery.init();
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