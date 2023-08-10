<!DOCTYPE html>
<html lang="entered">

<head>
  <title>M.M. Tour & Travels Sign In Form </title>
  <meta name="viewport" content="width= device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
  <body>
    <form name="myForm" action ="signin.php" method="POST">

      <div class="login-box">

        <h1> Sign In </h1>

        <div class="textbox">
           
          <input type="text" placeholder="Username" name="user" value="" required> 

        </div>
        <div class="textbox">
          <input type="password" placeholder="Password" name="pass" value="" maxlength="8" required>
        </div>
          
        <input class="btn" type="submit" name="submit" value="Sign in"> 
        <center> <a style="color: white;" href="signup.php"> Don't have an account ? </a> <center>
      </div>

    </form>
    <script>
      const hamburger = document.querySelector('.hamburger');
const navLink = document.querySelector('.nav__link');

hamburger.addEventListener('click', () => {
  navLink.classList.toggle('hide');
});

    </script>

  </body>
</html>


