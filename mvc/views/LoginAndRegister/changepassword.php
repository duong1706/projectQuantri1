<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
 
    <!-- Bootstrap CSS -->
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?php echo URL  . 'public/style/css/LoginAndRegister.css'; ?>">
  </head>
  <body>
    <div class="Login__Register">
      <div class="boxAuth">
        <div class="user signinBox">
          <div class="imgBox"><img src="<?php echo URL . 'public/style/images/bgformauth.jpg'; ?>" /></div>
          <div class="formBox">
            <form method="post">
              <h2>Change Password</h2>
              <input type="password" name="matkhaucu" placeholder="Old Password" />
              <input type="password" name="matkhaumoi" placeholder="New Password" />
              <input type="password" name="matkhaulai" placeholder="Retype Password" />
              <p style="margin: 0.5em; color: red;">
                <?php
                  if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                  }
                ?>
              <br>
              <input style="
    max-width: 150px !important;
" type="submit" value="Change Password" name="pass"/>
             
            </form>
          </div>
        </div>
       
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script >
        
    </script>
  </body>
</html>
