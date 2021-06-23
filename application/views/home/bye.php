<?php include(APPPATH.'views/site_settings.php');?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site_name;?>-Bye</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/access/style.css">
</head>
 <style>
     .success{
         background-color: green !important;
     }
     .green{
      color:green;
      font-size:17px;
      font-weight:800;
     }

 </style>
<body>


    <section class="showcase">
        <header>
            <h2 class="logo"><?= $site_name;?></h2>
            <div class="toggle"></div>
        </header>
        <video src="<?php echo base_url();?>assets/access/bye.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
            <h2>Never Stop  </h2>
            <h3>Exploring The World</h3>
            <p><span class="green">Developer</span>Thank you for being part of eatimess,any enquiries?
             <a href="<?php echo base_url();?>Contact">Contact developer</a><br>


                <?php if($message = $this->session->flashdata('message') ):?>
            <div style="color:chartreuse;font-size:20px;" class="success">
                <?php echo $message;?>
            </div>
            <?php else:?>
                <span class="success">Bye Bye See you Soon</span>
            <?php endif;?>.</p>
            <!--<a href="#">Explore</a>-->
        </div>
        <ul class="social">
        <li><a href="<?php echo $facebook;?>"><img src="<?php echo base_url();?>assets/access/facebook.png"></a></li>
            <li><a href="<?php echo $twitter;?>"><img src="<?php echo base_url();?>assets/access/twitter.png"></a></li>
            <li><a href="<?php echo $instagram;?>"><img src="<?php echo base_url();?>assets/access/instagram.png"></a> </li>
       
        </ul>
    </section>
    <div class="menu">
        <ul>
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url();?>News">News</a></li>
            <li><a href="<?php echo base_url();?>Services">Services </a></li>
            <li><a href="<?php echo base_url();?>About">About</a></li>
            <li><a href="<?php echo base_url();?>Auth/">Login</a></li>
        </ul>
    </div>
</body>

</html>
<script>
const menuToggle = document.querySelector('.toggle');
const showcase = document.querySelector('.showcase');

menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    showcase.classList.toggle('active');
})
</script>