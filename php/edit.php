<?php 
 include("config.php");    
 $id= $_POST['editID'];  
 
 $sql = "select * from posts where id='".$id."'"; 
 $result = mysqli_query($conn,$sql); 
   
 $data=mysqli_fetch_array($result); 
   
 ?> 



<div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 mb-3">Edit  Blog</h1>
          <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
          <form class="p-4 p-md-5 border rounded-3 bg-light">
            <small class="text-muted mark" id="msg"></small>
            <br>
            
            <div class="form-floating mb-3">
            <input type="hidden" id="postid" value="<?php echo $data['id'];?>">   
              <input type="title" class="form-control" id="title" placeholder="Title" name="title" value="<?php echo $data['title'];?>">
              <label for="title">Title</label>
            </div>
            <div class="form-floating mb-3">
              <textarea name="description" cols="30" rows="10" class="form-control" id="description" placeholder="Password"><?php echo $data['description'];?></textarea>
              <label for="description">Description</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="button" onclick="update()">Update</button>

          </form>
        </div>
      </div>
    </div>

<script src="js/edit.js"></script>