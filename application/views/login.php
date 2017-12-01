<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Agni Solar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo asset_url(); ?>css/style.css"/>
        <script>var BASE_URL = "<?php echo base_url(); ?>";</script>
        <script type="text/javascript" src="<?php echo asset_url(); ?>/js/jquery-1.11.1.js"></script>       
        <script type="text/javascript" src="<?php echo asset_url(); ?>js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo asset_url(); ?>js/login.js"></script>

    </head>
    <body class="login-bg">
        <div class="container">
    	<div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        
                        <h4><?php echo $this->session->flashdata('error'); ?></h4> 
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Reset Password</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="<?php echo base_url(); ?>login/verification" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Mobile Number" value="">
                                        <?php echo form_error('username'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                        <?php echo form_error('password'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form id="register-form" action="<?php echo base_url(); ?>login/reset" method="post" role="form" style="display: none;">
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Mobile Number" value="">
                                        <?php echo form_error('email'); ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Reset Password">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</div>
        </div>
    </body>
</html>