<?php include(APPPATH.'views/site_settings.php');?>
<?php include(APPPATH.'views/layouts/Header.php');?>
<style>

.wrap{
  width:100%;

  
}

</style>
<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">12</span></a>
              <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge">33</span></a>
              <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">203</span></a>
            </div>

            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Posts</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Posts...">
                      </div>
                </div>
                <br>
                <?php $message = $this->session->flashdata('message');?>
                    <?php if($message):?>
                        <div class=" alert alert-danger"><?= $message;?></div>
                    <?php endif;?>
                <?php $success = $this->session->flashdata('success');?>
                    <?php if($success):?>
                        <div class=" alert alert-success"><?= $success;?></div>
                    <?php endif;?>
                <table class="table table-striped table-hover">
                  <?php if($posts):?>
                  <?php foreach($posts as $post):?>
                        <div class="card" style="width:400px">
                           <img class="card-img-top" src="<?= base_url();?>images/users/posts/<?php echo $post->image;?>" alt="Card image">
                           <div class="card-body">
                             <h4 class="card-title"><?php echo $post->category_name;?></h4>
                             <p class="card-text"><?php echo $post->title;?>.</p>
                             <a href="<?php echo base_url();?>Admin/delete_post/<?= $post->main_id;?>" class="btn btn-danger">delete</a>
                             <a href="<?php echo base_url();?>Admin/edit_post/<?= $post->main_id;?>" class="btn btn-success">edit</a>
                           </div>
                         </div>
                  <?php endforeach;?>
                  <?php endif;?>
                  <ul class="pagination">
                       <li class="page-item"> <?php  echo $this->pagination->create_links();?></li>
                  </ul> 
                      
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>




<?php include(APPPATH.'views/layouts/Footer.php');?>