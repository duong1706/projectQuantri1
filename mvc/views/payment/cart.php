<div class="cart__payment" id="payment_cart">
            <div class="cart__header">
                <div class="header__content">
                    <span>(0)item</span>
                    <div class="cart__burger">
                    <div class="burger"></div>

                    </div>
                </div>

            </div>
            <div class="cart__body">
            <div class="row cart__content">
                <div class="col-2 decre_incre">
                 
                  <div>1</div>
                
                </div>
                <div class="col-6 img__detail">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt="">
                        </div>
                        <div class="col-6">
                          <h6>The Dog Yellow</h6>
                          <h6>Yellow Branch</h6>
                        </div>


                    </div>
                </div>
                <div class="col-3 pet__price">$70</div>
                <div class="col-1">x</div>
    
           
           
            </div>
            
            <?php 
            
                if($data['cart']){
                 //   $output = ``;
                    foreach($data['cart'] as $key => $value)
                    { ?>
                        <!-- $output .= ' -->
                        <div class="row cart__content" id="<?php echo 'pet' . $value['idPet']; ?>">
                    <div class="col-2 decre_incre">
                    
                    
                    
                    </div>
                    <div class="col-6 img__detail">
                        <div class="row">
                            <div class="col-6">
                            <img src="<?php echo URL . 'public/style/images/' . $value['image']; ?>" alt="">
                            </div>
                            <div class="col-6">
                            <h6><?php echo $value["name"]; ?></h6>
                            <h6><?php echo $value["color"]; ?></h6>
                            </div>

                        </div>
                    </div>
                    <div class="col-3 pet__price"><?php echo $value["name"]; ?></div>
                    <div class="col-1">
                    <a href="<?php echo URL . 'pet/deletecart/' . $value['idPet']; ?>" class="removeCart" data-id="<?php echo $value['idPet']; ?>"><button>x</button></a>
                    </form>
                    </div>
        
                </div>
                <?php     
                    }
                
            } 
            ?>
    
            </div>
            <div class="cart__footer">
          
                <div ><a  class="checkout" href="<?php echo URL . 'pet/payment/'; ?>"><span>CheckOut</span><span class="checkout__total">$2322</span></a></div>
            </div>
           
        </div>


        <div class="cart__icon" id="icon__cart"><?php echo '(' . count($data['cart']) . ')Icon' ;?></div>
        
        
       
        <!-- id="paypal-button"  -->
        <!-- AT9PHTR_hrxkia4SkLyokNAVg-7GDYJ0wRWEwirsG1OGRKv336LQm8zmGGU40If29BBAwIu8x_t-drUC  -->