<!DOCTYPE html>
<html lang="en">

<head>

    <!-- start style -->
    <?php require_once "assets/style.php"; ?>
    <!-- end style -->

</head>

<body class="">
    <div class="wrapper ">

        <!-- start sidebar -->
        <?php require_once "assets/sidebar.php"; ?>
        <!-- end sidebar -->

        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Dashboard</a>
                    </div>

                    <!-- start navbar -->
                    <?php require_once "assets/navbar.php"; ?>
                    <!-- end Navbar -->

                    <!-- start content -->
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-warning card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">face</i>
                                            </div>
                                            <p class="card-category">Anggota</p>
                                            <h5 class="card-title">100
                                                <small>Orang</small>
                                            </h5>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <div class="stats">
                                                    <i class="material-icons">donut_small</i> Lihat Detail ...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-success card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">account_balance_wallet</i>
                                            </div>
                                            <p class="card-category">Simpanan</p>
                                            <h5 class="card-title">100
                                                <small>Simpanan</small>
                                            </h5>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">donut_small</i> Lihat Detail ...
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-danger card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">account_balance_wallet</i>
                                            </div>
                                            <p class="card-category">Pinjaman</p>
                                            <h5 class="card-title">75
                                                <small>Pinjaman</small>
                                            </h5>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">donut_small</i> Lihat Detail ...
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-info card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">how_to_reg</i>
                                            </div>
                                            <p class="card-category">Pengguna</p>
                                            <h5 class="card-title">10
                                                <small>Orang</small>
                                            </h5>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">donut_small</i> Lihat Detail ...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header card-header-info">
                                            <h4 class="card-title">Data SHU</h4>
                                            <p class="card-category">Data Sisa Hasil Usaha Koperasi Bina Arta Mandiri
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="profile">
                                                    <table id="example" class="display nowrap" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Tahun</th>
                                                                <th>No Anggota</th>
                                                                <th>Nama Anggota</th>
                                                                <th>Jumlah Simpanan</th>
                                                                <th>Jumlah Pinjaman</th>
                                                                <th>Jumlah SHU</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>2010</td>
                                                                <td>ANG/BAM/1</td>
                                                                <td>Suroyo</td>
                                                                <td>Rp. 100.000</td>
                                                                <td>Rp. 100.000</td>
                                                                <td>Rp. 320.800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>2011</td>
                                                                <td>ANG/BAM/2</td>
                                                                <td>Takwin Muhammad</td>
                                                                <td>Rp. 1000.000</td>
                                                                <td>Rp. 100.000</td>
                                                                <td>Rp. 170.750</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>2012</td>
                                                                <td>ANG/BAM/3</td>
                                                                <td>Randi Santoso</td>
                                                                <td>Rp. 500.000</td>
                                                                <td>Rp. 500.000</td>
                                                                <td>Rp. 86.000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>2013</td>
                                                                <td>ANG/BAM/4</td>
                                                                <td>Emil Hidayah</td>
                                                                <td>Rp. 2000.000</td>
                                                                <td>Rp. 2000.000</td>
                                                                <td>Rp. 433.060</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>2014</td>
                                                                <td>ANG/BAM/5</td>
                                                                <td>Sindri Nurulullah</td>
                                                                <td>Rp. 150.000</td>
                                                                <td>Rp. 150.000</td>
                                                                <td>Rp. 162.700</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>2015</td>
                                                                <td>ANG/BAM/6</td>
                                                                <td>Yamzir Abdull</td>
                                                                <td>Rp. 300.000</td>
                                                                <td>Rp. 300.000</td>
                                                                <td>Rp. 372.000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>2016</td>
                                                                <td>ANG/BAM/7</td>
                                                                <td>Kuncoro Agus</td>
                                                                <td>Rp. 120.000</td>
                                                                <td>Rp. 120.000</td>
                                                                <td>Rp. 137.500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>2017</td>
                                                                <td>ANG/BAM/8</td>
                                                                <td>Danang Azuandi</td>
                                                                <td>Rp. 120.000</td>
                                                                <td>Rp. 120.000</td>
                                                                <td>Rp. 327.900</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>2018</td>
                                                                <td>ANG/BAM/9</td>
                                                                <td>Ferdi Satya</td>
                                                                <td>Rp. 2000.000</td>
                                                                <td>Rp. 2000.000</td>
                                                                <td>Rp. 205.500</td>
                                                            </tr>
                                                            <tr>
                                                                <td>10</td>
                                                                <td>2019</td>
                                                                <td>ANG/BAM/10</td>
                                                                <td>Nunung</td>
                                                                <td>Rp. 100.000</td>
                                                                <td>Rp. 100.000</td>
                                                                <td>Rp. 103.600</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11</td>
                                                                <td>2020</td>
                                                                <td>ANG/BAM/11</td>
                                                                <td>Mariyat</td>
                                                                <td>Rp. 100.000</td>
                                                                <td>Rp. 100.000</td>
                                                                <td>Rp. 90.560</td>
                                                            </tr>
                                                            <tr>
                                                                <td>12</td>
                                                                <td>2021</td>
                                                                <td>ANG/BAM/12</td>
                                                                <td>Rihana Saraswati</td>
                                                                <td>Rp. 1050.000</td>
                                                                <td>Rp. 1050.000</td>
                                                                <td>Rp. 342.000</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Tahun</th>
                                                                <th>No Anggota</th>
                                                                <th>Nama Anggota</th>
                                                                <th>Jumlah Simpanan</th>
                                                                <th>Jumlah Pinjaman</th>
                                                                <th>Jumlah SHU</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-warning">
                                        <h4 class="card-title">Data Anggota</h4>
                                        <p class="card-category">Data Anggota Koperasi Bina Arta Mandiri</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="profile">
                                                <table id="example1" class="display nowrap" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>No Anggota</th>
                                                            <th>Nama Anggota</th>
                                                            <th>Alamat</th>
                                                            <th>No Telpon</th>
                                                            <th>Tanggal Lahir</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>ANG/BAM/1</td>
                                                            <td>Rihana Saraswati</td>
                                                            <td>Jl. Pulau Damar</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>ANG/BAM/2</td>
                                                            <td>Mariyat</td>
                                                            <td>Jl. Anggrek</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>ANG/BAM/3</td>
                                                            <td>Nunung</td>
                                                            <td>Jl. Yos Sudarso</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>ANG/BAM/4</td>
                                                            <td>Ferdi Satya</td>
                                                            <td>Kemiling Permai</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>ANG/BAM/5</td>
                                                            <td>Danang Azuandi</td>
                                                            <td>Kemiling Permai</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>ANG/BAM/6</td>
                                                            <td>Kuncoro Agus</td>
                                                            <td>Jl. Pulau Damar</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>ANG/BAM/7</td>
                                                            <td>Yamzir Abdull</td>
                                                            <td>Jl. Tirtayasa</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>ANG/BAM/8</td>
                                                            <td>Sindri Nurulullah</td>
                                                            <td>Jl. ZA. Pagar Alam</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>ANG/BAM/9</td>
                                                            <td>Emil Hidayah</td>
                                                            <td>Jl. Sindang Sari No. 12</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>ANG/BAM/10</td>
                                                            <td>Randi Santoso</td>
                                                            <td>Jl. Santiyasa</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>ANG/BAM/11</td>
                                                            <td>Takwin Muhammad</td>
                                                            <td>Jl. Abbdul Zainal</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>ANG/BAM/12</td>
                                                            <td>Suroyo</td>
                                                            <td>Jl. Gajah No. 6</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>No Anggota</th>
                                                            <th>Nama Anggota</th>
                                                            <th>Alamat</th>
                                                            <th>No Telpon</th>
                                                            <th>Tanggal Lahir</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- end content -->

        <!-- start footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright float-right">
                    &copy;
                    <script>
                    document.write(new Date().getFullYear())
                    </script>, powered by Koperasi Bina Arta Mandiri.
                </div>
            </div>
        </footer>
        <!-- end footer -->

    </div>
    </div>

    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Filters</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger active-color">
                        <div class="badge-colors ml-auto mr-auto">
                            <span class="badge filter badge-purple" data-color="purple"></span>
                            <span class="badge filter badge-azure" data-color="azure"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-warning" data-color="orange"></span>
                            <span class="badge filter badge-danger" data-color="danger"></span>
                            <span class="badge filter badge-rose active" data-color="rose"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Images</li>
                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-1.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-2.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-3.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-4.jpg" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/js/plugins/moment.min.js"></script>
    <script src="../assets/js/plugins/sweetalert2.js"></script>
    <script src="../assets/js/plugins/jquery.validate.min.js"></script>
    <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
    <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
    <script src="../assets/js/plugins/fullcalendar.min.js"></script>
    <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
    <script src="../assets/js/plugins/nouislider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="../assets/js/plugins/arrive.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="../assets/js/plugins/chartist.min.js"></script>
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <script src="../assets/demo/demo.js"></script>

    <script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {

                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {

                    $('.fixed-plugin .dropdown').addClass('open');

                }

            }

            $('.fixed-plugin a').click(function(event) {
                if ($(this).hasClass('switch-trigger')) {

                    if (event.stopPropagation) {

                        event.stopPropagation();
                        0

                    } else if (window.event) {

                        window.event.cancelBubble = true;

                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {

                    $sidebar.attr('data-color', new_color);

                }

                if ($full_page.length != 0) {

                    $full_page.attr('filter-color', new_color);

                }

                if ($sidebar_responsive.length != 0) {

                    $sidebar_responsive.attr('data-color', new_color);

                }
            });

            $('.fixed-plugin .background-color .badge').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {

                    $sidebar.attr('data-background-color', new_color);

                }
            });

            $('.fixed-plugin .img-holder').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');

                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $(
                        '.switch-sidebar-image input:checked').length != 0) {

                    $sidebar_img_container.fadeOut('fast', function() {
                        $sidebar_img_container.css('background-image', 'url("' +
                            new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });

                }

                if ($full_page_background.length != 0 && $(
                        '.switch-sidebar-image input:checked').length != 0) {

                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                        'img').data('src');
                    $full_page_background.fadeOut('fast', function() {
                        $full_page_background.css('background-image', 'url("' +
                            new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });

                }

                if ($('.switch-sidebar-image input:checked').length == 0) {

                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr(
                        'src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                        'img').data('src');
                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' +
                        new_image_full_page + '")');

                }

                if ($sidebar_responsive.length != 0) {

                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');

                }
            });

            $('.switch-sidebar-image input').change(function() {
                $full_page_background = $('.full-page-background');
                $input = $(this);

                if ($input.is(':checked')) {

                    if ($sidebar_img_container.length != 0) {

                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');

                    }

                    if ($full_page_background.length != 0) {

                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');

                    }

                    background_image = true;

                } else {

                    if ($sidebar_img_container.length != 0) {

                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');

                    }

                    if ($full_page_background.length != 0) {

                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');

                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function() {
                $body = $('body');
                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {

                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;
                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
                    setTimeout(function() {
                        $('body').addClass('sidebar-mini');
                        md.misc.sidebar_mini_active = true;
                    }, 300);

                }

                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        md.initDashboardPageCharts();
    });

    $(document).ready(function() {
        $('#example').DataTable({
            // dom: 'Bfrtip',
            // buttons: [
            //     'copy', 'csv', 'excel', 'pdf', 'print'
            // ]
        });
    });

    $(document).ready(function() {
        $('#example1').DataTable({
            // dom: 'Bfrtip',
            // buttons: [
            //     'copy', 'csv', 'excel', 'pdf', 'print'
            // ]
        });
    });
    </script>

</body>

</html>