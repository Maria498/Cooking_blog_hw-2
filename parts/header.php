<?php
session_start();
require_once("users.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">  
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="scripts.js"></script>
    <title>Main Page</title>
  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand fs-1" href="entry.php">Cooking Blog  <i class="bi bi-stars"></i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="entry.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signIn.php">Sign In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="recipes.php">Recipes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <a class="nav-link" href="logout.php">Log Out</a>
            </ul>
          </div>
        </div>
      </nav>
    </header>