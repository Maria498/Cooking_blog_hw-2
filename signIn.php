<?php require_once("parts/header.php"); ?>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="entry.php">Home</a></li>
          <li class="breadcrumb-item"><a href="signIn.php">Sign In</a></li>
        </ol>
    </nav>
    <main class="container p-1">
      <div class="container text-black">
      <div class="row g-3 p-3">
          <div class="col-12 col-md-6"><img src="images/macaroon.JPG" class="img-thumbnail" alt="..."></div>
          <div class="col-12 col-md-6">
            <form method="post" class="form-horizontal" role="form" fa4="center">
              <h3>Registration Form</h3>
              <div class="col-auto col-sm-auto col-md-auto col-lg-auto col-xl-auto">
                <label for="inputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="inputEmail1"  name="email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
      
              <div class="col-auto col-sm-auto col-md-auto col-lg-auto col-xl-auto">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" id="password" class="form-control"  name= "password" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
              </div>
      
              <div class="col-auto col-sm-auto col-md-auto col-lg-auto col-xl-auto">
                  <label for="inputPassword" class="form-label">Plese re-enter your password</label>
                  <input type="password" id="PasswordAgain" class="form-control" name= "passwordValidation" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
              </div>
      
              <div class="col-auto col-sm-auto col-md-auto col-lg-auto col-xl-auto">
                  <label for="text" class="form-label">User Name</label>
                  <input type="password" id="userName" class="form-control"  name= "userName" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              
              <div class="mb-3 form-check">
                  <button type="button" onclick class="btn btn-secondary mt-4">Register</button>
              </div>
            </form>
            <script>
              // Get the modal
              var modal = document.getElementById('id01');
              
              // When the user clicks anywhere outside of the modal, close it
              button.onclick = function(event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                }
              }
              </script>
          </div>
     </div>
    </div>  
  </main>
<?php require_once("parts/footer.php"); ?>