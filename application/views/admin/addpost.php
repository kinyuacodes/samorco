<?php include(APPPATH.'views/site_settings.php');?>
<?php include(APPPATH.'views/layouts/Header.php');?>
<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="Posts.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Posts <span class="badge">12</span></a>
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
          <?php $this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');?>
                    <?php echo validation_errors();?>
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"><?= $title;?></h3>
              </div>
              <div class="panel-body">
              <?php echo form_open_multipart('Admin/createpost',['id'=>'contact-form']);?>
                  <div class="form-group">
                    <label>Post Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Post Title" value="<?php echo set_value('name');?>">
                  </div>
                  <div class="form-group">
                    <label>Post Body</label>
                    <textarea name="editor1" value="<?php echo set_value('editor1');?> "   class="form-control" placeholder="Post Body" >
                     
                    </textarea>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" checked> Published
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Post-Image</label>
                    <input type="file" class="form-control" name="userfile">
                  </div>
                  <div class="form-group">
                    <label>Post Category</label>
                    <select name="category" id="" class="form-control">
                       <?php if($categories):?> 
                          <?php foreach($categories as $category):?>
                                <option value="<?php echo $category->id;?>"><?php echo $category->id;?>-<?php echo $category->category_name;?></option>
                            <?php endforeach;?>
                          <?php else:?>
                      <?php endif;?>
                    </select>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Addpost">
                  <?php echo form_close();?>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

<?php include(APPPATH.'views/layouts/Footer.php');?>