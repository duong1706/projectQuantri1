

<nav class="navbar navbar-expand-lg ok">
          <nav class="navbar">
              <a class="navbar-brand" href="<?php echo URL; ?>">
              <img src="http://demo1.wpopal.com/bestfriend/wp-content/uploads/2016/12/logo.png"  alt="logo">
              </a>
          </nav>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>
  
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbar_home">
              <div class="search">
                <li class="nav-item dropdown dropdownn">
                  
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
                      <span>
                        <?php
                          if(isset($_SESSION['user'])){
                            echo $_SESSION['user'];
                          }
                        ?>
                      </span>
                      <i class="far fa-user"></i>
                    </a>
                
                    <div class="dropdown-menu" aria-labelledby="dropdownUserLink">
                    <a class="dropdown-item" href="<?php echo URL . 'dashboard'; ?>">Admin</a>
                    <a class="dropdown-item log" href="<?php 
                                                      if(isset($_SESSION['user'])){
                                                        echo URL . 'user/logout';
                                                      }
                                                      else{
                                                        echo URL . 'LoginAndRegister'; 
                                                      }
                                                    ?>">
                                                      <?php
                                                        if(isset($_SESSION['user'])){
                                                          echo "Log Out";
                                                        }
                                                        else{
                                                          echo "Log In";
                                                        }
                                                      ?>
                                                    </a>
                                                  
                    </div>
                </div>
              </li>
              </div>
              
            </ul>
        </div>
      </nav>