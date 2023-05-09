
<?php
  include_once ("commun/header.php");
  include_once ("commun/navbar.php");
?>

<link rel="stylesheet" href="css/account.css">



<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-6 imgDiv">
                <img src="img/logo.png" >
            </div>
            <div class="col-6">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="indicator">
                    </div>
                    <form id="loginForm">
                        <input type="text" placeholder="username">
                        <input type="password" placeholder="password">
                        <button type="submit" class="btn">Login </button>
                        <a href="">Forgot password</a>
                    </form>
                    <form id="regForm">
                        <input type="text" placeholder="username">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="password">
                        <button type="submit" class="btn">Register </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>






<!-----------JS -------->
<script src="js/account.js"></script>

<!----------  footer  ------------->
<?php
  include_once ("commun/footer.php");
?>
