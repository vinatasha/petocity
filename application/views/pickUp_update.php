<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Pesanan Pick Up and Delivery</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="pickUp.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<style>
  body{
    margin: 0px;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
}
.inp{
  padding-top:10px;
}

.judul{
    background-color: #EAF2FF;
}

.kiri{
    margin-top: 50px;
    background-color:#F8C046;
    stroke-width:3;
    width: 140px;
    height: 80px;
}
.pickup{
    position: relative;
    margin-top: -93px;
    margin-left: 100px;
    font-size:30px;
    color:#124C5F;
}
.garis{
    width: 100%;
    height: 180px;
    margin: 0px;
}
.isian{
    background-color: #FFF2B3;
    opacity: 70%;
    text-align: center;
}
.inputan{
    padding-top: 20px;
    text-align: center;
    
}
.back{
    width: 18rem;
    background-color: #FFF2B3;
}
.formnya{
    width: 140px;
    height: 80px;
    text-align: center;
}
.atasan{
  margin-left: 0px;
  text-align: left;
}
.tombol{
  background-color:  #527C8A;
  border: none;
  color: white;
  padding: 5px 70px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
}

.edit{
  padding-top:10px;
  text-align: center;
  font-size:40px;
  color:#124C5F;
}
}
</style>
<body> 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="../../images/Logo.png" alt="" width="150" height="43" style="margin-right: 750px; margin-bottom: 10px; margin-top: 5px;">
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
      <form class="d-flex">
        <button type="button" class="btn btn-outline-dark" style="margin-right: 10px;">Log in</button>
        <button type="button" class="btn btn-outline-dark">Register</button>
      </form>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<section class ="judul">
<h1 class ="edit"><b>Edit Pesanan</b></h1>
    <svg class = "kiri"> 
    </svg>
          <h1 class ="pickup"><b>Pick Up <br> and <br> Delivery</b></h1>
          
          <div class="container">
            <img src="../../images/otw.svg" class="mx-auto d-block" style="width:55%"> 
          </div>
          <img class ="garis" src="../../images/garis.png">
    </section>
    <section class ="isian">
          <div class="card container w-50 border-0 bg-transparent">
            <div class="card-body">
            <form action="<?php echo base_url('pickUp/update_process'); ?>" method ="post"><br> 
            <input type="hidden" name="id" value =<?=$update ['id']?>>
      <label>
        Name: <input type="text" name="nama" class="form-control form-control-lg" id="colFormLabelLg" autofocus value = "<?= $update ['nama']; ?>">
        </label>
      <br>
      <label>
        Type of Animal: <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="jenis" autofocus value = "<?= $update ['jenis']; ?>">
        </label><br>
      <label>
       Animal's Condition : <input type="text" class="form-control form-control-lg" id="colFormLabelLg" name="kondisi" autofocus value = "<?= $update ['kondisi']; ?>">
        </label><br>
      <label>
        Address:
        <textarea class="form-control form-control-lg" id="colFormLabelLg"name="alamat"><?= $update ['alamat']; ?></textarea><br>
      </label>
      <br>
      <input type="submit" value="Simpan" class ="tombol">
              </form>
            </div>
          </div>
    </section>
    
  </body>
</html>