<?php
session_start();
include 'conn.php';
function phpMsg($msg)
{
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

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
    background-size: 100px 120px;
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
            <a class="nav-link" href="manage_tourist.php">Manage Tourist Destination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="manage_visitor.php">Manage Visitor Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="show_comment.php">Show Visitor Comment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php">Show Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main role="main">