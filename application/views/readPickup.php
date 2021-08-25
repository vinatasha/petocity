<!DOCTYPE html>
<html lang=”en”>
    <head>
        <meta charset="utf-8">
        <title>Medicine</title>
        <!-- styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Rubik&display=swap" rel="stylesheet">
    </head>
    <style>
    body {
        background-color: #FFF3BA;
        body{
    margin: 0px;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
}
    }

    .container-fluid {
        padding: 0;
    }

    .title {
        padding-top: 3.5rem;
        font-weight: bolder;
        font-size: 40px;
        text-align: center;
        color:#124C5F;
    }

    .hero-img {
        position: absolute;
        top: 0;
        z-index: -1;
    }

    .pesanan {
        background-color: #C7E7E1;
        margin-top: 20px;
        margin-bottom: 30px;
        padding: 1rem;
    }

    .pesanan h2 {
        font-size: 2rem;
    }

    .pesanan p {
        font-size: 1.1rem;
    }

    .btn-primary {
        background-color: #527C8A;
        border-color: #527C8A;
    }
    </style>
    <body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="../../images/Logo.png" alt="" width="150" height="43" style="margin-right: 650px; margin-bottom: 10px; margin-top: 5px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;" >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SERVICE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT US</a>
        </li>
      </ul>
      <table>
            <tr>
              <td><img src="../images/avatar-female.png" style="height: 43px;"></td>
              <td><p style="margin: 0;">Hello !</p></td>
            </tr>
          </table>
    </div>
  </div>
</nav>
    <!-- hero -->
    
    <div class="position-relative" style="height: 560px;">
        <div class="container-fluid">
            <img src="../images/background-2.png" class="hero-img mx-auto d-block">
        </div>
        <h1 class ="title"><b>Daftar Pesanan <br>Pick Up  and  Delivery</b></h1>
       

    </div>
    
    <!-- menu -->
    <?php foreach ($posts as $post): ?>
        <div class="container pesanan">
            <h2><strong>Name</strong>: <?php echo $post->nama; ?></h2>
            <p><strong>Type of animal</strong>: <?php echo $post->jenis; ?></p>
            <p><strong>Animal's condition</strong>: <?php echo $post->kondisi; ?></p>
            <p><strong>Address</strong>: <?php echo $post->alamat; ?></p>
            <div style="text-align: center;">
                <a class="btn btn-primary" href="<?php echo base_url('pickUp/update/'. $post->id); ?>">Update</a>
                <a class="btn btn-primary" href="<?php echo base_url('pickUp/delete/' . $post->id);?>">Hapus</a>
            </div>
        </div>
  

    <!-- footer -->
   <?php endforeach; ?>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>