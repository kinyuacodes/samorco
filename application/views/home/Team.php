<?php include(APPPATH.'views/site_settings.php');?>

<?php include(APPPATH.'views/Header.php');?>
  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Team</strong></h2>
          <p>Meet our team </p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="<?php echo base_url();?>images/team/williams.png" class="img-fluid" alt="">
                <div class="social">
                  <a href="<?= $facebook;?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?= $facebook;?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?= $facebook;?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?= $facebook;?>"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Lilian Williams</h4>
                <span>MD BroadCast</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="<?php echo base_url();?>images/team/rose2.webp" class="img-fluid" alt="">
                <div class="social">
                <a href="<?= $facebook;?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?= $facebook;?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?= $facebook;?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?= $facebook;?>"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rose Kamande</h4>
                <span>Admin Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="<?php echo base_url();?>images/team/stephy.webp" class="img-fluid" alt="">
                <div class="social">
                  <a href="<?= $facebook;?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?= $facebook;?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?= $facebook;?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?= $facebook;?>"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Stacy Maina</h4>
                <span>Production Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="<?php echo base_url();?>images/team/steph.webp" class="img-fluid" alt="">
                <div class="social">
                <a href="<?= $facebook;?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?= $facebook;?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?= $facebook;?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?= $facebook;?>"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Stephanie Wambui</h4>
                <span>Host</span>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Our Team Section -->

  </main><!-- End #main -->
  <?php include(APPPATH.'views/Footer.php');?>