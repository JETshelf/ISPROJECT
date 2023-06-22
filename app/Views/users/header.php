<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <?php
  $uri = service('uri'); 
  ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"> Homeaway Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php if (session()->get('isLoggedIn')):?>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active':null)?>">
          <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
      </ul>
      <ul class = "navbar-nav my-2 my-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
        </li>

      </ul>
    <?php else:?>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item<?= ($uri->getSegment(1) == '' ? 'active':null)?>">
          <a class="nav-link active" aria-current="page" href="/login">Login</a>
        </li>
        <li class="nav-item"<?= ($uri->getSegment(1) == 'register' ? 'active':null)?>>
          <a class="nav-link" href="/">Register</a>
        </li>
      </ul>
    </div>
    <?php endif;?> 
  </div>
</nav>
    
