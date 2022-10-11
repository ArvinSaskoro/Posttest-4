<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARVIN 048</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="form/form.css">
    <script src="scripts.js defer"></script>

     
  </head>

  <body>
    <header>
      <div class="fcontainer">
        <i class="bi bi-brightness-high-fill" id=""toggleDark></i>
        
        <div class="header-left">
          <img class="logo" src="assets/logo.png" alt="logo web">
          <h2>Game</h2>
          <h2 class="red">Website</h2>
        </div>

        <div class="header-right">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About me</a></li>
          </ul>
        </div>
      </div>
    </header>

    <div class="wrapper">   
        <div class="container">
            <div class="content">
                <div class="box-login">
                    <div class="card-main">
                        <div class="login-header">Form Login Email</div>
                        <img class="logo-google"  src="assets/Google.png" alt="logo google">
                        <div class="login-body">
                            <form class="form-login" method="POST" action="">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-input">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-input">
                                <button type="submit" class="btn-login">Login</button>
                            </form>
                            <p>Don't have an acoount?<span><a href="create-acc.php" class=""> Regist here</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>

    <footer>
      <div class="container">
        <p>by M. Arvin Saskoro</p>
        <p>2109106048</p>
        <p>© All rights reserved</p>
      </div>
    </footer>

  </body>
</html>