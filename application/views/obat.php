<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order Medicine</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="pickUp.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
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
      <div>
          <table>
            <tr>
              <td><img src="../../images/avatar-female.png" style="height: 43px;"></td>
              <td><p style="margin: 0;">Hello !</p></td>
            </tr>
          </table>
      </div>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- konten -->
    <section class ="obat">
          <h1><b>Order Medicine</b></h1><br>
          <div class="container">
            <img class ="ukuran" src="../../images/order.jpg" class="mx-auto d-block ukuran"> 
          </div>
    </section>

    <section class ="isian">
          <div class="card container w-50 border-0 bg-transparent">
            <div class="card-body">
            <form action="<?php echo base_url('Controller/create_process'); ?>" method ="post" enctype="multipart/form-data"><br> 
                    <input type="name" class="form-control" name="nama" placeholder="Name" required><br>           
                    <input type="jenis" class="form-control" name="jenis" placeholder="Jenis Hewan" required><br>                                 
                    <textarea class="form-control" name="resep" placeholder="resep obat" rows="3" required></textarea><br>  
                    <input type="file" class="form-control" id="foto" name="foto"><br>
                    <textarea class="form-control" name="alamat" placeholder="Alamat" rows="3" required></textarea><br>
                    <input type="submit" value="Simpan">
              </form>
            </div>
          </div>
    </section>
</body>
<style>
  body{
    margin: 0px;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
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
    margin-top: -95px;
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

/* order */
.obat{
    padding-top: 20px;
    padding-bottom: 50px;
    width: 100%;
    text-align: center;  
    background-image: url("../../images/background.jpg");
    background-size: 100%;
    color:#124C5F;
}
.ukuran{
    width: 50%;
}
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</style>

</html>