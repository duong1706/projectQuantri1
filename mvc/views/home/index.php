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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo URL . 'public/style/css/home.css'; ?>">

  <link rel="stylesheet" type="text/css" href="<?php echo URL . 'public/style/css/slick/slick.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL . 'public/style/css/slick/slick-theme.css'; ?>">

  </head>
  <body>
      <div class="home">
        <nav class="navbar navbar-expand-lg ok">
          <nav class="navbar">
              <a class="navbar-brand" href="#">
              <img src="<?php echo URL . 'public/style/images/logo.png'; ?>"  alt="">
              </a>
          </nav>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>
  
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbar_home">
              <div class="search">
                <li class="nav-item dropdown dropdownn">
                  <a class="nav-link dropdown-toggle cssdropdown category_btn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Select a category
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                  </div>
              </li>
              <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0">
                      <input  class="form-control mr-sm-2 formsearch inputt" type="search"  placeholder="What do you need..." aria-label="Search">
                      <div>
                      <i class="fa fa-search iconsearch"></i>
                      </div>
                  </form>
                  
              </li>
              </div>
              <div class="user">
                
              <li class="nav-item">
                <div class="dropdown show ">
                    <a  class="btn btn_user" href="#" role="button" id="dropdownUserLink" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                      <i class="far fa-user"></i>
                    </a>
                
                    <div class="dropdown-menu" aria-labelledby="dropdownUserLink">
                    <a class="dropdown-item" href="<?php echo URL . 'dashboard'; ?>">Admin</a>
                    <a class="dropdown-item" href="#">Log out</a>
                    
                    </div>
                </div>
              </li>
              </div>
              
            </ul>
        </div>
      </nav>
      <div class="blog ok">
        <div class="row">
          <div class="col-md-4 blog_admin">
            <div class="img">
              <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2015/08/blog-img-1.jpg" alt="">
            </div>
            <div class="content">
              <h5>06 Aug, 2015</h5>
              <a href="#">Could It</a>
              <h5>By: Admin</h5>
            </div>
          </div>
          <div class="col-md-4 blog_admin">
            <div class="img">
              <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2015/08/blog-img-1.jpg" alt="">
            </div>
            <div class="content">
              <h5>06 Aug, 2015</h5>
              <a href="#">Could It</a>
              <h5>By: Admin</h5>
            </div>
          </div>
          <div class="col-md-4 blog_admin">
            <div class="img">
              <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2015/08/blog-img-1.jpg" alt="">
            </div>
            <div class="content">
              <h5>06 Aug, 2015</h5>
              <a href="#">Could It</a>
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
              <a href="<?php echo URL . "pet/detail/${value['idPet']}"; ?>">
                <div class="action"  ><img class="hoveri" src="<?php echo URL . 'public/style/images/' . $value['image']; ?>" alt="">
                  <div class="addcart">
                    <button id="add"><i class="fas fa-shopping-basket" aria-hidden="true"></i></button>
                    <button id="wishlist"><i class="far fa-heart" aria-hidden="true"></i></button>
                    <button id="reset"><i class="fas fa-sync" aria-hidden="true"></i></button>
                    </div>
                  <div class="productp">
                  <a class="style" href="#"><?php echo $value['name']; ?></a>
                  </div>
                  <div class="price">
                  <p><?php echo $value['price']; ?></p>
                  </div>
                </div>
              </a>
              <a href="<?php echo URL . "pet/detail/${value['idPet']}"; ?>">
                <div class="action"  ><img class="hoveri" src="<?php echo URL . 'public/style/images/' . $value['image']; ?>" alt="">
                  <div class="addcart">
                    <button id="add"><i class="fas fa-shopping-basket" aria-hidden="true"></i></button>
                    <button id="wishlist"><i class="far fa-heart" aria-hidden="true"></i></button>
                    <button id="reset"><i class="fas fa-sync" aria-hidden="true"></i></button>
                    </div>
                  <div class="productp">
                    <a class="style" href="#"><?php echo $value['name']; ?></a>
                  </div>
                  <div class="price">
                  <p><?php echo $value['price']; ?></p>
                  </div>
                </div>
                </a>
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
            <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2016/11/home1_image5.jpg" alt="code">
          </div>
          <div class="col-md-4">
            <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2016/11/home1_image6.jpg" alt="code">
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
              <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2016/11/home1_contentslider1.png" alt="">
            </div>
            <div class="content">
              <h1>TRAINING</h1>
              <h3>SAVE $15 Puppy Or Beginner Training Course</h3>
              <p>Enroll in a 6-week course to teach your dog basic manners & simple cues.</p>
              <a href="#">Learn more ></a>
            </div>
          </div>
        </div>
      </div>
      </div>
     
     

    
    <!-- Optional JavaScript -->
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



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>  

  
  </body>
</html>