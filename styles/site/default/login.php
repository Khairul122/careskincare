<!-- Titlebar
================================================== -->
<section class="page-crumb">
    <div class="container">
        <div class="page-crumb-block">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1><?php echo lang('global_login') ?></h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                            <li class="active">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<div class="container section_padding_100 clearfix">
    <div class="col-md-6 col-md-offset-3">
        <div class="login-sec">
            <form class="login-cust" method="post" autocomplete="off">
                <p class="login-icon">
                    <i class="pe-7s-user"></i>
                    <b>Selamat Datang,</b> Silahkan login dengan akun kamu.
                </p>
                <div class="notification error closeable login_errors alert-danger alert" style="display: none;"></div>

                <div class="form-group">
                    <input class="form-control" type="text" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="password">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <label class="check-text" for="user-session-remember-me">
                                <input name="remember" type="checkbox" tabindex="4" value="1" checked="checked"/>
                                <span class="chk-img"></span>
                                <a id="remember-button">Ingat saya</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="button color big">Login
                        <i class="fa fa-spin fa-spinner login_loading" style="display: none;"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
