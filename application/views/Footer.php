<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Company</h3>
        <p>
           <?php echo  $location_footer;?>
          <strong>Phone:</strong> <?php echo $phone;?><br>
          <strong>Email:</strong> <?php echo $email;?><br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>">Web Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>">Web Development</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>">Product Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url();?>">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>Join Our news letter today and recieve update via Email</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <?php echo $year;?> <strong><span><?php echo $site_name;?></span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
      Designed by <a href="<?php echo $developer_url;?>"><?php echo $developer_name?></a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
  <a href="<?php echo $twitter; ?>" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="<?php echo $facebook; ?>" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="<?php echo $instagram; ?>" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="<?php echo $facebook; ?>" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url(); ?>assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<!--veno box-->
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/venobox/venobox.min.js"></script>

<script>
$(document).ready(function(){
    $('.venobox').venobox({
      closeColor:' #66ffff',
      spinColor:'#fff',
      closeBackground:'blue',
      overlayColor:'rgba(23,25, 29, 0.8)'

    }); 
});

</script>
  <!--========== GSAP ==========-->
  <script src="<?php echo base_url();?>assets/services/assets/js/gsap.min.js"></script>

<!--========== SWIPER JS ==========-->
<script src="<?php echo base_url();?>assets/services/assets/js/swiper-bundle.min.js"></script>

<!--========== MAIN JS ==========-->
<script src="<?php echo base_url();?>assets/services/assets/js/main.js"></script>
</body>





















</html>