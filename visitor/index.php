<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <title>ONLINE JAZAN TOURIST GUIDE </title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/album/">
  <!-- Bootstrap core CSS -->
  <link href="css\bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">
  <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  body {
    padding-top: 0px;
    padding-bottom: 0px;
    background: url('img/pattern-1.jpeg') repeat;
    /* font-size: 5pt;*/
    background-size: 8% 12%;
  }

  .heading-title {
    font-family: 'Dancing Script', cursive;
    font-size: xx-large;
  }

  .jumbotron {
    background: url('img/2525551-1153680746.jpg') no-repeat;
    background-size: 100% 550px;
    height: 600px;
  }
  </style>
  <!-- Custom styles for this template -->
  <link href="album.css" rel="stylesheet">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">ONLINE JAZAN TOURIST GUIDE </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="show_tourist.php">Show Tourist Destination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edit_profile.php">Edit Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main role="main">
    <section class="jumbotron text-center" style="margin-bottom: -40px;">
      <div class="container">
        <br /><br />
        <h1 class="heading-title" style="color: white;
  text-shadow: 2px 2px 4px #000000;font-size: 60pt;">Online Jazan Tourist Guide </h1>
        <p class="lead  heading-title " style="color: white;
  text-shadow: 3px 3px 4px #000000;">Enjoy tourism in the Jazan region and spend the most beautiful times in the magic
          of nature in Jazan, where the terrain varies in one region.</p>

      </div>
    </section>
    <div class="text-center heading-title div" style="padding: 10px 0px;">Wonderful Tourist Places</div>
    <div class="album  ">
      <div class="container">
        <div class="row">
          <!-- ROW-->
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img\images_sea.jpg">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img\images_f.jpg">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img\Arabstoday.jpg">
              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- ROW-->
      </div>
    </div>
  </main>
  <footer class="text-muted ">
    <div class="container  ">
      <p class="float-right">
        <a href="#">Back to top</a>
      </p>
      <p>ONLINE JIZAN TOURIST GUIDE &copy;</p>
    </div>
  </footer>
  <script src="js\jquery-3.5.1.slim.min.js"></script>
  <script>
  window.jQuery || document.write('<script src="js\jquery.slim.min.js"><\/script>')
  </script>
  <script src="js\bootstrap.bundle.min.js"></script>
</body>

</html>