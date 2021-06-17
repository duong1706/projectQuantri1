<div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Update</h3>
                            
                        </div>
                        <div class="card-body">
<div class="w3-container">
    <div class="w3-card-4">
      <form class="w3-container" method="post" >
        <p>
        <label>Name</label>
        <input class="w3-input" type="text" name="name" value="<?php echo $data['user']['name'] ?>">
        
    </p>
    <p>
        <label>UserName</label>
        <input class="w3-input" type="text" name="username" value="<?php echo $data['user']['username'] ?>" disabled>
        
    </p> 
    <p>
        <label>Mat Khau</label>
        <input class="w3-input" type="password" name="matkhau" value="<?php echo $data['user']['matkhau'] ?>">
        
    </p> 
      <p>
        <label>Gmail</label>
        <input class="w3-input" type="text" name="gmail" value="<?php echo $data['user']['gmail'] ?>">
        
    </p>  
    <p style="margin-top: .5em;">
      <input <?php
        if($data['user']['admin']){
          echo "checked";
        }
      ?> type="checkbox" id="admin" name="admin" value="admin">
      <label for="" >   Admin</label>
    </p>
    <div class="card-header">
    <span id="error" style="
    color: red;
">  <?php 
      if(isset($data['dialog']))
      {
          echo $data['dialog'];
      }
      ?></span>
        <button><input class="trong" type="submit" value="Update" name="editUser"></button>
    </div>
   
      </form>
    </div>
  </div>

</div>


<script src="<?php echo URL . 'public/style/js/validate.js'; ?>" type="text/javascript" charset="utf-8"></script>
  