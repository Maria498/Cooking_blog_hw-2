<?php require_once("parts/header.php"); ?>
<?php 
  if(!isset($_SESSION['user_email'])) {
      header('Location: entry.php');
      exit;
  }
?>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="entry.php">Home</a></li>
          <li class="breadcrumb-item"><a href="recipes.php">Recipes</a></li>
        </ol>
    </nav>
    <main class="container p-1">
        <div class="container text-black">
        <div class="row g-3 p-3">
            <div class="col-12 col-md-6"><img src="images/macaroon2.JPG" class="img-thumbnail" alt="..."></div>
            <div class="col-12 col-md-6">
                <h3>Recipes List</h3>
                <div class="mx-auto" style="height: 20px;">
                  <div class="position-relative m-5">
                  <button type="button" id="btn_asc"  class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"  style="width: 7rem; height:2rem; "  >Sort <span class="bi bi-sort-alpha-down"></span> <span class="bi bi-sort-alpha-down-alt"></span></button>
                </div>
                </div>
                
                <table class="table table-striped table-bordered table-hover mt-3">
                  <thead>
                      <tr>
                        <th scope="col">Recipe Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Posted</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <a class="tb-link" href = "pizzaMargherita.php">Pizza Margherita</a></td>
                        <td>@Someone1</td>
                        <td>date1</td>
                      </tr>
                      <tr>
                        <td> <a class="tb-link" href = "#">Pasta Rosa</a></td>
                        <td>@Someone2</td>
                        <td>date2</td>
                      </tr>
                      <tr>
                        <td> <a class="tb-link" href = "#">Caprese Salad</a></td>
                        <td>@Someone3</td>
                        <td>date3</td>
                      </tr>
                    </tbody>
                  </table>  
            </div>
       </div>
      </div>  
    </main>

  <?php require_once("parts/footer.php"); ?>
    