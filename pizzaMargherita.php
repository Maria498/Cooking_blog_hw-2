<?php require_once("parts/header.php"); ?>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="entry.php">Home</a></li>
          <li class="breadcrumb-item"><a href="recipes.php">Recipes</a></li>
          <li class="breadcrumb-item active" aria-current="page">Pizza Margherita</li>
        </ol>
    </nav>
    <main class="container p-1">
        <div class="container p-3  bg-light text-black">
        <h1 class="text-center">Pizza Margherita</h1> 
        <div class="row g-3 p-3">
            <div class="col-12 col-md-3"><img src="images/margherita-pizza.jpg" class="img-thumbnail" alt="..."></div>
            <div class="col-12 col-md-9">
                <section>
                    <section>
                        <h2>Description</h2>
                        <li>Pizza margherita - lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pharetra lorem ante, non blandit libero hendrerit sed. Suspendisse a augue ac urna ultrices cursus eu at dolor. Donec nibh purus, vehicula a dolor quis, volutpat porta ex. Praesent quis tincidunt purus. Fusce condimentum dapibus nisi dictum sagittis. Sed magna erat, euismod fringilla fermentum auctor, laoreet non sem. </li>
                    </section>
                        <h2>Ingredients</h2>
                        <ul class="list-group">
                        <li class="list-group-item" id="id1">
                            <input class="form-check-input me-1" type="checkbox" onclick="lineTrought('id1')" value="" aria-label="...">
                            1 batch easy whole wheat pizza dough
                        </li>
                        <li class="list-group-item" id="id2">
                            <input class="form-check-input me-1" type="checkbox" onclick="lineTrought('id2')" value="" aria-label="...">
                            1 large can whole San Marzano tomatoes
                        </li>
                        <li class="list-group-item" id="id3">
                            <input class="form-check-input me-1" type="checkbox" onclick="lineTrought('id3')" value="" aria-label="...">
                            12 ounces mozzarella or other fresh mozzarella balls
                        </li>
                        <li class="list-group-item" id="id4">
                            <input class="form-check-input me-1" type="checkbox" onclick="lineTrought('id4')" value="" aria-label="...">
                            Handful of fresh basil, thinly sliced plus small leaves
                        </li>
                        <li class="list-group-item" id="id5">
                            <input class="form-check-input me-1" type="checkbox" onclick="lineTrought('id5')" value="" aria-label="...">
                           Additional garnishes: Eextra-virgin olive oil, flaky sea salt and optional red pepper flakes
                        </li>
                        </ul>  
                    </section>
                    <section>
                        <h2>Instructions</h2>
                        <ol>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pharetra lorem ante, non blandit libero hendrerit sed. Suspendisse a augue ac urna ultrices cursus eu at dolor. Donec nibh purus, vehicula a dolor quis, volutpat porta ex. Praesent quis tincidunt purus. Fusce condimentum dapibus nisi dictum sagittis. Sed magna erat, euismod fringilla fermentum auctor, laoreet non sem. </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pharetra lorem ante, non blandit libero hendrerit sed.  </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pharetra lorem ante, non blandit libero hendrerit sed. Suspendisse a augue ac urna ultrices cursus eu at dolor. Donec nibh purus, vehicula a dolor quis, volutpat porta ex. Praesent quis tincidunt purus. Fusce condimentum dapibus nisi dictum sagittis. Sed magna erat, euismod fringilla fermentum auctor, laoreet non sem. </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pharetra lorem ante, non blandit libero hendrerit sed. Suspendisse a augue ac urna ultrices cursus eu at dolor.  </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pharetra lorem ante, non blandit libero hendrerit sed.  </li>
                        </ol>
                    </section>
                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary"" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Share this recipe
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Share link</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="basic-url" class="form-label">URL</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary">Copy</button>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
       </div>
    </div>  
    </main>
<?php require_once("parts/footer.php"); ?>