<!DOCTYPE html>
<html lang="en">

<head>
  <title>AJAX CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light  shadow">
    <div class="container">
      <a class="navbar-brand fw-bolder" href="index.php">AJAX CRUD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  mb-2 ms-auto">
          <li class="nav-item">
            <a class="nav-link active btn" aria-current="page" href="#" onclick="newBlog()">New Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn" href="#" onclick="getBlogs()">Blogs</a>
          </li>          
        </ul>        
      </div>
    </div>
  </nav>

  <section id="main">
    <div class="px-4 py-5 my-5 text-center">
      <img class="d-block mx-auto mb-4" src="img/ajax-logo.png" alt="" width="72" height="57">
      <h1 class="display-5 fw-bold">Ajax with Php</h1>
      <div class="col-lg-6 mx-auto">
        <p class=" mb-4 small"><strong>AJAX</strong> stands for Asynchronous JavaScript and XML. AJAX is a new technique for creating better, faster, and more interactive web applications with the help of XML, HTML, CSS, and Java Script.</p>
        <p class=" mb-4 small"><strong>PHP</strong> The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications. This tutorial helps you to build your base with PHP.</p>
        
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-primary btn-lg px-4 gap-3" onclick="newBlog()">New Blog</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4" onclick="getBlogs()">Blog List</button>
        </div>
      </div>
    </div>
  </section>



</body>
<script src="js/app.js"></script>
<script src="js/deleteData.js"></script>
<script src="js/edit.js"></script>
<script src="js/update.js"></script>

</html>