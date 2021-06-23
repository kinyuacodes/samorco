<?php include(APPPATH.'views/site_settings.php');?>

<?php include(APPPATH.'views/Header.php');?>
<?php $this->form_validation->set_error_delimiters('<p class=" alert-danger">', '</p>');?>
   <?php echo validation_errors();?>
   <?php if($this->session->flashdata('commented')):?>
   <p class=" alert alert-success"><?php echo  $this->session->flashdata('commented');?></p>
   <?php endif;?>
 <!-- ======= Blog Single Section ======= -->
 <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">
                        <?php if($post):?>

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="<?php echo base_url();?>images/users/posts/<?php echo $post->image;?>" alt=""
                                    class="img-fluid">
                            </div>


                            <h2 class="entry-title">
                                <a
                                    href="<?php echo base_url();?>Home/<?php echo $title;?>"><?php echo $post->title;?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="<?php echo base_url();?>Home/<?php echo $title;?>">
                                            <?php echo $post->name;?> </< /a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="<?php echo base_url();?>Home/<?php echo $title;?>">
                                            <time datetime="2020-01-01"><?php echo $post->post_date;?> </< /time>
                                                <?php echo $post->post_date;?></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                                        <a href="<?php echo base_url();?>Home/<?php echo $title;?>">
                                            <?php if($comment_count):?>
                                            (<?=$comment_count;?>)
                                            <?php else:?>
                                            (0)
                                            <?php endif;?>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>

                                    <?php echo $post->body;?>

                                </p>

                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Business</a></li>
                                </ul>


                                <div class="social-links">
                                    <a href="#" class="bi bi-facebook">Share on facebook</a>
                                </div>

                            </div>

                        </article><!-- End blog entry -->

                        <?php else:?>
                        <h2>no details <a href="<?php echo base_url();?>">back</a></h2>
                        <?php endif;?>



                        <div class="blog-author d-flex align-items-center">
                            <img src="<?php echo base_url()?>images/users/profile/<?php echo $post->profile_image;?>"
                                class="rounded-circle float-left" alt="" width="50%">
                            <div>
                                <h4><?php echo $post->name;?></h4>
                                <div class="social-links">
                                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                </div>
                                <p>
                                    <?php echo word_limiter( $post->bio ,20);?>
                                    <a href="
                    <?php echo base_url();?>Kenyan/viewuserprofile/<?php echo $post->user_id;?>
                 ">
                                        read more
                                    </a>
                                </p>
                            </div>
                        </div><!-- End blog author bio -->





                        <div class="blog-comments">

                            <h4 class="comments-count">comments
                                <?php if($comment_count):?>
                                (<?=$comment_count;?>)
                                <?php else:?>
                                (0)
                                <?php endif;?>
                            </h4>
                            <?php if($comments):?>
                            <?php foreach($comments as $comment):?>
                            <div id="comment-3" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img"><img
                                            src="<?php echo base_url();?>assets/img/samgroup.png" alt="pic"></div>
                                    <div>
                                        <h5><a href=""><?php echo $comment['name'];?></a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01"><?php echo $comment['comment_date'];?></time>
                                        <p>
                                            <?php echo $comment['comment'];?>
                                        </p>
                                    </div>
                                </div>

                            </div><!-- End comment #3 -->
                            <?php endforeach;?>
                            <?php else:?>
                            <p class="green">0 comments be the first to comment...</p>
                            <?php endif;?>



                            <div class="reply-form">
                                <h4>Leave a Comment</h4>
                                <p>Your email address will not be published. Required fields are marked * </p>
                                <?php echo form_open('Comments/create_comment/'.$post->main_id);?>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="slug" type="hidden" class="form-control"
                                            value="<?php echo $post->slug;?>" placeholder="leave empty">
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="hidden" name="comment_date">
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control"
                                            placeholder="Your Comment*"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>

                                </form>

                            </div>

                        </div><!-- End blog comments -->

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
                                    <li><a
                                            href="<?php echo base_url();?>Category/<?php echo $category->id;?>"><?php echo $category->category_name?><span></span></a>
                                    </li>
                                    <?php endforeach;?>
                                    <?php else:?>
                                    <li><a href="#">General <span></span></a></li>
                                    <?php endif;?>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>


                            <?php if($sideposts):?>

                            <div class="sidebar-item recent-posts">
                                <?php foreach($sideposts as $sidepost):?>
                                <div class="post-item clearfix">
                                    <img src="<?php echo base_url();?>images/users/posts/<?php echo $sidepost->image;?>"
                                        alt="">
                                    <h4><a
                                            href="<?php //echo base_url();?><?php echo $sidepost->slug;?>"><?php echo $sidepost->title;?></a>
                                    </h4>
                                    <time datetime="2020-01-01"><?php echo $sidepost->post_date;?></time>
                                </div>
                                <?php endforeach;?>
                                <?php else:?>
                                <div class="sidebar-item recent-posts">
                                    <div class="post-item clearfix">
                                        <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                        <h4><a href="blog-single.html">soon</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
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
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->



<?php include(APPPATH.'views/Footer.php');?>