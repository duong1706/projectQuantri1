<?php
  $tong = 0;
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c52c16b666.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL .'public/style/css/payment.css'; ?>">
  
</head>
  <body>
   
    <!-- php echo "#12321";
    print_r($data['SESSION']); -->

    <div class="cart">
     
      <div class="payment">
          <div class="row contain__pay">
            <div class="col-md-9">
              <div class="contain">
                <div class="title">
                  <h1>Shopping Cart</h1>
                </div>
                <?php 
                  foreach ($data['cart'] as $value) { ?>
                     <div class="product">
                      <div class="row">
                        <div class="col-md-2 productImg">
                          <img src="<?php echo URL . 'public/style/images/' . $value['image']; ?>" alt="">
                        </div>
                        <div class="col-md-8">
                          <h4><?php echo $value['name']; ?></h4>
                          <p><?php 
                            echo '$' . number_format($value['price'] * $value['count']); 
                            $tong += ($value['price'] * $value['count']);
                          ?></p>
                        </div>
                        <div class="col-md-2 number">
                          <div class="delete">
                            <span></span>
                            <button><i class="far fa-trash-alt"></i></button>
                          </div>
                          
                          
                          <form action="">
                            <input type="text" value = <?php echo $value['count']; ?>> 
                          </form>
                        </div>
                      </div>
                    </div>
                <?php } ?>
               
               
              </div>
              
            </div>
            <div class="col-md-3 buy">
              <div class="pay">
                <div class="title">
                  <h1>Order Summary</h1>
                </div>
                
                <div class="subtotal price">
                  <p>Subtotal</p>
                  <p><?php echo '$' . number_format($tong); ?></p>
                </div>
                <div class="ship price">
                  <p>Shipping</p>
                  <p><?php
                    echo '$10';
                    $tong += 10;
                  ?></p>
                </div>
                <hr>
                <div class="total price">
                  <p>Total</p>
                  <p id="totalAll" fee=<?php echo $tong; ?>><?php echo '$' . number_format($tong); ?></p>
                </div>
            
              
                <button>Thanh Toán Bằng Các Thẻ </button>
                <span id="paypalbutton" style="text-align:center;width:100%;"></span>
              </div>
              
            </div>
          </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AT9PHTR_hrxkia4SkLyokNAVg-7GDYJ0wRWEwirsG1OGRKv336LQm8zmGGU40If29BBAwIu8x_t-drUC&disable-funding=credit,card"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script >
      var totalAll = document.getElementById("totalAll");
      var fee = totalAll.getAttribute("fee");
      fee = fee / 10000;
      fee = parseInt(fee);
      paypal.Buttons({
        style:{
            color:"blue",
            shape:"pill",
        },
        createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: fee
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            // window.location.replace("http://localhost:63342/tutorial/paypal/success.php")
            Swal.fire({
  icon: 'success',
  title: 'Thành Công',
})
        })
    },
    onCancel: function (data) {
        // window.location.replace("http://localhost:63342/tutorial/paypal/Oncancel.php")
        Swal.fire({
  icon: 'info',
  title: 'Cancel',
})
    },
      }).render('#paypalbutton');
    </script>
</body>

</html>