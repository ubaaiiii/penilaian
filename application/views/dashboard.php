<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        $ada_nilai = $this->db->query("SELECT a.nik, a.nama FROM `list_karyawan` a LEFT JOIN `list_nilai` b on a.nik = b.nik where b.`K2019002` = 0 or b.`K2019003` = 0 or b.`K2020003` = 0 order by nik ASC")->row_array();

    ?>
    <title>PT. Bina Dana Sejahtera - <?=$judul;?></title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="theme-color" content="#4285f4">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url('assets\images\favicon BDS.png');?>" type="image/x-icon">
    <!-- Google font-->
    <link rel="stylesheet" href="<?= base_url('assets\css\font.css');?>">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet"> -->
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor\bootstrap\css\bootstrap.min.css');?>">
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor\sweetalert\css\sweetalert.css');?>">
    <!-- Select 2 css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor\select2\css\select2.min.css');?>">
    <!-- Rangeslider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor\rangeslider.js\dist\rangeslider.css');?>">
    <!-- notification.css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets\pages\notification\growl\jquery.growl.css');?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets\icon\themify-icons\themify-icons.css');?>">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets\pages\advance-elements\css\bootstrap-datetimepicker.css');?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets\icon\icofont\css\icofont.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets\css\font-awesome.min.css');?>">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets\css\component.css');?>">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor\datatables.net-bs4\css\dataTables.bootstrap4.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets\pages\data-table\css\buttons.dataTables.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets\pages\data-table\extensions\buttons\css\buttons.dataTables.min.css');?>">
    <!-- swiper css -->
    <!-- radial chart.css -->
    <link rel="stylesheet" href="<?= base_url('assets\pages\chart\radial\css\radial.css');?>" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor\swiper\css\swiper.min.css');?>">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets\icon\feather\css\feather.css');?>">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets\pages\prism\prism.css');?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets\css\style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets\css\jquery.mCustomScrollbar.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets\css\pcoded-horizontal.min.css');?>">
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?= base_url('vendor\jquery\js\jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('vendor\jquery-form\jquery.form.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('vendor\rangeslider.js\dist\rangeslider.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('vendor\jquery-ui\js\jquery-ui.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('vendor\popper.js\js\popper.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('vendor\bootstrap\js\bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets\pages\notification\growl\jquery.growl.js');?>"></script>
    <?php
        $user = $this->session->userdata('user');
        extract($user);
    ?>
</head>
<!-- Menu horizontal fixed layout -->

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">

        <div class="pcoded-container">
            <!-- Menu header start -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="<?=base_url('dashboard');?>">
                            <img class="img-fluid float-none" src="<?= base_url('assets\images\logo-baru-bds-putih.png');?>" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <span><?=$nama;?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li onclick="$('trigger-karyawan').click();">
                                            <a id="trigger-karyawan" data-toggle="modal" data-target="#large-Modal" onclick="$('#trigger-modal').click();
                $('#load-modal-here').load('modal/karyawan/p/'+<?=$nik;?>);">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url('auth/logout');?>">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Menu header end -->
            <div class="pcoded-main-container">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar">
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-map"></i></span>
                                    <span class="pcoded-mtext">Navigation</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="<?=base_url('dashboard');?>">
                                            <span class="pcoded-micon"><i class="ti-home"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?=base_url('nilaiku');?>">
                                            <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b>
                                            </span>
                                            <span class="pcoded-mtext" data-i18n="nav.navigate.main">Nilaiku</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php if($role==1){ ?>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                    <span class="pcoded-mtext">Forms</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        &nbsp;&nbsp;&nbsp;<small>Tambah</small>
                                        <a href="" data-toggle="modal" data-target="#large-Modal" onclick="$('#load-modal-here').load('modal/karyawan/t/null');" data-i18n="nav.form-components.main">
                                            <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                            <span class="pcoded-mtext">Karyawan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="" data-toggle="modal" data-target="#large-Modal" onclick="$('#load-modal-here').load('modal/kriteria/t');" data-i18n="nav.form-pickers.main">
                                            <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                            <span class="pcoded-mtext">Kriteria</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="" data-toggle="modal" data-target="#large-Modal" onclick="$('#load-modal-here').load('modal/penilaian/t');" data-i18n="nav.form-pickers.main">
                                            <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                            <span class="pcoded-mtext">Nilai</span>
                                            <?php
                                                if($ada_nilai != null){
                                            ?>
                                            <span class="pcoded-badge label label-warning">PROCESS!</span>
                                            <?php } ;?>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php }?>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                    <span class="pcoded-mtext">Tables</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="<?=base_url('karyawan');?>" data-i18n="nav.bootstrap-table.main">
                                            <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                            <span class="pcoded-mtext">Karyawan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?=base_url('kriteria');?>" data-i18n="nav.data-table.main">
                                            <span class="pcoded-micon"><i class="ti-widgetized"></i></span>
                                            <span class="pcoded-mtext">Kriteria</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?=base_url('penilaian');?>" data-i18n="nav.data-table-extensions.main">
                                            <span class="pcoded-micon"><i class="ti-loop"></i></span>
                                            <span class="pcoded-mtext">Nilai</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="<?=base_url('rangking');?>" data-i18n="nav.foo-table.main">
                                            <span class="pcoded-micon"><i class="ti-view-list-alt"></i></span>
                                            <span class="pcoded-mtext">Rangking</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-info"></i></span>
                                    <span class="pcoded-mtext">About Us!</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="<?=base_url('developer');?>" data-i18n="nav.charts.main"> <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i></span> <span class="pcoded-mtext">Developer</span> <span class="pcoded-mcaret"></span> </a>
                                    </li>
                                    <li class="">
                                        <a href="https://bdspt.com" target="_blank" data-i18n="nav.maps.main"> <span class="pcoded-micon"><i class="ti-map-alt"></i></span> <span class="pcoded-mtext">PT. Bina Dana Sejahtera</span> <span class="pcoded-mcaret"></span> </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header m-t-50">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4><?=$judul;?></h4>
                                                        <span><?=$informasi;?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <!-- Page Location start -->
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="<?=base_url();?>" data-toggle="tooltip" title="Dashboard" class="tooltip-effect-2">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            foreach ($halaman as $h){
                                                                echo "<li class='breadcrumb-item'><a href=".$h['link'].">".$h['bread']."</a>
                                                                </li>";
                                                            }
                                                        ?>
                                                    </ul>
                                                    <!-- Page Location end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <!-- Page-Body start -->
                                    <?php
                                        if (!empty($page)){
                                            $this->load->view($page);
                                        }
                                    ?>
                                    <!-- Page-Body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button hidden id="trigger-modal" data-toggle="modal" data-target="#large-Modal"></button>
    <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" id="load-modal-here">

            </div>
        </div>
    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url('vendor\jquery-slimscroll\js\jquery.slimscroll.js');?>"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url('vendor\modernizr\js\modernizr.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('vendor\modernizr\js\css-scrollbars.js');?>"></script>
    <!-- Notification.js -->
    <script type="text/javascript" src="<?= base_url('assets\pages\notification\notification.js');?>"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url('vendor\jquery-slimscroll\js\jquery.slimscroll.js');?>"></script>
    <!-- sweet alert js -->
    <script type="text/javascript" src="<?= base_url('vendor\sweetalert\js\sweetalert.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('vendor\sweetalert\js\sweetalert2.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets\js\modal.js');?>"></script>
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="<?= base_url('assets\js\modalEffects.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets\js\classie.js');?>"></script>
    <!-- Select 2 js -->
    <script type="text/javascript" src="<?= base_url('vendor\select2\js\select2.full.min.js');?>"></script>
    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="<?= base_url('assets\pages\advance-elements\moment-with-locales.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('vendor\bootstrap-datepicker\js\bootstrap-datepicker.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('assets\pages\advance-elements\bootstrap-datetimepicker.min.js');?>"></script>
    <!-- data-table js -->
    <script src="<?= base_url('vendor\datatables.net\js\jquery.dataTables.min.js');?>"></script>
    <script src="<?= base_url('vendor\datatables.net-buttons\js\dataTables.buttons.min.js');?>"></script>
    <script src="<?= base_url('assets\pages\data-table\js\jszip.min.js');?>"></script>
    <script src="<?= base_url('assets\pages\data-table\js\pdfmake.min.js');?>"></script>
    <script src="<?= base_url('assets\pages\data-table\js\vfs_fonts.js');?>"></script>
    <script src="<?= base_url('vendor\datatables.net-buttons\js\buttons.print.min.js');?>"></script>
    <script src="<?= base_url('vendor\datatables.net-buttons\js\buttons.html5.min.js');?>"></script>
    <script src="<?= base_url('vendor\datatables.net-bs4\js\dataTables.bootstrap4.min.js');?>"></script>
    <script src="<?= base_url('vendor\datatables.net-responsive\js\dataTables.responsive.min.js');?>"></script>
    <script src="<?= base_url('vendor\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js');?>"></script>
    <!-- Max-length js -->
    <script type="text/javascript" src="<?= base_url('vendor\bootstrap-maxlength\js\bootstrap-maxlength.js');?>"></script>
    <!-- Custom js -->
    <script src="<?= base_url('assets\pages\data-table\extensions\buttons\js\extension-btns-custom.js');?>"></script>
    <script src="<?= base_url('assets\pages\data-table\js\data-table-custom.js');?>"></script>
    <script src="<?= base_url('assets\js\pcoded.min.js');?>"></script>
    <script src="<?= base_url('assets\js\menu\menu-hori-fixed.js');?>"></script>
    <script src="<?= base_url('assets\js\jquery.mCustomScrollbar.concat.min.js');?>"></script>
    <script type="text/javascript" src="<?= base_url('\assets\js\script.js');?>"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script> -->
<script>

    $(document).ready(function(){
        $('#cariKaryawan').onkeydown = function(){
            if (event.keyCode == 13){
                window.open("<?=base_url('karyawan');?>");
                setTimeout(function(){ table_karyawan.search($('#cariKaryawan').value).draw(); }, 3000);
            }
        }
        $('#large-Modal').on('hidden.bs.modal', function () {
            $('#load-modal-here').load('modal/kosong');
        });
    });

        // function setInputFilter(textbox, inputFilter) {
        //   ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
        //     textbox.addEventListener(event, function() {
        //       if (inputFilter(this.value)) {
        //         this.oldValue = this.value;
        //         this.oldSelectionStart = this.selectionStart;
        //         this.oldSelectionEnd = this.selectionEnd;
        //       } else if (this.hasOwnProperty("oldValue")) {
        //         this.value = this.oldValue;
        //         this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        //       }
        //     });
        //   });
        // }

        // // Restrict input to digits and '.' by using a regular expression filter.
        // setInputFilter(document.getElementById("myTextBox"), function(value) {
        //   return /^\d*\.?\d*$/.test(value);
        // });
</script>
</body>

</html>
