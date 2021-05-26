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
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL .'public/style/css/payment.css'; ?>">
    <link rel="stylesheet" href="<?php echo URL .'public/style/css/loader.css'; ?>">
  
  
</head>
  <body>
    <div id="preloader">
      <div class="loader"></div>
    </div>

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
                          <span><?php echo $value['count']; ?></span>
                        </div>
                        <div class="col-md-2 number">
                          <div class="delete">
                            <span></span>
                            <button><i class="far fa-trash-alt"></i></button>
                          </div>
                          
                          
                         
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
          <div class="row">
            <div class="col-md-8">
              <h1>Customer details</h1>
              <div class="row">
                <div class="col-lg-6">
                    <div class="checkout__input">
                        <p>Name<span>*</span></p>
                        <input type="text" value="<?php echo $_SESSION['user']['name']; ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout__input">
                        <p>gmail<span>*</span></p>
                        <input id="emailok" type="text" value="<?php echo  $_SESSION['user']['gmail']; ?>">
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <h1>Payment detail</h1>
              <div class="contain">
                <i class="fab fa-cc-paypal"></i>
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
            </div>
            </div>
          </div>
      </div>
      
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="<?php echo URL . 'public/style/js/loader.js'; ?>" type="text/javascript" charset="utf-8"></script>
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
                    //value: fee
                    value: '0.1'
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
}).then(function(){
  var email = $('#emailok').val();
  Email.send({
      SecureToken : "a2b5068d-0b8f-448f-b57e-62f40033271d",
      To : email,
      From : "hieu.organic123@gmail.com",
      Subject : "Dat hang thanh cong",
      Body : "Dat hang thanh cong"
  })
}).then(function(){
  window.location.replace("http://localhost:8080/projectQuanTri1");
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