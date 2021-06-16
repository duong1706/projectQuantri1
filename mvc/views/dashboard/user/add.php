<div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New User</h3>
                            
                        </div>
                        <div class="card-body">
<div class="w3-container">
    <div class="w3-card-4">
      <form class="w3-container" method="post" action="add">
        <p>
        <label>Name</label>
        <input class="w3-input vali" type="text" name="name">
        
    </p>
    <p>
        <label>UserName</label>
        <input type="text" name="username" class="w3-input vali">
        
    </p>   <p>
        <label>Password</label>
        <input class="w3-input vali" type="password" name="matkhau">
        
    </p>  
    <p>
        <label>Gmail</label>
        <input class="w3-input vali" type="text" name="gmail" id="gmail">
        
    </p>
    <p style="margin-top: .5em;">
      <input type="checkbox" id="admin" name="admin" value="admin">
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
        <button><input  class="trong" id="smtrong" type="submit" value="Insert" name="addUser"></button>
    </div>
   
      </form>
    
    </div>
  </div>

</div>

<script src="<?php echo URL . 'public/style/js/validate.js'; ?>" type="text/javascript" charset="utf-8"></script>
  