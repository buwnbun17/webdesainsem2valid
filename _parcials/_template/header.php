<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buwnbun</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary " style="border-bottom: 5px solid  #1545c9;">
    <div class="container-fluid">
      <a class="navbar-brand text-white fw-bold" href="?page=home">
        <h1 class="mb-0"><i class="bi bi-robot text-white"></i><b>&nbsp; Buwnbun</b></h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
        <ul class="navbar-nav me-3 my-2 my-lg-0 navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link text-white" href="?page=home" style="font-size: 20px;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?page=about" style="font-size: 20px;">About Us</a>
          </li>
          <?php if (isset($_SESSION['user_id'])) : ?>
            <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
      aria-expanded="false" style="font-size: 20px;">
       @<?= ucwords($_SESSION['fullname'])?>
    </a> 
    <ul class="dropdown-menu" data-bs-auto-close="outside">
        <li><a class="dropdown-item" href="?page=logout">Logout</a></li>
        <li><a class="dropdown-item" href="?page=profil">Profil</a></li>
    </ul>
</li>


        
        <!-- Login Button -->

        <?php else : ?>
          <a href="?page=login" class="btn btn-custom">Login <i class="bi bi-arrow-right"></i></a>
                    <?php endif; ?>
        </div>
    </div>
  </nav>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


</body>
</html>