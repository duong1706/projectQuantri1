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
  <link rel="stylesheet" href="<?php echo URL . 'public/style/css/footer.css'; ?>">
  <link rel="stylesheet" href="<?php echo URL . 'public/style/css/loader.css'; ?>">
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
<div id="preloader">
      <div class="loader"></div>
    </div>
    <div class="detail__pet">
  <div id="product">
    
    <div class="ok">
      <div class="name">
          <ul>
              <li><a href="<?php echo URL; ?>">Home</a></li>
              <li><i class="fas fa-angle-double-right"></i></li>
              <li><p><?php echo $data['pet']['name']; ?></p></li>
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
            <h1 class="petname"><?php echo 'Pet name: ' . $data['pet']['name']; ?></h1>
            <div class="review">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <a class="reviewNum" href="#">(1 customer review)</a>
            </div>
            <h2 class="price"><?php echo 'Price: $' . $data['pet']['price']; ?></h2>
            <hr>
            <div class="addcart">
               <button id="add"><a href="<?php echo URL . 'pet/addcart/' . $data['pet']['idPet']; ?>" class="add1" ><i class="fas fa-shopping-basket"></i></a></button>
                <button id="wishlist"><i class="far fa-heart"></i></button>
                <button id="reset"><i class="fas fa-sync"></i></button>
                </div>
            <p class="des1"><b>Description: </b><?php echo $data['pet']['content'] . " One Piece (ワンピース Wan Pīsu?), từng được xuất bản tại Việt Nam dưới tên gọi Đảo Hải Tặc là bộ manga dành cho lứa tuổi thiếu niên của tác giả Oda Eiichiro, được đăng định kì trên tạp chí Weekly Shōnen Jump, ra mắt lần đầu trên ấn bản số 34 vào ngày 19 tháng 7 năm 1997. Bản tankōbon của truyện do Shueisha phát hành với tập đầu tiên vào ngày 24 tháng 12 năm 1997. One Piece kể về cuộc hành trình của Monkey D. Luffy - thuyền trưởng của băng hải tặc Mũ Rơm và các đồng đội của cậu. Luffy tìm kiếm vùng biển bí ẩn nơi cất giữ kho báu lớn nhất thế giới One Piece, với mục tiêu trở thành Tân Vua Hải Tặc.

One Piece cũng được chuyển thể sang một vài loại hình truyền thông khác nhau. Một OVA được hãng Production I.G sản xuất vào năm 1998. Tiếp đó, phiên bản anime dài tập do hãng Toei Animation thực hiện, bắt đầu lên sóng truyền hình Nhật Bản vào năm 1999. Toei cũng sản xuất 11 phim hoạt hình, một OVA và 5 chương trình truyền hình đặc biệt liên quan. Một vài công ty đã phát triển nhiều sản phẩm khác dựa vào truyện như thẻ game, video game. Bộ manga phiên bản tiếng Anh được cấp phép cho hãng Viz Media phát hành ở thị trường Bắc Mỹ, hãng Gollancz Manga ở Anh Quốc, Madman Entertainment ở Australia và New Zealand. Ở Bắc Mỹ, bộ anime được cấp phép bản địa hóa và phân phối bằng tiếng Anh bởi hãng Funimation Entertainment."; ?></p>
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
        <div class="comment">
          <div class="user">
            <h1>Huy</h1>
          </div>
          <div class="content_cmt">
            <p>Sanr phẩm này thật tuyệt vời</p>
          </div>
        </div>
        <div class="comment">
          <div class="user">
            <h1>Huy</h1>
          </div>
          <div class="content_cmt">
            <p>Sanr phẩm này thật tuyệt vời</p>
          </div>
        </div>
        <div class="comment">
          <div class="user">
            <h1>Huy</h1>
          </div>
          <div class="content_cmt">
            <p>Sanr phẩm này thật tuyệt vời</p>
          </div>
        </div>
        <h4>Your review</h4>
        <div class="yourcmt">
          <input type="text" placeholder="type somethings">
          <button><i class="fas fa-paper-plane"></i></button>
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
      <a href=""><img src="<?php echo URL . 'public/style/images/cho2.jpg'; ?>" alt=""></a>
      </div>
      <div>
      <a href=""><img src="<?php echo URL . 'public/style/images/cho3.jpg'; ?>" alt=""></a>
      </div>
      <div>
      <a href=""><img src="<?php echo URL . 'public/style/images/x30.jpg'; ?>" alt=""></a>
      </div>
      <div>
      <a href=""><img src="<?php echo URL . 'public/style/images/chuot.jpg'; ?>" alt=""></a>
      </div>
      <div>
      <a href=""><img src="<?php echo URL . 'public/style/images/meo1.jpg'; ?>" alt=""></a>
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
        <a href=""><img src="<?php echo URL . 'public/style/images/meo2.jpg'; ?>" alt=""></a>
        </div>
        <div>
        <a href=""><img src="<?php echo URL . 'public/style/images/meo3.jpg'; ?>" alt=""></a>
        </div>
        <div>
        <a href=""><img src="<?php echo URL . 'public/style/images/meo4.jpg'; ?>" alt=""></a>
        </div>
        <a href=""><img src="<?php echo URL . 'public/style/images/x5.jpg'; ?>" alt=""></a>
        <div>
        <a href=""><img src="<?php echo URL . 'public/style/images/x7.jpg'; ?>" alt=""></a>
        </div>
        <div>
        <a href=""><img src="<?php echo URL . 'public/style/images/x9.jpg'; ?>" alt=""></a>
        </div>
    </div>

   
  </div>
  </div>

  <div id="show_cart">
  <?php 
        require_once "./mvc/views/payment/cart.php"
    ?>
  </div>
  <div>
          <?php
            require_once './mvc/views/hf/footer.php';
          ?>
      </div>

  <script src="<?php echo URL . 'public/style/js/loader.js'; ?>" type="text/javascript" charset="utf-8"></script>
  <script src="<?php echo URL . 'public/style/js/cart.js'; ?>" type="text/javascript" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-2.2.0.js" type="text/javascript"></script>
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



    
</body>
</html>
