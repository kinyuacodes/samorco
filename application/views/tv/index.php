<?php include(APPPATH.'views/site_settings.php');?>

<?php include(APPPATH.'views/Header.php');?>
<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");?>

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
/*video styles*/
:root{
    --accent:#3DB45E;
    --dark:#17191D;
    --light:#fff;
    --overlay:rgba(23,25,29,0.8);
    --ease:all 0.3s ease 0s;

       
}
.content-section{
    background-color: #007bff;
    color: var(--light);
}

.main-btn{
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    transition: var(--ease);
    width: 131px;
    padding: 12px 0px;
    background-color: var(--accent);
    border: none;

}
.main-btn:hover{
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    transition: var(--ease);
    background-color:rgb(45, 45, 226);
    color: #fff;

}

.top-section p,h4{
  font-size: 18px;

}

.wrapper{
    display:grid;
    grid-template-columns:1fr;
    grid-template-areas:
    "top_section"
    "content_section"
    ;

}
.vid{
    grid-area:header;
    display:flex;
    flex-direction: column;
    justify-content: center;


}
.vid p{
    max-width: 750px;
    margin-bottom: 30px;
}

.top-section{
    grid-area :top_section;
    min-height: 370px;
    display: grid;
    grid-template-columns: 10% 1fr 10%;
    grid-template-areas:
     ". header ."
    ;
    background: linear-gradient(var(--overlay),var(--overlay)),url(<?php echo base_url();?>assets/auth/bana.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
 
}
.top-section p,h1{
    color: whitesmoke;
}
.content-section{
    grid-area :content_section;
    display:grid;
    grid-template-columns: 10% 1fr 10%;
    grid-template-areas: 
    ". playlist-one ."
    ". playlist-two .";
   margin-bottom: 60px;
    
   
}
.playlist-one{
    grid-area: playlist-one;
}
.playlist-two{
    grid-area: playlist-two;
}

.playlist-title{
    margin: 30px 0;
}
.videos{
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-gap: 20px;

}

.video{
    height:180px ;
    grid-column-start: span 3;
    position: relative;
    transition: var(--ease);
    background-size:cover;
    background-position: center;
    background-repeat:no-repeat;
   

}
.video:hover{
    transform:scale(1.02);
}
.video i{
    cursor: pointer;
    font-size: 60px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    color:#fff;
    opacity: 0.85;
    transition: var(--ease);


}

.video i:hover{
  opacity: 1;
  color:green;
}


 @media only screen and (max-width:1200px){
  .video{
    grid-column-start: span 6;
     height: 240px;
      
  }
}
 @media only screen and (max-width:800px){
  .video{
    grid-column-start: span 12;
 

  }
}

/*video styles..//...*/
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
     <!-- ======= video start ======= -->
  <div class="wrapper">
          <section class="top-section">
              <header  class="vid">
                  <h1>Lorem ipsum dolor sit.</h1>
                  <p>Lorem ipsum dolor sit amet consectetur
                       adipisicing elit. Explicabo exercitationem rem sit?</p>
                       <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI" data-gall="myGallery"data-gall="myGallery"><button class="main-btn">Wath Now</button> </a>    
              </header>
          </section>
          <!--end section-->
          <!--content-->
           <section class="content-section">
              <div class="playlist-one">
                  <h4 class="playlist-title">title one</h4>
                  <div class="videos">
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                      <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI" data-gall="myGallery" ><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI" data-gall="myGallery"><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI"data-gall="myGallery" ><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI" data-gall="myGallery"><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI" data-gall="myGallery"><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI"data-gall="myGallery" ><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI" data-gall="myGallery"><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI" data-gall="myGallery"><i class="bu bi-play"></i></a>
                      </div>
                  </div>
              </div>
              <div class="playlist-two">
                  <h4 class="playlist-title">title 2</h4>
                  <div class="videos">
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                      <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI"data-gall="myGallery" ><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI"data-gall="myGallery" ><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI"data-gall="myGallery" ><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI"data-gall="myGallery" ><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI"data-gall="myGallery" ><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI"data-gall="myGallery" ><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI"data-gall="myGallery" ><i class="bu bi-play"></i></a>
                      </div>
                      <div class="video" style="background-image: url(<?php echo base_url();?>assets/auth/2.jpg);  background-color: blue;">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=x3k9RatMkBI" data-gall="myGallery"><i class="bu bi-play"></i></a>
                      </div>
                  </div>
              </div>
           </section><!--end of content-->
           
       </div><!--end of wrapper-->
  <!-- =======// videos // ======= -->
<?php include(APPPATH.'views/Footer.php');?>