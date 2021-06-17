<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/c52c16b666.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="<?php echo URL . 'public/style/css/footer.css'; ?>">

    <link rel="stylesheet" href="<?php echo URL . 'public/style/css/header.css'; ?>">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?php echo URL . 'public/style/css/footer.css'; ?>">
    <style>
                    
            .cart__payment .header__content
            {
                display: flex;
                justify-content: space-between;
                padding: 20px;
                position: relative;
                align-items: center;
            }
            .cart__payment .cart__header
            {
                border-bottom: 1px solid black;
            }
            .cart__payment .cart__body
            {
                /* overflow-y: scroll; */
                flex-grow:1;
                overflow-x: hidden;
            }

            .cart__payment .cart__footer
            {
                padding: 20px;
                cursor: pointer;
            } 
            .cart__icon{
                display: none;
            }

            .cart__payment
            {
                /* background-color: white;
                width: 400px;
                height: 100vh;
                right: -100%;
                display: flex;
                z-index: 2;
                position: absolute; */
                flex-direction: column;
                top: 0;
                /* position: fixed; */
                
                transition: 0.4s;
            }
            .checkout 
            {
                display: flex;
                justify-content: space-between;
            
                min-height: 50px;
                align-items: center;
                background-color: #f1f1f1!important;
                color: rgb(0, 158, 127);
                border-radius: 50px;
            }
            .checkout:hover {
                    color: rgb(0, 158, 127) !important;
                    text-decoration: none !important;
            }
            .checkout span
            {
                padding:20px;
            }
            .checkout__total
            {
                padding: 15px !important;
                margin: 5px;
                border-radius: 35px;
                background-color: white;
            }

            .cart__content
            {
                padding: 30px;
                display: flex;
                justify-content: space-around;
                align-items: center;
                border-bottom: 1px solid #b3adad7d;
            }
            .cart__content .decre_incre
            {
            
                font-size: 20px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                color: #0d1136;
                padding: 0 !important;
                max-width: 30px;
                border-radius: 30px;
            }
            .cart__content .img__detail .row{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .cart__content .img__detail img
            {
            width: 100%;
            }
            .cart__content .img__detail h6 {
                font-size: 14px;
            white-space: nowrap;
            }
            .cart__content .img__detail .col-6
            {
                padding: 0 5px 0 5px !important;
            }
            .cart__content .pet__price {
                font-size: 14px;
                text-align: right;
            }
            .cart__burger   
            {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 40px;
                height: 40px;
                cursor: pointer;
                transition: all 0.5s ease-in-out;
            }
            .petincart{
                /* height: 10em; */
            }
            .all_cart{
                width: 80%;
                margin: 0 auto;
            }
    </style>
  </head>
  <body>
  <span style="display: none;" id="check_login">
      <?php
        if(isset($_SESSION['user'])){
          echo $_SESSION['user']['username'];
        }
      ?>
    </span>

    <div id="header1"  style="width: 80%; margin: 0 auto; ">
          <?php
            require_once './mvc/views/hf/header.php';
          ?>
        </div>
  <div class="all_cart">
   
    <?php
        require_once 'cart.php';
    ?>
  </div>

  <div>
    <?php
    require_once './mvc/views/hf/footer.php';
    ?>
  </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo URL . 'public/style/js/cart.js'; ?>" type="text/javascript" charset="utf-8"></script>        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </body>
</html>