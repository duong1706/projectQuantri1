<?php
  //////////print_r($data); die();
  $ok = 0;
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/c52c16b666.js" crossorigin="anonymous"></script> 
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Passero+One&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo URL . 'public/style/css/home.css'; ?>">
  <link rel="stylesheet" href="<?php echo URL . 'public/style/css/footer.css'; ?>">
  <link rel="stylesheet" href="<?php echo URL . 'public/style/css/header.css'; ?>">
  <link rel="stylesheet" href="<?php echo URL . 'public/style/css/loader.css'; ?>">

  <link rel="stylesheet" type="text/css" href="<?php echo URL . 'public/style/css/slick/slick.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL . 'public/style/css/slick/slick-theme.css'; ?>">
  <style>
    .cart_home{
      position: relative;
    }
    .cart_home:hover .cart_list{
      display: inline-block;
    }
    .cart_list{
      display: none;
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%);
    }


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
                box-shadow: 10px 7px 17px 10px #656262a8;
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
    <div id="preloader">
      <div class="loader"></div>
    </div>
  
  
      <div class="home" >
        <div id="header1">
          <?php
            require_once './mvc/views/hf/header.php';
          ?>
        </div>
     
      <div class="blog ok">
        <div class="row">
          <div class="col-md-4 blog_admin">
            <div class="img">
              <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2015/08/blog-img-1.jpg" alt="">
            </div>
            <div class="content">
              <h5>06 Aug, 2021</h5>
              <a href="#">Could It</a>
              <h5>By: Admin</h5>
            </div>
          </div>
          <div class="col-md-4 blog_admin">
            <div class="img">
              <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2015/08/blog-img-2.jpg" alt="">
            </div>
            <div class="content">
              <h5>16 Aug, 2032</h5>
              <a href="#">A Doggie</a>
              <h5>By: Admin</h5>
            </div>
          </div>
          <div class="col-md-4 blog_admin">
            <div class="img">
              <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2015/08/blog-img-3.jpg" alt="">
            </div>
            <div class="content">
              <h5>26 Aug, 2021</h5>
              <a href="#">A Dog</a>
              <h5>By: Admin</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="banner ok">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2016/11/sli1-bg-2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block label">
                <h1>Best</h1>
                <h1>Friend</h1>
              </div>
            </div>
            <div class="carousel-item">
              <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2016/11/sli1-bg.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block label">
                <h1>Best</h1>
                <h1>Friend</h1>
              </div>
            </div>
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="deal ok">
        <div class="label">
          <img src="<?php echo URL . 'public/style/images/Untitled.png'; ?>" alt="">
        </div>
        <div class="img">
          <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2016/11/home1_image3.jpg" alt="">
        </div>
      </div>
      <div class="sale ok">
        <div class="label">
          <img src="<?php echo URL . 'public/style/images/Capture.PNG'; ?>" alt="">
        </div>
        <div class="pet4sale">
          
          <div class="regular slider">
            <?php foreach ($data['pet'] as $key => $value) { ?>
            
            <div>
              
                <div class="action"  ><img class="hoveri" src="<?php echo URL . 'public/style/images/' . $value['image']; ?>" alt="">
                  <div class="addcart">
                  <button id="add"><a href="<?php echo URL . 'pet/addcart/' . $value['idPet']; ?>" class="add2" ><i class="fas fa-shopping-basket"></i></a></button>
                    <button id="wishlist"><i class="far fa-heart" aria-hidden="true"></i></button>
                    <a href="<?php echo URL . "pet/detail/${value['idPet']}"; ?>"><button id="reset"><i class="fas fa-eye" aria-hidden="true"></i></button></a>
                    </div>
                  <div class="productp">
                  <h3 class="style" href="#"><?php echo $value['name']; ?></h3>
                  </div>
                  <div class="price">
                  <p><?php echo $value['price']; ?></p>
                  </div>
                </div>
              
              
               
               
            </div>
            <?php } ?>
            
          </div>
        </div>
      </div>
      <div class="code ok">
        <div class="row">
          <div class="col-md-4">
            <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2016/11/home1_image4.jpg" alt="code">
          </div>
          <div class="col-md-4">
            <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2016/11/home1_image6.jpg" alt="code">
          </div>
          <div class="col-md-4">
            <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2016/11/home1_image5.jpg" alt="code">
          </div>
          
        </div>
      </div>
      <div class="service ok">
        <div class="label">
          <img src="<?php echo URL . 'public/style/images/service.PNG'; ?>" alt="service">
        </div>
        <div class="row">
          <div class="col-md-6 blog_admin">
            <div class="img">
              <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2016/11/home1_contentslider1.png" alt="">
            </div>
            <div class="content">
              <h1>TRAINING</h1>
              <h3>SAVE $15 Puppy Or Beginner Training Course</h3>
              <p>Enroll in a 6-week course to teach your dog basic manners & simple cues.</p>
              <a href="#">Learn more ></a>
            </div>
          </div>
          <div class="col-md-6 blog_admin">
            <div class="img">
              <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2016/11/home1_contentslider2.png" alt="">
            </div>
            <div class="content">
              <h1>Pet Camp</h1>
              <h3>Camp Is In Session!</h3>
              <p>Bring your pup in to let off some steam & meet new friends!</p>
              <a href="#">Learn more ></a>
            </div>
          </div>
        </div>
      </div>

      </div>
      <div>
          <?php
            require_once './mvc/views/hf/footer.php';
          ?>
      </div>
     
     

    
    <!-- Optional JavaScript -->
    <script src="<?php echo URL . 'public/style/js/cart.js'; ?>" type="text/javascript" charset="utf-8"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 2,
        responsive: [
        {
          breakpoint: 990,
          settings: {
            slidesToShow: 2
          }
        },
        
        ]
      });

      

      
    });

</script>


<script src="<?php echo URL . 'public/style/js/loader.js'; ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo URL . 'public/style/js/header.js'; ?>" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>  
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  
  </body>
</html>