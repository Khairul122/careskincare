<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="<?php echo site_url() ?>/cdn/about/<?php echo config('favicon') ?>" type="image/x-icon" />
        <title><?php echo config('title') ?> - Login</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
        <?php if (config('direction') == 'ltr'): ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/bootstrap.css">
        <?php else: ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/ar/bootstrap.css">
        <?php endif ?>
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/core.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/forms.css">
        <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/components.css">
        <?php if (config('direction') == 'ltr'): ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/custom.css">
        <?php else: ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/ar/custom.css">
        <?php endif ?>
        <script src="<?php echo STYLE_JS ?>/jquery-1.11.1.min.js"></script>
    </head>
	<body class="hold-transition login-page" style="background:url(styles/site/default/assets/img/photo1.jpg)
no-repeat center center fixed; background-size: cover;
 -webkit-background-size: cover; 
 -moz-background-size: cover; -o-background-size: cover;">
    <body class="page-body login-page">
        <div class="login-container">
            <div class="row">
                <div class="col-sm-6">
                    <script type="text/javascript">
                        jQuery(document).ready(function ($)
                        {

                            setTimeout(function () {
                                $(".fade-in-effect").addClass('in');
                            }, 1);

                            $("form#login .form-group:has(.form-control):first .form-control").focus();
                        });
                    </script>
	
	<H1><font color="#000000">APLIKASI KONSULTASI 
	             <br>SM SKINCARE</font></H1>
                    <?php echo form_open(false, 'class="login-form fade-in-effect"') ?>
                    <div class="login-header">
                        <a href="<?php echo site_url() ?>" class="logo">
                            <img src="<?php echo site_url() ?>/cdn/about/<?php echo config('logo') ?>" alt="<?php echo config('title') ?>" width="200" />
                        </a>
                        <font color="#000000"><p>Silahkan Login untuk akses halaman administrator</font></p>
                    </div>
                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger"><?php echo validation_errors() ?></div>
                    <?php endif ?>
                    <div class="form-group">
                        <input type="email" placeholder="Email" name="email" value="<?php echo set_value('email') ?>" class="form-control input-dark" autocomplete="off" >
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control input-dark" autocomplete="off" >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark  btn-block text-right" value="Login">
                            <i class="fa fa-lock"></i>
                            Login
                        </button>
                    </div>
                    <?php echo form_close() ?>                
                </div>
            </div>
        </div>
        <script src="<?php echo STYLE_JS ?>/bootstrap.min.js"></script>
		
    </body>
</html>