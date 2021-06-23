<?php include(APPPATH.'views/site_settings.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
  <?php if($title):?>
    <?= $site_name;?> - <?= $title;?>
   <?php else:?>
      <?php echo $site_name;?>
  <?php endif;?>
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!--========== CSS ==========-->
<link rel="stylesheet" href=" <?php echo base_url();?>assets/services/assets/css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/venobox/venobox.css" type="text/css" media="screen" />
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

     <!-- <h1 class="logo me-auto"><a href="index.html"><span>Com</span>pany</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo me-auto me-lg-0"><img src="<?php echo  base_url();?>assets/logo/sam.webp" alt="<?= $site_name;?>" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="<?= base_url();?>">Home</a></li>
          <li><a href="<?php echo base_url();?>Services">Services</a></li>
          <li><a href="<?php echo base_url();?>TV">TV</a></li>
          <li><a href="<?php echo base_url();?>Team">Team</a></li>
          <li><a href="<?php echo base_url();?>News">News</a></li>
          <li><a href="<?php echo base_url();?>Contact">Contact</a></li>
          <li><a href="<?php echo base_url();?>About">About</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="<?php echo $twitter;?>" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="<?php echo $facebook;?>" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="<?php echo $instagram;?>" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="<?php echo $facebook;?>" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
    <style>
           /*/video*/
           .v-header {
    height: 100vh;
    display: flex;
    align-items: center;
    color: #fff;
}

.container1 {
    max-width: 960px;
    padding-left: 1rem;
    padding-right: 1rem;
    margin: auto;
    text-align: center;
}

.fullscreen-video-wrap {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    overflow: hidden;
}

.fullscreen-video-wrap video {
    min-height: 100%;
    min-width: 100%;
}

.header-overlay {
    height: 100vh;
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    z-index: 1;
    background: #225470;
    opacity: 0.85;
}

.header-content {
    z-index: 2;
}

.header-content h1 {
    font-size: 50px;
    margin-bottom: 0;
}

.header-content p {
    font-size: 1.5rem;
    display: block;
    padding-bottom: 2rem;
}

.btn {
    background: #34b3a0;
    color: #fff;
    font-size: 1.2rem;
    padding: 1rem 2rem;
    text-decoration: none;
    cursor: pointer;
    transition-delay: .1s;
    animation-delay: .3s;
}

.btn:hover {
    background: hsl(246, 93%, 48%);
    color: #fff;
    font-size: 1.2rem;
    padding: 1rem 2rem;
    text-decoration: none;
    cursor: pointer;
}
    </style>
  </header><!-- End Header -->
  < <header class="v-header container1">
        <div class="fullscreen-video-wrap">
            <!--  https://www.videvo.net/video/typing-on-computer-white-bg/4475/ -->
            <!-- DO NOT USE THIS VIDEO, I JUST NEEDED A HOSTED VIDEO FOR THIS CODEPEN> USE THE ONE ABOVE -->
            <video controls muted src="<?=base_url();?>assets/access/bye.mp4" loop autoplay="loop">
            </video>
        </div>
        <div class="header-overlay"></div>
        <div class="header-content text-md-center">
            <h1>Welcome Everyone</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
            <a class="btn">Find Out More</a>
        </div>
    </header>

<!-- ======= Services Section ======= -->
  <!--========== MAIN ==========-->
  <main class='main'>
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <!--========== ISLANDS 1 ==========-->
                    <section class="islands swiper-slide">
                        <img src="<?php echo base_url();?>assets/services/assets/img/borabora.jpg" alt="" class="islands__bg">

                        <div class="islands__container bd-container">
                            <div class="islands__data">
                                <h2 class="islands__subtitle">Islands</h2>
                                <h1 class="islands__title">Bora Bora</h1>
                                <p class="islands__description">Small South Pacific island northwest of Tahiti in French Polynesia, surrounded by motus.</p>
                                <a href="#" class="islands__button">Explore <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                            </div>

                            <div class="islands__video">
                                <div class="islands__video-content">
                                    <i class='bx bx-play-circle islands__video-icon'></i>
                                </div>
                            </div> 
                        </div>
                    </section>
        
                    <!--========== ISLANDS 2 ==========-->
                    <section class="islands swiper-slide">
                        <img src="<?php echo base_url();?>assets/services/assets/img/bali.jpg" alt="" class="islands__bg">

                        <div class="islands__container bd-container">
                            <div class="islands__data">
                                <h2 class="islands__subtitle">Islands</h2>
                                <h1 class="islands__title">Bali</h1>
                                <p class="islands__description">It is an Indonesian island known and beautiful for its lush active volcanic mountains.</p>
                                <a href="#" class="islands__button">Explore <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                            </div>

                            <div class="islands__video">
                                <div class="islands__video-content">
                                    <i class='bx bx-play-circle islands__video-icon'></i>
                                </div>
                            </div>  
                        </div>
                    </section>
                    
                    <!--========== ISLANDS 3 ==========-->
                    <section class="islands swiper-slide">
                        <img src="<?php echo base_url();?>assets/services/assets/img/palawan.jpg" alt="" class="islands__bg">

                        <div class="islands__container bd-container">
                            <div class="islands__data">
                                <h2 class="islands__subtitle">Islands</h2>
                                <h1 class="islands__title">Palawan</h1>
                                <p class="islands__description">Also known as La Paragua, it is the largest island in the province of Palawan.</p>
                                <a href="#" class="islands__button">Explore <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                            </div>

                            <div class="islands__video">
                                <div class="islands__video-content">
                                    <i class='bx bx-play-circle islands__video-icon'></i>
                                </div>
                            </div>  
                        </div>
                    </section>

                    <!--========== ISLANDS POPUP ==========-->
                    <div class="islands__popup" id="popup">
                        <div>
                            <div class="islands__popup-close" id="popup-close">
                                <i class='bx bx-x'></i>
                            </div>
            
                            <iframe class="islands__popup-video" src="https://www.youtube.com/watch?v=x3k9RatMkBI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!--========== CONTROLS ==========-->
            <div class="controls gallery-thumbs">
                <div class="controls__container swiper-wrapper">
                    <img src="<?php echo base_url();?>assets/services/assets/img/borabora.jpg" alt="" class="controls__img swiper-slide">
                    <img src="<?php echo base_url();?>assets/services/assets/img/bali.jpg" alt="" class="controls__img swiper-slide">
                    <img src="<?php echo base_url();?>assets/services/assets/img/palawan.jpg" alt="" class="controls__img swiper-slide">
                </div>
            </div>
        </main>



        
        <!-- Home cards 2 -->
        <section class="home-cards">
            <?php if($sideposts):?>
                <?php foreach($sideposts as $post):?>
                    <div>
                        <img src="<?php echo base_url();?>images/users/posts/<?php echo $post->image;?>" alt="" />
                        <h3><?php echo $post->title;?></h3>
                        <p>
                           <?php echo word_limiter($post->body,20);?>
                        </p>
                        <a href="<?php echo base_url();?>News/view/<?php echo $post->slug;?>">Read more <i class="fas fa-chevron-right"></i></a>
                    </div>
                <?php endforeach;?>
                <?php else:?>
                <?php endif;?> 
                   
          </section>
          
          <!-- Carbon -->
          <section class="carbon dark">
            <div class="content">
              <h2>Quote of the day</h2>
              <p>
                  //bakari section
              </p>
                <a href="#" class="btn1">
                  Random Quote <i class="fas fa-chevron-right"></i>
                </a>
            </div>
          </section>

<?php include(APPPATH.'views/Footer.php');?>