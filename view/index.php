<!DOCTYPE html>

<html lang="en">


<?php include '../model/head.php'; ?>

<body>
    <!-- headcontent -->
    <?php include '../model/headcontent.php'; ?>
    <!-- end content -->

    <!-- MENU -->
    <?php include '../model/menu.php'; ?>
    <!-- END MENU -->

    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin page-header -->
        <h1 class="page-header">Dashboard </h1>
        <!-- end page-header -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-green">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
                    <div class="stats-title">TODAY'S VISITS</div>
                    <div class="stats-number">7,842,900</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 70.1%;"></div>
                    </div>
                    <div class="stats-desc">Better than last week (70.1%)</div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-blue">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-tags fa-fw"></i></div>
                    <div class="stats-title">TODAY'S PROFIT</div>
                    <div class="stats-number">180,200</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 40.5%;"></div>
                    </div>
                    <div class="stats-desc">Better than last week (40.5%)</div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-purple">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-shopping-cart fa-fw"></i></div>
                    <div class="stats-title">NEW ORDERS</div>
                    <div class="stats-number">38,900</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 76.3%;"></div>
                    </div>
                    <div class="stats-desc">Better than last week (76.3%)</div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-black">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-comments fa-fw"></i></div>
                    <div class="stats-title">NEW COMMENTS</div>
                    <div class="stats-number">3,988</div>
                    <div class="stats-progress progress">
                        <div class="progress-bar" style="width: 54.9%;"></div>
                    </div>
                    <div class="stats-desc">Better than last week (54.9%)</div>
                </div>
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->

        <!-- begin row -->
        <div class="row">
            <div class="col-md-8">
                <div class="widget-chart with-sidebar bg-black">
                    <div class="widget-chart-content">
                        <h4 class="chart-title">
                            Visitors Analytics
                            <small>Where do our visitors come from</small>
                        </h4>
                        <div id="visitors-line-chart" class="morris-inverse" style="height: 260px;"></div>
                    </div>
                    <div class="widget-chart-sidebar bg-black-darker">
                        <div class="chart-number">
                            1,225,729
                            <small>visitors</small>
                        </div>
                        <div id="visitors-donut-chart" style="height: 160px"></div>
                        <ul class="chart-legend">
                            <li><i class="fa fa-circle-o fa-fw text-success m-r-5"></i> 34.0% <span>New
                                    Visitors</span></li>
                            <li><i class="fa fa-circle-o fa-fw text-primary m-r-5"></i> 56.0% <span>Return
                                    Visitors</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-inverse" data-sortable-id="index-1">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Visitors Origin
                        </h4>
                    </div>
                    <div id="visitors-map" class="bg-black" style="height: 181px;"></div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-inverse text-ellipsis">
                            <span class="badge badge-success">20.95%</span>
                            1. United State
                        </a>
                        <a href="#" class="list-group-item list-group-item-inverse text-ellipsis">
                            <span class="badge badge-primary">16.12%</span>
                            2. India
                        </a>
                        <a href="#" class="list-group-item list-group-item-inverse text-ellipsis">
                            <span class="badge badge-inverse">14.99%</span>
                            3. South Korea
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="index-2">
                    <div class="panel-heading">
                        <h4 class="panel-title">Chat History <span class="label label-success pull-right">4
                                message</span></h4>
                    </div>
                    <div class="panel-body bg-silver">
                        <div data-scrollbar="true" data-height="225px">
                            <ul class="chats">
                                <li class="left">
                                    <span class="date-time">yesterday 11:23pm</span>
                                    <a href="javascript:;" class="name">Sowse Bawdy</a>
                                    <a href="javascript:;" class="image"><img alt="" src="assets/img/user-12.jpg" /></a>
                                    <div class="message">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit volutpat. Praesent
                                        mattis interdum arcu eu feugiat.
                                    </div>
                                </li>
                                <li class="right">
                                    <span class="date-time">08:12am</span>
                                    <a href="#" class="name"><span class="label label-primary">ADMIN</span> Me</a>
                                    <a href="javascript:;" class="image"><img alt="" src="assets/img/user-13.jpg" /></a>
                                    <div class="message">
                                        Nullam posuere, nisl a varius rhoncus, risus tellus hendrerit neque.
                                    </div>
                                </li>
                                <li class="left">
                                    <span class="date-time">09:20am</span>
                                    <a href="#" class="name">Neck Jolly</a>
                                    <a href="javascript:;" class="image"><img alt="" src="assets/img/user-10.jpg" /></a>
                                    <div class="message">
                                        Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </div>
                                </li>
                                <li class="left">
                                    <span class="date-time">11:15am</span>
                                    <a href="#" class="name">Shag Strap</a>
                                    <a href="javascript:;" class="image"><img alt="" src="assets/img/user-14.jpg" /></a>
                                    <div class="message">
                                        Nullam iaculis pharetra pharetra. Proin sodales tristique sapien mattis
                                        placerat.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <form name="send_message_form" data-id="message-form">
                            <div class="input-group">
                                <input type="text" class="form-control input-sm" name="message" placeholder="Enter your message here.">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-sm" type="button">Send</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-4 -->
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="index-3">
                    <div class="panel-heading">
                        <h4 class="panel-title">Today's Schedule</h4>
                    </div>
                    <div id="schedule-calendar" class="bootstrap-calendar"></div>
                    <div class="list-group">
                        <a href="#" class="list-group-item text-ellipsis">
                            <span class="badge badge-success">9:00 am</span> Sales Reporting
                        </a>
                        <a href="#" class="list-group-item text-ellipsis">
                            <span class="badge badge-primary">2:45 pm</span> Have a meeting with sales team
                        </a>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-4 -->
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="index-4">
                    <div class="panel-heading">
                        <h4 class="panel-title">New Registered Users <span class="pull-right label label-success">24
                                new users</span></h4>
                    </div>
                    <ul class="registered-users-list clearfix">
                        <li>
                            <a href="javascript:;"><img src="assets/img/user-5.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Savory Posh
                                <small>Algerian</small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="assets/img/user-3.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Ancient Caviar
                                <small>Korean</small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="assets/img/user-1.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Marble Lungs
                                <small>Indian</small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="assets/img/user-8.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Blank Bloke
                                <small>Japanese</small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="assets/img/user-2.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Hip Sculling
                                <small>Cuban</small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="assets/img/user-6.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Flat Moon
                                <small>Nepalese</small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="assets/img/user-4.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Packed Puffs
                                <small>Malaysian></small>
                            </h4>
                        </li>
                        <li>
                            <a href="javascript:;"><img src="assets/img/user-9.jpg" alt="" /></a>
                            <h4 class="username text-ellipsis">
                                Clay Hike
                                <small>Swedish</small>
                            </h4>
                        </li>
                    </ul>
                    <div class="panel-footer text-center">
                        <a href="javascript:;" class="text-inverse">View All</a>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-4 -->
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
    <script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="assets/plugins/flot/jquery.flot.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.js"></script>
    <script src="assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/dashboard.min.js"></script>
    <script src="assets/js/apps.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
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