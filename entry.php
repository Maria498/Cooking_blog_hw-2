<?php require_once("parts/header.php");?>
<?php if(isset($_COOKIE["user_email"])){
  $_SESSION['user_email']=$_COOKIE["user_email"];
  header('Location: recipes.php');
  exit;
}
?>
<?php
  if(isset($_POST['login_form'])) {
    if (isset($users[$_POST['user_email']])){
      if ($users[$_POST['user_email']]["password"] == $_POST['password']) {
        if ($_POST['remember_me']=="1") {
        setcookie("user_email", $_POST['user_email'],time() + 7*24*60*60*1000);
        }
        $_SESSION['user_email']=$_POST['user_email'];
        header('Location: recipes.php');
        exit;
      } else { ?>
      <div class="alert alert-danger" role="alert">
        Wrong Password
      </div>
      <?php
      }
    } else { ?>
      <div class="alert alert-warning" role="alert">
        Email not found
      </div>
    <?php
    }
  }
?>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="entry.php">Home</a></li>
        </ol>
    </nav>
    <main class="container p-1">
      <div class="container text-black">
      <div class="row g-3 p-3">
          <div class="col-12 col-md-6"><img src="images/login.JPG" class="img-thumbnail" alt="..."></div>
          <div class="col-12 col-md-6">
            <form method="post" class="form-horizontal" role="form" fa4="center">
              <h3>Log In</h3>
              <div class="col-auto col-sm-auto col-md-auto col-lg-auto col-xl-auto">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name='user_email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="col-auto col-sm-auto col-md-auto col-lg-auto col-xl-auto">
                  <label for="inputPassword5" class="form-label">Password</label>
                  <input name='password' type="password" id="inputPassword5" class="form-control" aria-describedby="HelpBlock">
                  <div id="HelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                  </div>
              </div>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="1" name="remember_me"> Remember me
                </label>
              </div>
              <div class="mb-3 form-check">
                <button name='login_form' type="submit" class="btn btn-secondary">Submit</button>
                <a class="btn btn-link" href="#" role="button">Reset</a>
                <a class="btn btn-link" href="signIn.html" role="button">Sign In</a>
              </div>
            </form>
          </div>
     </div>
    </div>  
  </main>
<?php require_once("parts/footer.php"); ?>