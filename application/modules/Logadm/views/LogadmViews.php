<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title>LogIn</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/login.js"></script>
    <!-- /theme JS files -->
</head>

<body class="login-container">
    <!-- <div class="navbar navbar-inverse">
        <div class="navbar-header">
        </div>
    </div> -->
    <div class="page-container">
        <div class="page-content">
            <div class="content-wrapper">
                <div class="content">
                    <form method="POST" action="<?= base_url('ceklogin') ?>">

                        <div class="login-form">
                            <div class="text-center">
                                <div class="icon-object border-warning-400 text-warning-400"><i class="icon-people"></i></div>
                                <h5 class="content-group-lg">Login to your account <small class="display-block"></small></h5>
                                <?= $this->session->flashdata('alert') ?>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="text" name="username" class="form-control input-lg" placeholder="Username">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>

                            </div>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" name="password" class="form-control input-lg" placeholder="Password">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>
                            <div class="form-group login-options">
                                <div class="row">
                                    <!-- <div class="col-sm-6">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" class="styled" checked="checked">
                                            Remember
                                        </label>
                                    </div> -->
                                    <div class="col-sm-12 text-right">
                                        <a href="<?= base_url('ForgotPassAdm') ?>">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-blue btn-block btn-lg">LogIn<i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                            <!-- <div class="content-divider text-muted form-group"><span>Don't have an account?</span></>
                                <a href="<?= base_url('RegisterAdm') ?>" class="btn bg-slate btn-block btn-lg content-group">Register</a>
                            </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>