<!DOCTYPE html>
<html lang="en">

<head>
    <title>PT. Bina Dana Sejahtera - <?=$judul;?></title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js');?>"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js');?>"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?=base_url('assets\images\favicon BDS.png');?>" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('vendor\bootstrap\css\bootstrap.min.css');?>">
    <!-- Select 2 css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('vendor\select2\css\select2.min.css');?>">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets\icon\feather\css\feather.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets\css\font-awesome.min.css');?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets\icon\themify-icons\themify-icons.css');?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets\icon\icofont\css\icofont.css');?>">
    <!-- notification.css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets\pages\notification\growl\jquery.growl.css');?>">
    <!-- notify js Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('vendor\pnotify\css\pnotify.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('vendor\pnotify\css\pnotify.brighttheme.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('vendor\pnotify\css\pnotify.buttons.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('vendor\pnotify\css\pnotify.history.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('vendor\pnotify\css\pnotify.mobile.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets\pages\pnotify\notify.css');?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets\css\style.css');?>">
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?=base_url('vendor\jquery\js\jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\jquery-ui\js\jquery-ui.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\popper.js\js\popper.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\bootstrap\js\bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets\pages\notification\growl\jquery.growl.js');?>"></script>

    <?php
        $js_karyawan = json_encode($all_karyawan);
        echo "<script> var karyawan = {$js_karyawan} </script>";
    ?>

    <script>
        var today = new Date();
        var bulan = today.getMonth()+1;
        var tahun = today.getFullYear();
        for(a=1;a<=karyawan.length;a++){
            var cari_nik = tahun+('0'+bulan).slice(-2)+('000'+a).slice(-4);
            if(karyawan.some(data => data.nik === cari_nik)==false){
                $('#nik').val(cari_nik);
                break;
            }
        }

        var stack_custom_top = {"dir1": "down", "dir2": "right", "push": "top", "spacing1": 1};
        function show_stack_custom_top(type,vemail='') {
            var opts = {
                title: "Over here",
                text: "Check me out. I'm in a different stack.",
                width: "100%",
                cornerclass: "no-border-radius",
                addclass: "stack-custom-top bg-primary",
                stack: stack_custom_top
            };
            switch (type) {
                case 'newpass':
                opts.title = "Success";
                opts.text = "Password telah terganti dengan yang baru!";
                opts.addclass = "stack-custom-top bg-secondary";
                opts.type = "success";
                break;

                case 'email':
                opts.title = "Success";
                opts.text = "Link untuk ubah password sudah terkirim via email ke <b>"+vemail+"</b>.";
                opts.addclass = "stack-custom-top bg-info";
                opts.type = "info";
                break;

                case 'emailErr':
                opts.title = "Error";
                opts.text = "<b>"+vemail+"</b> tidak terdaftar di sistem kami.";
                opts.addclass = "stack-custom-top bg-danger";
                opts.type = "error";
                break;

                case 'success':
                opts.title = "Registration Complete.";
                opts.text = "Harap cek email <b>"+vemail+"</b> untuk informasi akun yang telah dibuat.";
                opts.addclass = "stack-custom-top bg-success";
                opts.type = "success";
                break;

                case 'login':
                opts.title = "Forbidden.";
                opts.text = "Mohon maaf, harap login terlebih dahulu.";
                opts.addclass = "stack-custom-top bg-danger";
                opts.type = "info";
                break;

            }
            new PNotify(opts);
        }

        function hapus(f){
            var form = document.getElementById(f);
            form.reset();
        }

        function field_register(){
            $('#field-sign').css({display:"none"});
            $('#field-forgot').css({display:"none"});
            $('#field-new_password').css({display:"none"});
            $('#field-register').removeAttr("style");
            $('#ganti-card').removeAttr('class');
            $('#ganti-card').addClass('modal-dialog modal-lg');
            document.title="PT. Bina Dana Sejahtera - Registration";
            hapus('form-sign');
        }

        function field_sign(){
            $('#field-register').css({display:"none"});
            $('#field-forgot').css({display:"none"});
            $('#field-new_password').css({display:"none"});
            $('#field-sign').removeAttr("style");
            $('#ganti-card').removeAttr('class');
            $('#ganti-card').addClass('auth-box card');
            document.title="PT. Bina Dana Sejahtera - Login";
            hapus('form-register');
            hapus('form-forgot');
        }

        function field_forgot(){
            $('#field-sign').css({display:"none"});
            $('#field-register').css({display:"none"});
            $('#field-new_password').css({display:"none"});
            $('#field-forgot').removeAttr("style");
            $('#ganti-card').removeAttr('class');
            $('#ganti-card').addClass('auth-box card');
            document.title="PT. Bina Dana Sejahtera - Forgot Password";
            hapus('form-sign');
        }

        function new_password(){
            $('#field-sign').css({display:"none"});
            $('#field-register').css({display:"none"});
            $('#field-forgot').css({display:"none"});
            $('#field-new_password').removeAttr("style");
            $('#ganti-card').removeAttr('class');
            $('#ganti-card').addClass('auth-box card');
            document.title="PT. Bina Dana Sejahtera - New Password";
            hapus('form-sign');
            hapus('form-register');
            hapus('form-forgot');
        }

        function togglePassword(id='') {
            var x = document.getElementById(id);
            if (x.type === "password") {
                x.type = "text";
                $('#eye').removeClass('icon-eye');
                $('#eye').addClass('icon-eye-off');
            } else {
                x.type = "password";
                $('#eye').removeClass('icon-eye-off');
                $('#eye').addClass('icon-eye');
            }
        }
        $(document).ready(function(){
            $('#login-register').on('click',function(){
                field_sign();
                $('#logo').show();
            });

            $('#forgotLink').on('click',function(){
                new_password();
            });

            $('#login-forgot').on('click',function(){
                field_sign();
            });

            $('#login-new').on('click',function(){
                field_sign();
            });

            $('#registration').on('click',function(){
                field_register();
                $('#logo').hide();
            });

            $('#forgot-password').on('click',function(){
                field_forgot();
            });

            var today = new Date();
            var bulan = today.getMonth()+1;
            var tahun = today.getFullYear();
            for(a=1;a<=karyawan.length;a++){
                var cari_nik = tahun+('0'+bulan).slice(-2)+('000'+a).slice(-4);
                if(karyawan.some(data => data.nik === cari_nik)==false){
                    $('#nik').val(cari_nik);
                    break;
                }
            }
        })



    </script>
</head>

<body class="fix-menu">
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
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                            <div id="logo" class="text-center">
                                <img src="<?=base_url('assets\images\logo-baru-bds-login.png');?>" width="200px" alt="logo.png">
                            </div>
                            <div id="ganti-card" class="auth-box card">
                                <div class="card-block">
                                    <fieldset id="field-sign">
                                        <form id="form-sign" class="md-float-material form-material">
                                            <div class="row m-b-20">
                                                <div class="col-md-12">
                                                    <h3 class="text-center">Sign In</h3>
                                                </div>
                                            </div>
                                            <div class="form-group form-primary">
                                                <input type="text" id="username" name="username" class="form-control" required="" placeholder="Your Username">
                                                <span class="form-bar"></span>
                                            </div>
                                            <div class="form-group form-primary">
                                                <div class="input-group">
                                                    <input type="password" id="password" name="password" class="form-control" required="" placeholder="Password">
                                                    <span class="input-group-addon" onclick="togglePassword('password');"><i id="eye" class="feather icon-eye"></i></span>
                                                </div>
                                                <span class="form-bar"></span>
                                            </div>
                                            <div class="row m-t-25 text-left">
                                                <div class="col-12">
                                                    <div class="text-left f-left">
                                                        <a style="cursor: pointer;" id="registration" class="text-right f-w-600">Create an Account!</a>
                                                    </div>
                                                    <div class="forgot-phone text-right f-right">
                                                        <a style="cursor: pointer;" id="forgot-password" class="text-right f-w-600"> Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-t-30">
                                                <div class="col-md-12">
                                                    <button type="submit" id="signText" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20"></button>
                                                </div>
                                            </div>
                                        </form>
                                    </fieldset>
                                    <fieldset id="field-forgot" style="display: none;">
                                        <form id="form-forgot" class="md-float-material form-material">
                                            <div class="row m-b-20">
                                                <div class="col-md-12">
                                                    <h3 class="text-center">Forgot Password</h3>
                                                </div>
                                            </div>
                                            <div class="form-group form-primary">
                                                <input type="email" id="emailR" name="email" class="form-control" required="" placeholder="Enter Your Email">
                                                <span class="form-bar"></span>
                                            </div>
                                            <div class="row m-t-30">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Send Recovery Email</button>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-12">
                                                    <div class="forgot-phone text-right f-right">
                                                        <a style="cursor: pointer;" id="login-forgot" class="text-right f-w-600"> Login</a>
                                                        <a hidden id="forgotLink" class="text-right f-w-600">Forgot</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </fieldset>
                                    <fieldset id="field-new_password" style="display: none;">
                                        <form id="form-new_password" class="md-float-material form-material">
                                            <div class="row m-b-20">
                                                <div class="col-md-12">
                                                    <h3 class="text-center">New Password</h3>
                                                </div>
                                            </div>
                                            <div hidden class="form-group form-primary">
                                                <input hiddden type="email" id="emailRecovery" name="email" class="form-control" required="" placeholder="Enter Your Email">
                                                <span class="form-bar"></span>
                                            </div>
                                            <div class="input-group">
                                                <input type="password" id="new" name="password" class="form-control" required="" placeholder="New Password">
                                                <span class="input-group-addon" onclick="togglePassword('new');"><i id="eye" class="feather icon-eye"></i></span>
                                            </div>
                                            <div class="input-group">
                                                <input type="password" id="new1" name="password1" class="form-control" required="" placeholder="Repeat Password">
                                                <span class="input-group-addon" onclick="togglePassword('new');"><i id="eye" class="feather icon-eye"></i></span>
                                            </div>
                                            <div class="row m-t-30">
                                                <div class="col-md-12">
                                                    <button id="newText" type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Change</button>
                                                </div>
                                            </div>
                                            <div hidden class="row text-left">
                                                <div class="col-12">
                                                    <div class="forgot-phone text-right f-right">
                                                        <a style="cursor: pointer;" id="login-new" class="text-right f-w-600"> Login</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </fieldset>
                                    <fieldset id="field-register" style="display: none;">
                                        <form style="color:white;" id="form-register" class="md-float-material form-material" autocomplete="off">
                                            <div class="row m-b-20">
                                                <div class="col-md-12">
                                                    <h3 class="text-center">Registration</h3>
                                                </div>
                                            </div>
                                            <div class="form-group row" style="display: none;">
                                                <label class="col-sm-3 col-form-label">NIK</label>
                                                <div class="col-sm-9">
                                                    <input required id="nik" name="nik" type="text" class="form-control" placeholder="Nomor Induk Karyawan" readonly="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nama</label>
                                                <div class="col-sm-9">
                                                    <input required id="nama" name="nama" type="text" class="form-control" placeholder="Nama Lengkap" autocomplete="off" style="text-transform: capitalize;" maxlength="50">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                                <div class="col-sm-9 form-radio">
                                                    <div class="group-add-on">
                                                        <div class="radio radiofill radio-inline">
                                                            <label style="color:white;">
                                                                <input required id="L" type="radio" name="jenisKelamin" value="L" checked=""><i class="helper"></i> Laki-Laki
                                                            </label>
                                                        </div>
                                                        <div class="radio radiofill radio-inline">
                                                            <label style="color:white;">
                                                                <input required id="P" type="radio" name="jenisKelamin" value="P"><i class="helper"></i> Perempuan
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-9">
                                                    <input required id="tanggalLahir" name="tanggalLahir" class="form-control" type="date">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Agama</label>
                                                <div class="col-sm-9">
                                                    <select required id="agama" name="agama" class="form-control selectd col-sm-12 selectd">
                                                        <option disabled selected value=0>Pilih Salah Satu ..</option>
                                                        <option value="ISL">Islam</option>
                                                        <option value="KK">Kristen Katholik</option>
                                                        <option value="KP">Kristen Protestan</option>
                                                        <option value="HIN">Hindu</option>
                                                        <option value="BUD">Budha</option>
                                                        <option value="KON">Konghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nomor Handphone</label>
                                                <div class="col-sm-9">
                                                    <input required id="nomorHandphone" name="nomorHandphone" type="text" class="form-control" placeholder="Nomor Handphone" autocomplete="off" maxlength="13">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input required id="email" name="email" type="email" class="form-control" placeholder="Email" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Alamat</label>
                                                <div class="col-sm-9">
                                                    <textarea required id="alamat" name="alamat" class="form-control max-textarea" maxlength="255" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="row m-t-30">
                                                <div class="col-md-12">
                                                    <button id="sendText" type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Register</button>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-12">
                                                    <div class="forgot-phone text-right f-right">
                                                        <a style="cursor: pointer;" id="login-register" class="text-right f-w-600"> Login</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>

                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
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
    <script type="text/javascript" src="<?=base_url('vendor\jquery-slimscroll\js\jquery.slimscroll.js');?>"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?=base_url('vendor\modernizr\js\modernizr.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\modernizr\js\css-scrollbars.js');?>"></script>
    <!-- pNotify -->
    <script type="text/javascript" src="<?=base_url('vendor\pnotify\js\pnotify.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\pnotify\js\pnotify.desktop.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\pnotify\js\pnotify.confirm.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\pnotify\js\pnotify.callbacks.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\pnotify\js\pnotify.animate.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\pnotify\js\pnotify.history.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\pnotify\js\pnotify.mobile.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\pnotify\js\pnotify.nonblock.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets\pages\pnotify\notify.js');?>"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?=base_url('vendor\i18next\js\i18next.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\i18next-xhr-backend\js\i18nextXHRBackend.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('vendor\jquery-i18next\js\jquery-i18next.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets\js\common-pages.js');?>"></script>
    <!-- Select 2 js -->
    <script type="text/javascript" src="<?= base_url('vendor\select2\js\select2.full.min.js');?>"></script>
    <!-- sweet alert js -->
    <script type="text/javascript" src="<?= base_url('vendor\sweetalert\js\sweetalert.min.js');?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');


  $(document).ready(function(){

    <?php
        if(isset($forgot) && $forgot==true){
            echo "
                $('#forgotLink').click();
                $('#emailRecovery').val('{$email}');
                ";
        }
    ?>

    $('#signText').html("Sign In");
    $('#username').focus();
    $('#form-sign').submit(function(e){
     e.preventDefault();
     $.growl({ title: "Please wait.", message: "Checking information...",location:"tc",size:"large" });
     $('#signText').html("<i class='fa fa-circle-o-notch fa-spin'></i> Checking...");
     // console.log($(this).serialize());
     var login = function(){
      $.ajax({
       type:"POST",
       url: "<?=base_url('auth/login');?>",
       dataType: "json",
       data: $('#form-sign').serialize(),
       success: function(response){
        $('signText').html("Sign In");
        if(response.error==true){
            $.growl.error({ title: "Login invalid.", message: "We cannot find your account!",location:"tc",size:"large" });;
            $('#signText').html("Please Try Again");
            $('#signText').removeAttr('disabled');
            $('#username').focus();
        } else {
            $('#signText').html("Success");
            $.growl.notice({ title: "Success!", message: "User found! redirecting...",location:"tc",size:"large" });
            window.history.replaceState({}, "", "dashboard");
            window.history.go();
        }

       }
      });
     };
     setTimeout(login,1500);
    })

    $('#form-forgot').submit(function(e){
        e.preventDefault();
        var emailR = $("#emailR").val();
        var dataForgot = $(this).serialize();
        console.log(dataForgot);
        $.ajax({
            url: "<?=base_url('forgot/generate');?>",
            type:"post",
            data: dataForgot,
            success: function(data){
                data = JSON.parse(data);
                // console.log(data);
                if(data==false){
                    show_stack_custom_top('emailErr',emailR);
                } else {
                    $('#login-forgot').click();
                    show_stack_custom_top('email',emailR);
                    // console.log("nama="+data.nama+"&email="+data.email+"&kode="+data.recovery);
                    $.ajax({
                        url : "<?=base_url('send/mail/forgot');?>",
                        type: "post",
                        data: data,
                        success: function(){
                            // console.log('Success');
                        }
                    })
                }
            }
        });
    });
    $('#form-new_password').submit(function(e){
        e.preventDefault();
        var datanew = $(this).serialize();
        var pw = $('#new').val();
        var pw1 = $('#new1').val();
        console.log(datanew);

        if (pw!==pw1){
            Swal.fire(
              'Mismatched!',
              'Password baru tidak sama.',
              'error'
            );
            $('#new1').val("");
        } else {
            $('#field-new_password').attr('disabled','disabled');
            $('#newText').html("<i class='fa fa-spinner fa-pulse'></i> Processing...");
            $.ajax({
                url: "<?=base_url('forgot/success');?>",
                type: "post",
                data: datanew,
                success: function(data){
                    console.log(data);
                    if(data=="true"){
                        show_stack_custom_top('newpass');
                        $('#login-new').click();
                    }
                }
            })
        }
    })


    $('#form-register').submit(function(e){
        e.preventDefault();
        var agama = $('#agama option:selected').val();

        var email = $('#email').val();
        var nama = $('#nama').val();
        nama = nama.toLowerCase().replace(/\b[a-z]/g, function(letter) {
            return letter.toUpperCase();
        });
        var dataForm = "tipe=save&role=0&"+$(this).serialize();
        console.log(dataForm);
        $('#sendText').disabled = true;
        $('#sendText').html("<i class='fa fa-spinner fa-pulse'></i> Checking...");
        $('#field-register').attr('disabled',true);
        $('#agama').prop('disabled',true);
        $.ajax({
            url: "<?=base_url('proses/simpan/karyawan');?>",
            type:"post",
            data:dataForm,
            success: function(data1){
                var datanya1 = JSON.parse(data1);
                if(datanya1.hasil==="adaUsername"){
                    Swal.fire(
                      'Cancelled',
                      'Karyawan <strong>'+nama+'</strong> sudah ada!',
                      'error'
                    );
                    $('#nama').focus();
                    $('#field-register').attr('disabled',false);
                    $('#agama').prop('disabled',false);
                    $('#sendText').html("Register");
                } else if(datanya1.hasil==="adaEmail"){
                    Swal.fire(
                      'Cancelled',
                      'Email <strong>'+email+'</strong> sudah terpakai!',
                      'error'
                    );
                    $('#email').focus();
                    $('#field-register').attr('disabled',false);
                    $('#agama').prop('disabled',false);
                    $('#sendText').html("Register");
                } else {
                    var datanya = JSON.parse(data1);
                    $('#sendText').html("<i class='fa fa-spinner fa-pulse'></i> Sending Email Validation...");
                    $.ajax({
                        url : "<?=base_url('send/mail/create');?>",
                        type: "post",
                        data: datanya,
                        success: function(datas){
                            $('#field-register').attr('disabled',false);
                            $('#agama').prop('disabled',false);
                            show_stack_custom_top('success',email);
                            $('#sendText').html("Register");
                            $("#login-register").click();
                            Swal.fire(
                              'Berhasil!',
                              'Data Karyawan <strong>'+nama+'</strong> Telah Tersimpan!',
                              'success'
                            );
                        }
                    })
                }
            }

        })

    });

    $('.selectd').select2({
        placeholder: "Pilih salah satu .."
    });

    <?php
        if (isset($loginUlang) && $loginUlang=="stop"){
            echo "show_stack_custom_top('login');";
            $loginUlang = "ulang";
        }
    ?>
  })
</script>
</body>

</html>
