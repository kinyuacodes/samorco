<?php include(APPPATH.'views/site_settings.php');?>
<?php include(APPPATH.'views/Header.php');?>
  <!--========== SWIPER CSS ==========-->
  <link rel="stylesheet" href=" <?php echo base_url();?>assets/services/assets/css/swiper-bundle.min.css">

<!--========== CSS ==========-->
<link rel="stylesheet" href=" <?php echo base_url();?>assets/services/assets/css/styles.css">
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
<?php include(APPPATH.'views/Footer.php');?>