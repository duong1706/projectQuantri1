<!DOCTYPE html>
<html>
<head>
  <title>Slick Playground</title>
  <meta charset="UTF-8">

  <script src="https://kit.fontawesome.com/c52c16b666.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Passero+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo URL .'public/style/css/detail.css'; ?>">
  <link rel="stylesheet" href="<?php echo URL . 'public/style/css/cart.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL .'public/style/css/slick/slick.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL .'public/style/css/slick/slick-theme.css'; ?>">
  <style type="text/css">
    .slider {
        width: 100%;
        margin: 0 auto;
    }

    .slick-slide {
      margin: 5px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }
    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: 1;
    }
    
    
  </style>
 
</head>
<body>
    <div class="detail__pet">
  <div id="product">
    <div class="ok">
      <div class="name">
          <ul>
              <li><a href="<?php echo URL; ?>">Home</a></li>
              <li><i class="fas fa-angle-double-right"></i></li>
              <li><a href="#">Dental Care</a></li>
              <li><i class="fas fa-angle-double-right"></i></li>
              <li><p>Product Test Ewok Pet</p></li>
          </ul>
      </div>
      <div class="row">
          <div class="col-lg-5 col-xl-7">
              <div class="pet">
                <div class="row">
                  <div class="col-3">
                    <div id="carouselControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                            <a href="#"><img class="d-block w-100" src="<?php echo URL . 'public/style/images/meo1.jpg'; ?>" alt=""></a>
                            <a href="#"><img class="d-block w-100" src="<?php echo URL . 'public/style/images/meo2.jpg'; ?>" alt=""></a>
                            <a href="#"><img class="d-block w-100" src="<?php echo URL . 'public/style/images/meo3.jpg'; ?>" alt=""></a>
                            
                          </div>
                          <div class="carousel-item">
                            <a href="#"><img class="d-block w-100" src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
                            <a href="#"><img class="d-block w-100" src="<?php echo URL . 'public/style/images/cho2.jpg'; ?>" alt=""></a>
                            <a href="#"><img class="d-block w-100" src="<?php echo URL . 'public/style/images/cho3.jpg'; ?>" alt=""></a>
                          </div>
                          <div class="carousel-item">
                          <a href="#"><img class="d-block w-100" src="<?php echo URL . 'public/style/images/meo1.jpg'; ?>" alt=""></a>
                            <a href="#"><img class="d-block w-100" src="<?php echo URL . 'public/style/images/meo2.jpg'; ?>" alt=""></a>
                            <a href="#"><img class="d-block w-100" src="<?php echo URL . 'public/style/images/meo4.jpg'; ?>" alt=""></a>
                          </div>
                      </div>
                      <a class="carousel-control-prev prev" href="#carouselControls" role="button" data-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next next" href="#carouselControls" role="button" data-slide="next">
                        <i class="fas fa-chevron-right"></i>
                        <span class="sr-only">Next</span>
                      </a>
                      </a>
                  </div>
                </div>
                <div class="col-9 woocommerce-product-gallery__wrapper zoom">
                  <img src="<?php echo URL . 'public/style/images/' . $data['pet']['image']; ?>" alt="" >
                </div>
              </div>
            </div>
          </div>

        <div class="col-lg-7  col-xl-5 petprice">
          <div class="contain">
            <h1 class="petname"><?php echo $data['pet']['name']; ?></h1>
            <div class="review">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <a class="reviewNum" href="#">(1 customer review)</a>
            </div>
            <h2 class="price"><?php echo '$' . $data['pet']['price']; ?></h2>
            <hr>
            <div class="addcart">
               <button id="add" ><a href="<?php echo URL . 'pet/addcart/' . $data['pet']['idPet']; ?>"><i class="fas fa-shopping-basket"></i></a></button>
                <button id="wishlist"><i class="far fa-heart"></i></button>
                <button id="reset"><i class="fas fa-sync"></i></button>
                </div>
            <p class="des1"><?php echo $data['pet']['content']; ?></p>
          </div>
            
        </div>
      </div>
    </div>
  </div>
  <div id="desvsre">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item active">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Review</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.

              On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.
              
              In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="row">
          <div class="col-md-5 rate">
            <h1>CUSTOMERS REVIEW</h1>
        </div>
        <div class="col-md-7 comment">
            <h1>RATE IT!</h1>
        </div>
        </div>
        <div class="rate">
          <h4>1 REVIEW FOR PRODUCT TEST EWOK PET</h4>
          <div class="row">
            <div class="col-md-2">
              <img src="../public/style/images/avt.jpg" alt="">
              <h5>Admin</h5>
            </div>
            <div class="col-md-10">
              <p id="date">May 13, 2016</p>
              <div class="review">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p>Good and nice</p>
            </div>
          </div>
        </div>
        <div class="cmt">
          <h5>Add a review</h5>
          <p>Your email address will not be published. Required fields are marked *</p>
          <p>Your Rating</p>
          <div class="review">
            <a href=""><i class="fas fa-star"></i></a>
            <a href=""><i class="fas fa-star"></i></a>
            <a href=""><i class="fas fa-star"></i></a>
            <a href=""><i class="fas fa-star"></i></a>
            <a href=""><i class="fas fa-star"></i></a>
          </div>
          <form action="">
            <label for="">Your Review</label><br>
            <input type="text"><br>
            <label for="">Name *</label><br>
            <input type="text"><br>
            <label for="">Email *</label><br>
            <input type="email"><br>
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="suggest" class="more">
    <div class="title">
      <i class="fas fa-paw"></i>
      <h1>You may also like…</h1>
    </div>
    <div class="regular slider">
      <div>
        <a href=""><img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
      </div>
      <div>
      <a href=""><img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
      </div>
      <div>
      <a href=""><img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
      </div>
      <div>
      <a href=""><img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
      </div>
      <div>
      <a href=""><img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
      </div>
      <div>
      <a href=""><img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
      </div>
    </div>
  </div>
  <div id="related" class="more">
    <div class="title">
      <i class="fas fa-paw"></i>
      <p>Related Products</p>
    </div>
    <div class="regular slider">
        <div>
        <a href=""><img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
        </div>
        <div>
        <a href=""><img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
        </div>
        <div>
        <a href=""><img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
        </div>
        <a href=""><img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
        <div>
        <a href=""><img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
        </div>
        <div>
        <a href=""><img src="<?php echo URL . 'public/style/images/cho1.jpg'; ?>" alt=""></a>
        </div>
    </div>

    <div id="footer">
      <div class="row" id="foot1">
        <div class="col-md-6 social">
          <div class="contain">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
          </div>
          <span></span>
        </div>
        <div class="col-md-6 payment">
          <span></span>
          <div class="contain">
            <i class="fab fa-cc-paypal"></i>
            <i class="fab fa-cc-visa"></i>
            <i class="fab fa-cc-mastercard"></i>
          </div>
        </div>
      </div>
      <div class="row foot2">
        <div class="col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
          
          <ul>
            <li><h5>About us</h5></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Company Information</a></li>
            <li><a href="#">News Room</a></li>
            <li><a href="#">Compliance & Ethics</a></li>
            <li><a href="#">Site Map</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
          
          <ul>
            <li><h5>Education</h5></li>
            <li><a href="#">Food Center</a></li>
            <li><a href="#">Care Guides</a></li>
            <li><a href="#">Puppy Center</a></li>
            <li><a href="#">Fish Center</a></li>
            <li><a href="#">Small Pet Center</a></li>
            <li><a href="#">Bird Center</a></li>
            <li><a href="#">Reptile Center</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
          
          <ul>
            <li><h5>Popular</h5></li>
            <li><a href="#">Dog & Cat</a></li>
            <li><a href="#">Reptile</a></li>
            <li><a href="#">Fish & Bird</a></li>
            <li><a href="#">Sale Off</a></li>
            <li><a href="#">Small Pet</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
          
          <ul>
            <li><h5>Services</h5></li>
            <li><a href="#">Pet Camp</a></li>
            <li><a href="#">Pet Hotel Boarding</a></li>
            <li><a href="#">Pet Grooming</a></li>
            <li><a href="#">Dog Training</a></li>
            <li><a href="#">Banfield Vet Services</a></li>
            <li><a href="#">Pet Expressions</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
          <h5>Subscribe</h5>
          <p>Subscribe to Our Weekly Newsletter</p>
          <form action="">
            <input type="email" placeholder="email@domain.com" id="email">
          </form>
          <a href="#" id="submit">Submit</a>
        </div>
        <div class="col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>
    
        <div class="info">
          <hr>
          <a href="#">© 2017 Best Friend.</a>
          <span>All rights reserved</span>
        </div>
      </div>
      
    </div>
  </div>
  </div>

  <?php 
        require_once "./mvc/views/payment/cart.php"
    ?>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="../public/style/css/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4
      });
      
    });
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>  
<script >
  const menuIcon = document.querySelector('.cart__icon');
  const cart_payment = document.querySelector('.cart__payment');

menuIcon.addEventListener('click',function(){
        cart_payment.classList.add("cart__showed");
        cart_payment.classList.remove("cart__hidden");
        menuIcon.style.display="none";
       
})
const cart__burger = document.querySelector('.cart__burger');

cart__burger.addEventListener('click',function(){
  cart_payment.classList.add("cart__hidden");
  cart_payment.classList.remove("cart__showed");

        menuIcon.style.display="block";
})
</script>

<script>
    $('a#add').click(function(event){
        event.preventDefault();
        var href = $(this).attr('href');
        $.ajax({
            url: href,
            type: 'GET',
            data: {},
            success: function(res){
                swal("Them thanh cong", "ez", "success");
                $("#num__cart").load("http://localhost:8080/PHP/DOAN #num_cart");

            }
        });
    });
</script>

    
    
</body>
</html>
