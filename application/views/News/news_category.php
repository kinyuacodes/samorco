<?php include(APPPATH.'views/site_settings.php');?>

<?php include(APPPATH.'views/Header.php');?>

<style>
.cat{
    color:red !important;
}
</style>
  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

          <?php if($posts):?>
          <?php foreach($posts as $post):?>
          <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url();?>images/users/posts/<?php echo $post->image;?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?php echo base_url();?>News/view/<?php echo $post->slug;?>"><?php echo $post->title;?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php echo base_url();?>News/view/<?php echo $post->slug;?>"><?php echo $post->name;?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php echo base_url();?>News/view/<?php echo $post->slug;?>"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                 
                    <li class="d-flex align-items-center "><i class="bi bi-chat-dots"></i> <a class="cat" href="<?php echo base_url();?>News/view/<?php echo $post->slug;?>"><?php echo $post->category_name; ?></a></li>
                </ul>
                   
                 
                 
              </div>

              <div class="entry-content">
                <p>
                
                 <?php echo word_limiter($post->body,70);?>
                </p>
                <div class="read-more">
                  <a href="<?php echo base_url();?>News/view/<?php echo $post->slug;?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
         <?php endforeach;?>
         <?php else:?>
                     <h3 class="clor">No posts.</h3> 
                <?php endif;?>

            <style>
             .next{
                 letter-spacing:5px;
                 color:red;
             }
             
            </style>

            <div class="blog-pagination">
              <ul class="justify-content-center">
               <ol class="next"><?php echo $this->pagination->create_links();?></ol> 
             </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                <?php if($categories):?>
                     <?php foreach($categories as $category):?>
                        <li><a href="<?php echo base_url();?>Category/<?php echo $category->id;?>"><?php echo $category->category_name;?> <span></span></a></li>
                     <?php endforeach;?>
                     <?php else:?>
                      <li><a href="#">General <span></span></a></li>
                <?php endif;?>
                 
                 
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
              <?php if($sideposts):?>
                     <?php foreach($sideposts as $sidepost):?>
                    <div class="post-item clearfix">
                          <img src="<?= base_url();?>images/users/posts/<?php echo $sidepost->image;?>" alt="">
                        <h4><a href="<?php echo base_url();?>News/view/<?php echo $sidepost->slug;?>"><?php echo $sidepost->title;?></a></h4>
                        <time datetime="<?php echo $sidepost->post_date;?>"><?php echo $sidepost->post_date;?></time>
                     </div>
                     <?php endforeach;?>
                     <?php else:?>
                      <div class="post-item clearfix">
                      <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                      <h4><a href="<?php echo base_url();?>News/"> No posts</a></h4>
                     <time datetime="2020-01-01"><?php echo $year ?>
                </div>
                <?php endif;?>
                

               

                

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->



<?php include(APPPATH.'views/Footer.php');?>