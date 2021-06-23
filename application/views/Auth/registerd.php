<!DOCTYPE html>
<html>
<?php include(APPPATH."views/social_links.php");?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $developer;?>-register</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: black;
    }

    * {
        box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
        background-color: white;
        color: #fff;
        background-image: linear-gradient(rgba(29, 38, 113, 0.8), rgba(195, 55, 100, 0.8)), url('<?php echo base_url();?>assets/auth/1.jpg');
        background-size: cover;
        background-repeat: no-repeat;


    }

    img {
        opacity: 0.4;

    }

    /* Full-width input fields */
    input[type=text],
    input[type=email],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }
    select{
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=email]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity: 1;
    }

    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }

    .small {
        font-size: 18px;
        color: #00994d;

    }
    .text-danger {
        color: greenyellow;
    }
    </style>
</head>

<body>

    <form action="<?php echo base_url('Auth/user');?>" method="POST">
        <div class="container">
            <h1>KenyanTimes- <small class="small">Create account</small></h1>
            <p class="small">Please fill in this form to create an account.</p>
            <?php if($message = $this->session->flashdata('message') ):?>
            <div class="small">
                <?php echo $message;?>
            </div>
            <?php endif;?>
            <hr>

            <label for="email"><b>Name</b></label>
            <?php echo form_input([ 'type'=>'text', 'name'=>'name' ,'class'=>'form-control' , 'placeholder'=>'Enter full name'  ] );?>
            <?php echo form_error( 'name','<p class="text-danger">','</p>' );?>



            <label for="psw"><b>Email</b></label>
            <?php echo form_input( [ 'type'=>'email', 'name'=>'email' ,'class'=>'form-control' ,         
                'placeholder'=>'Enter email'  ] );?>
            <?php echo form_error( 'email','<p class="text-danger">','</p>' );?>



            <label for="psw-repeat"><b>Username</b></label>
            <?php echo form_input( [ 'type'=>'text', 'name'=>'username' ,'class'=>'form-control'  ,   'placeholder'=>'Enter username'  ] );?>
            <?php echo form_error( 'username','<p class="text-danger">','</p>' );?>

            <label for="psw-repeat">Role</label>
            <select name="level" id="" class="form-control">
                <option value="">Select</option>
                <?php if(!isset($checkingadmin) ):?>
                <option value="1">Admin</option>
                <option value="2">User</option>
                <?php else:?>
                <option value="2">User</option>
                <?php endif;?>
            </select>

            <?php echo form_error('level','<p class="text-danger">','</p>');?>

            <label for="psw-repeat"><b>password</b></label>
            <?php echo form_input( [ 'type'=>'password', 'name'=>'password' ,'class'=>'form-control' ,         
              'placeholder'=>'Enter password' ] );?>
            <?php echo form_error( 'password','<p class="text-danger">','</p>');?>


            <label for="psw-repeat"><b>Confirm-password</b></label>
            <?php echo form_input( [ 'type'=>'password', 'name'=>'conf_password' ,'class'=>'form-control' , 
                                  'placeholder'=>'Enter confirm_password'  ]);?>
            <?php echo form_error( 'conf_password','<p class="text-danger">','</p>');?>


            <hr>
            <p>By creating an account you agree to our <a href="<?= base_url();?>Terms">Terms & Privacy</a>.</p>

            <button type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>Already have an account? <a href="<?= base_url();?>Auth">Sign in</a>.</p>
        </div>
    </form>

</body>

</html>