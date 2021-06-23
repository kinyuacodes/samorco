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
                <h3 class="panel-title"><?php echo $title;?></h3>
              </div>
              <div class="panel-body">
                <div class="row">
                    <?php $message = $this->session->flashdata('message');?>
                    <?php if($message):?>
                        <div class=" alert alert-success"><?= $message;?></div>
                    <?php endif;?>
               <?php $this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');?>
                    <?php echo validation_errors();?>
                    <?php echo form_open('Admin/add_category');?>
                      <div class="col-md-12">
                          <input class="form-control" type="text" name="category" placeholder="Add Category" width="50%">
                      </div> </br> <hr>
                       <input type="submit" class="btn  btn-primary pl-10" value="Add Category">
               </form>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Category-Id</th>
                        <th>Category_Name</th>
                        <th>Date_created</th>
                        <th>Action</th>
                      </tr>
                      <?php if($categories):?> 
                        <?php foreach($categories as $Category):?>
                      <tr>
                        <td><?php echo $Category->id;?></td>
                        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><?php echo $Category->category_name;?></td>
                        <td><?php echo $Category->create_date;?></td>
                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="<?php echo base_url();?>Admin/category/<?php echo $Category->id;?>">Delete</a></td>
                      </tr>
                      <?php endforeach;?>
                      <?php else:?>

                        <tr>
                        <td>Null</td>
                        <td>General<span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
                        <td></td>
                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                      </tr>
                      <?php endif;?>
                   
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>


<?php include(APPPATH.'views/layouts/Footer.php');?>