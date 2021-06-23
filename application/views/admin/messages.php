<?php include(APPPATH.'views/site_settings.php');?>
<?php include(APPPATH.'views/layouts/Header.php');?>
<style>
  .id{
     color:#00ff99;
  }
  .name{
     color:#1313ec;
  }
  .email{
         color:#ec1380;
  }
  .date{
      color:#009933;
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
                <h3 class="panel-title">Users</h3>
              </div>
              <div class="panel-body">
                <div class="row">

                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Users...">
                      </div>
                </div>
                <?php $message = $this->session->flashdata('message');?>
                    <?php if($message):?>
                        <div class=" alert alert-danger"><?= $message;?></div>
                    <?php endif;?>
  <style>
                input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container1 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<h3>Messages</h3>

<div class="container1">
<?php if($messages):?>
                        <?php foreach($messages as $message):?>
  <form action="">
    <label for="fname">Sender Name</label>
    <input type="text" id="fname" name="firstname" placeholder="<?php echo $message->name;?>">

    <label for="lname">Sender Email</label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $message->email;?>">
    <label for="lname">Message Subject</label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $message->subject;?>">

    <label for="country">Message Recieved On</label>
    <input type="text" id="lname" name="lastname" placeholder="<?= $message->recieved_date;?>">

    <label for="subject">Message Subject</label>
    <textarea id="subject" name="subject" placeholder="<?php echo $message->body;?>" style="height:200px"></textarea>
    <a class="btn btn-danger" href="<?php echo base_url();?>Admin/delete_message/<?php echo $message->id;?>">Delete</a>
   
  </form>
  <hr><br>
   <?php endforeach ;?>
   <?php endif;?>
</div>

          
    </section>











<?php include(APPPATH.'views/layouts/Footer.php');?>