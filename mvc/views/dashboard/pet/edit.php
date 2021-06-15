<div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Update</h3>
                            
                        </div>
                        <div class="card-body">
<div class="w3-container">
    <div class="w3-card-4">
      <form class="w3-container" method="post" enctype="multipart/form-data">
        <p>
        <label>Ten Pet</label>
        <input class="w3-input" type="text" name="name" value="<?php echo $data['pet']['name'] ?>">
        
    </p>
      <p>
        <label>Content</label>
        <input class="w3-input" type="text" name="content" value="<?php echo $data['pet']['content'] ?>">
        
    </p>  
    <p>
        <label>Color</label>
        <input class="w3-input" type="text" name="color" value="<?php echo $data['pet']['color'] ?>">
        
    </p>
    <p>
        <label>Price</label>
        <input class="w3-input" type="text" name="price" value="<?php echo $data['pet']['price'] ?>">
        
    </p>   <p>
        <label>Star</label>
        <input class="w3-input" type="text" name="star" value="<?php echo $data['pet']['star'] ?>">
        
    </p>   
    <p style="margin-top: 1em;">
        <label>Hinh Anh</label>
        <input type="file" name="img1">
        
    </p>
    <div class="card-header">
        <span></span>
        <button><input class="trong" type="submit" value="Insert" name="editPet"></button>
    </div>
   
      </form>
    </div>
  </div>

</div>