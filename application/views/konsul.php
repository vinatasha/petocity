<!DOCTYPE html>
<html lang="en">

<head>
    <title>Consult</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
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
  margin-left:5%;
}


/* konsul */
.konsul{
    padding-top: 20px;
    padding-bottom: 50px;
    width: 100%;
    height: 10%;
    text-align: center;  
    background-image: url("../images/background konsul.jpg");
    background-size: 100%;
   
}
.ukuran2{
    width: 35%;
}
.bagian {
    
    background-color: #E0F2EE;
    padding: 50px;
  
  }
  
  .ket{
      margin-left: 5%;
      font-size: 40px;
  }
 .desc{
    margin-left: 5%;
     font-size: 25px;
 }
 .judulKonsul{
    font-size: 50px;
 }
 .schedule-desc{
     padding-top: 25px;
     align-items:center;
   
 }
 #menu{
     margin-top: 20px;
 }

 

</style>
    <!-- navbar -->
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

<body>
    <section class ="konsul">
          <h1 class = "judulKonsul"><b>Consult</b></h1><br>
          <div class="container">
            <img class ="ukuran2" src="../../images/dokter.svg" class="mx-auto d-block ukuran"> 
          </div>
          
    </section>
    <img class ="garis" src="../../images/garis konsul.jpg">

    <section>
        <h2 class = "ket"><b>Available Doctors Today</b></h2><br>
        <div id="menu" class="container bagian">
        <div class="row">
          <div class="col-3">
            <div class="schedule-head">
                <img src="../../images/avatar-male.png" alt="" style="height: 200px;">
                
            </div>
          </div>
          <div class="col-9">
            <div class="row">

                <div class="schedule-desc">
                    <div>
                        <h3 class ="ket">Drh. Hendra</h3>
                        <h5 class ="desc">Siap melayani hewan Anda dengan profesional</h5>
                    </div>
                    <div>
                    <a class="btn tombol" href="https://wa.me/62895327898722" role="button" >Chat</a>
</div>
                </div>

                
            </div>
          </div>
        </div>
      </div>
        
      <div id="menu" class="container bagian">
        <div class="row">
          <div class="col-3">
            <div class="schedule-head">
                <img src="../../images/avatar-female.png" alt="" style="height: 200px;">
                
            </div>
          </div>
          <div class="col-9">
            <div class="row">

                <div class="schedule-desc">
                    <div>
                        <h3 class ="ket">Drh. Setiawati</h3>
                        <h5 class ="desc">Siap melayani hewan Anda dengan baik</h5>
                    </div>
                    <div>
                    <a class="btn tombol" href="https://wa.me/62895327898722" role="button" >Chat</a>
</div>
                </div>

                
            </div>
          </div>
        </div>
      </div>
        
    </section>
  
 
   
</body>
</html>