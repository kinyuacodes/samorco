<?php include(APPPATH.'views/site_settings.php');?>
<?php include(APPPATH.'views/Header.php');?>
  
    <?php $message =$this->session->flashdata('message');?>
    <?php if($message):?>
     <p class="alert alert-success"><?php echo $message;?></p>
    <?php endif;?>
  <!-- ======= Contact Section ======= -->
  <div class="map-section">
    <!--  <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>-->
      <iframe style="border:0; width: 100%; height: 350px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255282.3585373673!2d36.7073085721104!3d-1.3028617915167728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2sbg!4v1624395778204!5m2!1sen!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p><?= $location?></p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p><?php echo $webmail;?><br><?php echo $email;?></p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p><?php echo $phone;?><br><?php echo $phone2;?></p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
          
            <form action="<?php echo base_url('Contact/contact_form');?>" method="POST" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                <?php echo form_input(['class'=>'form-control', 'type'=>'text', 'name'=>'name' ,'id'=>'name' , 'placeholder'=>'Enter full name' ,'value'=>set_value('name') ] );?>
                        <?php echo form_error( 'name','<p class="text-danger">','</p>' );?>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <?php echo form_input(['class'=>'form-control', 'type'=>'email', 'name'=>'email' ,'id'=>'email', 'placeholder'=>'Enter email' ,'value'=>set_value('email') ] );?>
                        <?php echo form_error( 'email','<p class="text-danger">','</p>' );?>
                </div>
              </div>
              <div class="form-group mt-3">
              <?php echo form_input(['class'=>'form-control', 'type'=>'text', 'name'=>'subject','id'=>'subject'  , 'placeholder'=>' subject' ,'value'=>set_value('subject') ] );?>
                        <?php echo form_error( 'subject','<p class="text-danger">','</p>' );?>
              </div>
              <div class="form-group mt-3">
              <?php echo form_textarea(['rows'=>'5','class'=>'form-control', 'type'=>'text', 'name'=>'body'  , 'placeholder'=>'write to us' ,'value'=>set_value('body') ] );?>
                        <?php echo form_error( 'body','<p class="text-danger">','</p>' );?>
              </div>
              <div class="my-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message"></div>
              </div>
              <div class="text-center"><button class="primary" type="submit">Send Message</button></div>
            <?php echo form_close();?>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php include(APPPATH.'views/Footer.php');?>