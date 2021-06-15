<div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New Bill</h3>
                            
                        </div>
                        <div class="card-body">
<div class="w3-container">
    <div class="w3-card-4">
      <form class="w3-container" method="post">
        <p>
        <label>User</label>
        <input class="w3-input" type="text" name="user">
        
    </p>
    <p>
        <label>Ngay</label>
        <input type="date" name="date" class="w3-input">
        
    </p>   <p>
        <label>Tong gia tri</label>
        <input class="w3-input" type="text" name="totalprice">
        
    </p>  
    
    
    <div class="card-header">
        <span>  <?php 
      if(isset($data['dialog']))
      {
          echo $data['dialog'];
      }
      ?></span>
        <button><input class="trong" type="submit" value="Insert" name="addBill"></button>
    </div>
   
      </form>
    
    </div>
  </div>

</div>