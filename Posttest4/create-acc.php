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
                <div class="box-create">
                    <div class="card-main">
                        <div class="login-header">Form Create New Account</div>
                        <div class="login-body">
                            <form class="form-login" method="POST" action="form.php">
                                <label class="form-label">First name</label>
                                <input type="text" 
                                name="first-name" 
                                value="your name..."
                                class="form-input">
                                <label class="form-label">Last name</label>
                                <input type="text" 
                                name="Last-name" 
                                value="your name..."
                                class="form-input">
                                <label class="form-label">Email</label>
                                <input type="email" 
                                name="email" 
                                value="google@gmail.com"
                                class="form-input">
                                <label class="form-label">Password</label>
                                <input type="password" 
                                name="password" 
                                class="form-input">
                                <label class="form-label">Phone number</label>
                                <input type="tel"
                                pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" 
                                name="Phone number" 
                                value="0000-0000-0000"
                                class="form-input">
                                <div class="gender">
                                    Gender<br>
                                    <input type="radio"
                                    id="lk" 
                                    name="jenis_kelamin"
                                    class="form-input">
                                    <label for="lk">Laki-Laki</label>
                                    <input type="radio" 
                                    id="pr"
                                    name="jenis_kelamin"
                                    class="form-input">
                                    <label for="pr">Perempuan</label>
                                </div>
                                
                                <input type="submit" class="submit" value="Create Account">
                                <a class="back" href="login-acc.php" class="">Back</a>
                            </form>
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