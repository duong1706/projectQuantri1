<div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Update</h3>
                            
                        </div>
                        <div class="card-body">
<div class="w3-container">
    <div class="w3-card-4">
      <form class="w3-container" method="post">
        <p>
        <label>User</label>
        <input class="w3-input" type="text" name="user" value="<?php echo $data['bill']['user'] ?>">
        
    </p>
      <p>
        <label>Ngay</label>
        <input class="w3-input" type="date" name="date" value="<?php echo $data['bill']['date'] ?>">
        
    </p>  
    <p>
        <label>Color</label>
        <input class="w3-input" type="text" name="totalprice" value="<?php echo $data['bill']['totalprice'] ?>">
        
    </p>
    <div class="card-header">
        <span></span>
        <button><input class="trong" type="submit" value="Insert" name="editBill"></button>
    </div>
   
      </form>
    </div>
  </div>

</div>