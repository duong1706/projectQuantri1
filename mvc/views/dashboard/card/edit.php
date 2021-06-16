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
        <select id="cars" name="user" style="
    width: 100%;
    margin: .5em 0 .5em 0;
">
          <?php foreach($data['user'] as $value){ ?>
              <option value="<?php echo $value['username']; ?>"
                <?php
                  if($data['bill']['user'] == $value['username']) {
                    echo "selected";
                  }
                ?>
              ><?php echo $value['username']; ?></option>
          <?php  } ?>
        </select>
    </p>
      <p>
        <label>Date</label>
        <input class="w3-input" type="date" name="date" value="<?php echo $data['bill']['date'] ?>">
        
    </p>  
    <p>
        <label>Price</label>
        <input class="w3-input vali" type="text" name="totalprice" value="<?php echo $data['bill']['totalprice'] ?>">
        
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
        <button><input class="trong" type="submit" value="Insert" name="editBill"></button>
    </div>
   
      </form>
    </div>
  </div>

</div>


<script src="<?php echo URL . 'public/style/js/validate.js'; ?>" type="text/javascript" charset="utf-8"></script>
  