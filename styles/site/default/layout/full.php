<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php echo config('title') ?></title>
        <meta name="author" content="snippets-code" />
        <meta name="description" content="<?php echo config('meta_description') ?>">
       	<link rel="shortcut icon" href="<?php echo site_url() ?>/cdn/about/<?php echo config('favicon') ?>" type="image/x-icon">
        <?php if (config('direction') == 'ltr'): ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/style.css" type="text/css">
        <?php else: ?>
            <link rel="stylesheet" href="<?php echo STYLE_CSS ?>/style-ar.css" type="text/css">
        <?php endif ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body>
        <!-- <div id="preloader">
            <div class="boxplus-load"></div>
        </div> -->
        <!-- ==================== Header Area Start ==================== -->
        <header class="header_area animated">
            <div class="container">
                <div class="row">
                    <!-- Logo Area Start -->
                    <div class="col-md-2">
                        <div class="logo_area">
                            <a href="<?php echo site_url() ?>">
                                <img src="<?php echo site_url() ?>/cdn/about/<?php echo config('logo') ?>" alt="<?php echo config('title') ?>">
                            </a>
                        </div>
                    </div>
                    <!-- Menu Area Start -->
                    <div class="col-md-8">
                        <div class="menu_area text-right">
                            <nav id="nav-menu">
                                <ul id="nav">
                                    <li><a href="<?php echo site_url() ?>"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
                                    <li><a href="<?php echo site_url('knowledge_base') ?>"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Topik</a></li>
                                    <li><a href="<?php echo site_url('home/contact') ?>"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <?php if (!(user())): ?>
                            <div class="client-login">
                                <a href="javascript:popup_switch('login')" class="login btn btn-primary"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Login / Registrasi</a>
                            </div>
                        <?php else: ?>
                            <div class="client-log">
                                <a href="<?php echo site_url('dashboard/settings') ?>" class="user-login">
                                    <span>
                                        <?php if (user()->image): ?><img src="<?php echo base_url() ?>/cdn/users/<?php echo user()->image ?>" alt="<?php echo user()->username ?>"> <?php endif ?>
                                        <?php if (!(user()->image)): ?><img src="<?php echo base_url() ?>/cdn/users/default.png" alt="<?php echo user()->username ?>"> <?php endif ?>  
                                    </span>
                                </a>
                                <a href="<?php echo site_url('dashboard/tickets') ?>" class="user-icon"><i class="fa fa-ticket"></i></a>
                                <a href="<?php echo site_url('account/logout') ?>" class="user-icon power-user"><i class="fa fa-power-off"></i></a>
                            </div>
                        <?php endif ?>

                    </div>
                </div>
        </header>
        <div class="main-content2">
            {layout}
        </div>
        <div class="footer_social_browser_contact_area">
            <div class="social_browsar text-center">
                <?php if (config('facebook')): ?><a href="<?php echo config('facebook') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif ?>
                <?php if (config('twitter')): ?><a href="<?php echo config('twitter') ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php endif ?>
                <?php if (config('instagram')): ?><a href="<?php echo config('instagram') ?>"> <i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php $pages = $this->db->get('halaman')->result(); ?>
                        <?php if ($pages): ?>
                            <ul class="made_by_text footer_links list-inline">
                                <?php foreach ($pages as $page): ?>
                                    <li><a href="<?php echo site_url('page/' . $page->permalink) ?>"><?php echo $page->title ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif ?>
                    </div>
                    <div class="col-md-4">
                        <div class="made_by_text text-right">
                            <p><?php echo config('copyright') ?> Powered BY <i class="fa fa-heart powered"></i> by <a href="">Programmer</a></p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <?php if (!user()): ?>
            <div class="modal fade loginModel" role="dialog">
                <div class="modal-dialog login-model">
                    <div class="modal-content">
                        <div class="modal-body">
                            <i class="fa fa-times-circle close" aria-hidden="true" data-dismiss="modal"></i>
                            <div class="clearfix"></div><br />
                            <div class="notification error closeable login_errors alert-danger alert" style="display: none;"></div>
                            <form class="popup_login" method="post" autocomplete="off">
                                <p class="login-icon">
                                    <i class="pe-7s-user"></i>
                                    <b>Selamat Datang,</b> Silahkan Login dengan akun kamu.
                                </p>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 text-left">
                                            <label class="check-text" for="user-session-remember-me">
                                                <input name="remember" type="checkbox" tabindex="4" value="1" checked="checked"/>
                                                <span class="chk-img"></span>
                                                <a id="remember-button">tetap terhubung</a>
                                            </label>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <a href="javascript:popup_switch('forgot')" class="forget-pass">Lupa Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button color big">Login
                                        <i class="fa fa-spin fa-spinner login_loading" style="display: none;"></i>
                                    </button>
                                </div>
                            </form>

                            <form class="popup_register" method="post">
                                <p class="login-icon">
                                    <i class="pe-7s-id"></i>
                                    <b>Selamat datang</b>!!
                                </p>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password_2" placeholder="Konfirmasi Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button color big">Registrasi
                                        <i class="fa fa-spin fa-spinner login_loading" style="display: none;"></i>
                                    </button>
                                </div>
                            </form>

                            <form class="popup_forgot" method="post">
                                <p class="login-icon">
                                    <i class="pe-7s-lock"></i>
                                   Masukkan email untuk mengambalikan password
                                </p>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button color big">Reset password
                                        <i class="fa fa-spin fa-spinner login_loading" style="display: none;"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <p class="popup_login">Tidak punya akun? <a href="javascript:popup_switch('register')">Registrasi sekarang</a>
                            </p>
                            <p class="popup_forgot">Belum Punya akun? <a href="javascript:popup_switch('register')">Registrasi sekarang</a>
                            </p>
                            <p class="popup_register">Sudah Punya akun? <a href="javascript:popup_switch('login')">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>

        <!-- ============= All JS ============= -->
        <script> var site_url = '<?php echo site_url() ?>';</script>
        <script src="<?php echo STYLE_JS ?>/jquery-2.2.4.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/bootstrap.js"></script>
        <script src="<?php echo STYLE_JS ?>/plugins.js"></script>
        <script src="<?php echo STYLE_JS ?>/jquery-printme.min.js"></script>
        <script src="<?php echo STYLE_JS ?>/switcher.js"></script>
        <script src="<?php echo STYLE_JS ?>/custom.js"></script>
    </body>
</html>