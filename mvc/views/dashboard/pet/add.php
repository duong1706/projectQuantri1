<div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New Pet</h3>
                            
                        </div>
                        <div class="card-body">
<div class="w3-container">
    <div class="w3-card-4">
      <form class="w3-container" method="post" enctype="multipart/form-data">
        <p>
        <label>Pet Name</label>
        <input class="w3-input vali" type="text" name="name">
        
    </p>
       <p>
        <label>Content</label>
        <input class="w3-input vali" type="text" name="content">
        
    </p>  
    <p>
        <label>Color</label>
        <input class="w3-input vali" type="text" name="color">
        
    </p>
    <p>
        <label>Price</label>
        <input class="w3-input vali" type="text" name="price">
        
    </p>   <p>
        <label>Star</label>
        <input class="w3-input vali" type="text" name="star">
        
    </p>   
    <p style="margin-top: 1em;">
        <label>Image</label>
        <input type="file" name="img1">
        
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
        <button><input class="trong" type="submit" value="Insert" name="addPet"></button>
    </div>
   
      </form>
    </div>
  </div>

</div>


<script src="<?php echo URL . 'public/style/js/validate.js'; ?>" type="text/javascript" charset="utf-8"></script>
  