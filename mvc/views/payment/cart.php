<?php
    if (!isset($data['cart'])){
        $data['cart'] = [];
    }
?>
<div class="cart__payment" id="payment_cart">
            <div class="cart__header">
            <h1>Cart</h1>
                <div class="header__content">
                    <span>(<?php echo count($data['cart']); ?>)item</span>
                    <div class="cart__burger">
                    <div class="burger"></div>

                    </div>
                </div>

            </div>
            <div class="cart__body">
            <?php 
                
                if($data['cart']){
                 //   $output = ``;
                    foreach($data['cart'] as $key => $value)
                    { ?>
                        <!-- $output .= ' -->
                        <div id="<?php echo 'pet' . $value['idPet']; ?>" class="petincart">
                        
                            <div class="row cart__content" >
                                <div class="col-3 decre_incre">
                                    <div>
                                        <input lct="<?php echo $data['lct']; ?>" type="number" name="number" data-id="<?php echo $value['idPet']; ?>" class="change" value="<?php echo $value['count']; ?>" style="width: 130%;font-size: 15px;">
                                    </div>
                                </div>
                                <div class="col-6 img__detail">
                                    <div class="row">
                                        <div class="col-6">
                                        <img src="<?php echo URL . 'public/style/images/' . $value['image']; ?>" alt="">
                                        </div>
                                        <div class="col-6">
                                        <h6><?php echo $value["name"]; ?></h6>
                                        <h6><?php echo $value["color"]; ?></h6>
                                        <h6><?php echo '$' . number_format($value["price"]);  ?></h6>
                                        </div>

                                    </div>
                                </div>
                                <div id="<?php echo 'cart__content' . $value['idPet']; ?>">
                                    <div class="col-2 pet__price" id="<?php echo 'totalPet' . $value['idPet']; ?>" lct="<?php echo $data['lct']; ?>">
                                        <?php echo '$' . number_format($value["price"] * $value['count']); ?>
                                    </div>
                                </div>
                                
                                <div class="col-1">
                                <a href="<?php echo URL . 'pet/deletecart/' . $value['idPet']; ?>" class="removeCart" data-id="<?php echo $value['idPet']; ?>"><button>x</button></a>
                                </form>
                                </div>
                    
                            </div>
                        </div>
            <?php     
                    }
                } 
            ?>
    
            </div>
            <div class="cart__footer">
          
                <div ><a  class="checkout" href="<?php echo URL . 'pet/payment/'; ?>"><span>CheckOut</span>
                    <div id="total__cart">
                        <span class="checkout__total" id="total_cart">
                            <?php
                                $tong = 0;
                                foreach ($data['cart'] as $value){
                                    $tong += ($value['price'] * $value['count']);
                                }
                                echo '$' . number_format($tong);
                            ?>
                        </span>
                    </div>
                    
                </a></div>
            </div>
           
        </div>


        <div class="cart__icon" id="icon__cart"><?php echo '(' . count($data['cart']) . ')Icon' ;?></div>
        
        
       
        <!-- id="paypal-button"  -->
        <!-- AT9PHTR_hrxkia4SkLyokNAVg-7GDYJ0wRWEwirsG1OGRKv336LQm8zmGGU40If29BBAwIu8x_t-drUC  -->