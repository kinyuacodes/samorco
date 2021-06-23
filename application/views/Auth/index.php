<?php include(APPPATH."views/Site_settings.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site_name?>-Account</title>
    <link rel="stylesheet" href="<?= base_url();?>assets/Auth/main.css">
    <style>
    .text-danger {
        color: greenyellow;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-register">
            <div class="nav-buttons">
                <button id="loginBtn" class='active'>Login </button>
                <button id="registerBtn">Create Account</button>
            </div>
            <div class="form-group">
                <?php if($message = $this->session->flashdata('message') ):?>
                <div class="text-danger">
                    <?php echo $message;?>
                </div>
                <?php endif;?>
                <!--loghin part-->
                <form action="<?php echo base_url('Auth/login')?>" method="POST" id="loginform" novalidate>
                    <label for="username">Email</label>
                    <?php echo form_input(
                     [ 'type'=>'email', 'name'=>'email' ,        
                      'placeholder'=>'Enter your user email' 
                    ]);?>
                    <?php echo form_error(  'email','<p class="text-danger">','</p>' );?>
                    <label for="password">password</label>
                    <?php echo form_input( [ 'type'=>'password', 'name'=>'password'  ,         
                      'placeholder'=>'Enter your password'  ] );?>
                    <?php echo form_error('password','<p class="text-danger">','</p>' );?>
                    <input type="submit" value="Login" class="submit">
                    <?php echo form_close();?>
                    <!--XX------loghin part-----XX-->
                    <!-------regester------->
                    <form action="<?php echo base_url('Auth/user');?>" method="POST" id="registerform">
                 
                        <label for="fullname">fullname</label>
                        <?php echo form_input([ 'type'=>'text', 'name'=>'name'  , 'placeholder'=>'Enter full name'  ] );?>
                        <?php echo form_error( 'name','<p class="text-danger">','</p>' );?>
                        <label for="email">email</label>
                        <?php echo form_input( [ 'type'=>'email', 'name'=>'email' ,         
                        'placeholder'=>'Enter email'  ] );?>
                        <?php echo form_error( 'email','<p class="text-danger">','</p>' );?>
                        <label for="email">Username</label>
                        <?php echo form_input( [ 'type'=>'text', 'name'=>'username','placeholder'=>'Enter username'  ] );?>
                        <?php echo form_error( 'username','<p class="text-danger">','</p>' );?>
                        <label for="role">Admin/User</label>
                        <select name="level" class="input">
                            <option value="">Select</option>
                            <?php if(!isset($checkingadmin) ):?>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                            <?php else:?>
                            <option value="2">User</option>
                            <?php endif;?>
                        </select>
                        <?php echo form_error('level','<p class="text-danger">','</p>');?>

                        <label for="passwword">password</label>
                        <?php echo form_input( [ 'type'=>'password', 'name'=>'password',         
                          'placeholder'=>'Enter password' ] );?>
                        <?php echo form_error( 'password','<p class="text-danger">','</p>');?>
                        <label for="confirmpassword">confirm password</label>
                        <?php echo form_input( [ 'type'=>'password', 'name'=>'conf_password' , 
                                  'placeholder'=>'Enter confirm_password'  ]);?>
                        <?php echo form_error( 'conf_password','<p class="text-danger">','</p>');?>
                        <input type="submit" value="Register" class="submit">
                        <p>By signing in You Agree to <a href="<?= base_url();?>Terms" class="link">Terms &
                                Conditions.</a></p>
                    <?= form_close();?>

            </div>
            <div id="forgot">
                <a href="" class="link">forgot password?</a>

            </div>
        </div>

    </div>
    <script>
    var loginBtn = document.getElementById("loginBtn");
    var registerBtn = document.getElementById("registerBtn");
    var loginform = document.getElementById("loginform");
    var registerform = document.getElementById("registerform");
    var forgot = document.getElementById("forgot");

    registerBtn.onclick = function() {
        registerform.style.left = '0px';
        registerform.style.opacity = '1';
        loginform.style.left = '-500px';
        loginform.style.opacity = '0';
        forgot.style.left = '-500px';
        forgot.style.opacity = '0';
        registerBtn.classList.add('active');
        loginBtn.classList.remove('active');

    }

    loginBtn.onclick = function() {
        loginform.style.left = '0px';
        loginform.style.opacity = '1';
        forgot.style.left = '0px';
        forgot.style.opacity = '1';
        registerform.style = '500px';
        loginBtn.classList.add('active');
        registerBtn.classList.remove('active');
        registerform.style.opacity = '0';
    }
    </script>
</body>

</html>