<?php include "../config/database.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet"/>

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">Özde<b>İnşaat</b></a>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST" action="islem.php">
                <div class="msg">Yönetim Paneline Giriş</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="admin_kadi" placeholder="Kullanıcı Adı" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="admin_sifre" placeholder="Şifre" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button  name="giris" class="btn btn-block bg-pink waves-effect" type="submit">Giriş Yap</button>
                    </div>
                    <?php if (@$_GET["giris"]=="no"){ ?>
                    <!--<div class="alert alert-danger" style="border: 2px solid #bd362f!important; color: #bd362f!impotant; font-size: 15px:"><span class="icon-close"></span> Sisteme girerken bir hata oluştu!</div> -->
                    <div class="col-xs-12">
                        <a class="btn btn-block bg-red waves-effect">Sisteme girerken bir hata oluştu!</a>
                    </div>
                    <?php }elseif (@$_GET["giris"]=="no"){ ?>
                        <!--<div class="alert alert-danger" style="border: 2px solid #bd362f!important; color: #bd362f!impotant; font-size: 15px:"><span class="icon-close"></span> Sisteme girerken bir hata oluştu!</div> -->
                        <div class="col-xs-12">
                            <a class="btn btn-block bg-red waves-effect">Sisteme girerken bir hata oluştu!</a>
                        </div>
                    <?php } ?>



                </div>
            </form>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="plugins/node-waves/waves.js"></script>

<!-- Custom Js -->
<script src="js/admin.js"></script>

</body>
</html>
