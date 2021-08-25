<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- NAVBAR -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- FOOTER -->
    <link rel="stylesheet" href="Footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>

<style>
  * {
    text-decoration: none;
    margin: 0px;
    padding: 0px;
}

body {
    margin: 0px;
    padding: 0px;
    font-family: 'Open Sans',sans-serif;
}

.wrapper {
    width: 1100px;
    margin: auto;
    position: relative;
}

.logo a {
    font-size: 50px;
    font-weight: 800;
    float: left;
    font-family: courier;
    color: #364f6b;
}

.menu {
    float: right;
}

nav {
    width: 100%;
    margin: auto;
    display: flex;
    line-height: 80px;
    position: sticky;
    position: -webkit-sticky; 
    top: 0;
    background: #FFFFFF;
    z-index: 1;
    border-bottom:1px solid #364f6b;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

nav ul li {
    float: left;
}

nav ul li a {
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 0px 16px 0px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: underline;
}

section {
    margin: auto;
    display: flex;
    margin-bottom: 50px;
}

.kolom {
    margin-top: 200px;
    margin-left: 50px;
    margin-bottom: 50px;
}

.kolom .deskripsi {
    font-size: 20px;
    font-weight: bold;
    font-family: 'comic sans ms';
    color: #364f6b;
}

.kolom-misi {
    margin-top: 50px;
    margin-left: 50px;
    margin-bottom: 50px;
}

.kolom-team {
    margin-top: 50px;
    margin-left: 50px;
    margin-bottom: 50px;
}

h2 {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 45px;
    margin-bottom: 20px;
    color: #364f6b;
    width: 100%;
    line-height: 50px;
}

a.tbl-biru {
    background: #3f72af;
    border-radius: 20px;
    margin-top: 20px;
    padding: 15px 20px 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
}

a.tbl-biru:hover {
    background: #1DBF73;
    text-decoration: none;
}

p {
    margin: 10px 0px 10px 0px;
    padding: 10px 0px 10px 0px;
}

.tengah {
    text-align: center;
    width: 100%;
}

.team-list {
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
}

.kartu-team {
    width: 20%;
    margin: 0 auto;
}

.kartu-team img {
    width: 80%;
    border-radius: 50%;
}

.kartu-team p {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 25px;
    text-align: center;
    color: #364f6b;
}

.partner-list {
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
}

.kartu-partner {
    width: 20%;
    margin: 0 auto;
}

.kartu-partner img {
    width: 150px;
    border-radius: 50%;
}

#contact {
    background: #dedede;
    padding:50px 0px 50px 0px;
}

h3 {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 30px;
    margin-bottom: 20px;
    color: #364f6b;
    width: 100%;
    line-height: 50px;
}


@media screen and (max-width: 991.98px) {
    .wrapper {
        width: 90%;
    }

    .logo a {
        display: block;
        width: 100%;
        text-align: center;
    }

    nav .menu {
        width: 100%;
        margin: 0;
    }

    nav .menu ul {
        text-align: center;
        margin: auto;
        line-height: 60px;
    }

    nav .menu ul li {
        display: inline-block;
        float: none;
    }

    section {
        display: block;
    }

    section img {
        display: block;
        width: 100%;
        height: auto;
    }

    .kartu-tutor {
        width: 50%;
    }

    .kartu-partner {
        width: 50%;
    }
}

.container {
	padding: 0;
	margin: auto;
	display: grid;
	grid-template-columns: repeat(8,1fr);
	margin: 5px 15px;
	gap:20px;
	position: relative;
}

.card {
	width: 100%;
	height: auto;
	grid-column: span 4;
	margin: 10px 0;
	border-radius: 15px;
	position: relative;
	box-shadow: 0 10px 10px rgba(0,0,0,.1);

}

.head-card img {
	width: 100%;
	height: 200px;
    float: right;
	object-fit: cover;
}

.body-card {
	padding: 10px 15px;
}

.body-card h1 {
	margin: 0;	
}


/*FOOTER*/
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

footer {
    background: #124C5F;
    margin-top:100px;
  }
  
  footer a {
    color: #fff;
    font-size: 14px;
    transition-duration: 0.2s;
  }
  
  .copy {
    font-size: 12px;
    padding: 10px;
    border-top: 1px solid #FFFFFF;
  }
  
  .footer-middle {
    padding-top: 2em;
    color: white;
  }
  
  
  /*SOCİAL İCONS*/
  
  /* footer social icons */
  
  ul.social-network {
    list-style: none;
    display: inline;
    margin-left:  !important;
    padding: 0;
  }
  
  ul.social-network li {
    display: inline;
    margin: 0 5px;
  }
  
  
  /* footer social icons */
  
  .social-network a.icoFacebook:hover {
    background-color: #3B5998;
  }
  
  .social-network a.icoLinkedin:hover {
    background-color: #007bb7;
  }
  
  .social-network a.icoFacebook:hover i,
  .social-network a.icoLinkedin:hover i {
    color: #fff;
  }
  
  .social-network a.socialIcon:hover,
  .socialHoverClass {
    color: #44BCDD;
  }
  
  .social-circle li a {
    display: inline-block;
    position: relative;
    margin: 0 auto 0 auto;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    text-align: center;
    width: 30px;
    height: 30px;
    font-size: 15px;
  }
  
  .social-circle li i {
    margin: 0;
    line-height: 30px;
    text-align: center;
  }
  
  .social-circle li a:hover i,
  .triggeredHover {
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -ms--transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    -ms-transition: all 0.2s;
    transition: all 0.2s;
  }
  
  .social-circle i {
    color: #595959;
    -webkit-transition: all 0.8s;
    -moz-transition: all 0.8s;
    -o-transition: all 0.8s;
    -ms-transition: all 0.8s;
    transition: all 0.8s;
  }
  
  .social-network a {
    background-color: #F9F9F9;
  }

  @media only screen and (max-width: 500px) {
    
    body {
        grid-template-areas: 
            "header"
            "footer"
            "body";
    }

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
              <a class="nav-link" href="<?php echo base_url('Controller/home'); ?>">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">SERVICE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="aboutus.html">ABOUT US</a>
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

    <!-- pembatas navbar -->

    <!-- Halaman about us -->
    <div class="wrapper">
        <section id="aboutus">
            <div class="kolom">
                <h2>About Us</h2>
                <p>Kami adalah website yang memberikan sarana dan komunikasi antara dokter hewan dan pet lovers.</p>
            </div>
            <img src="../../images/au1.png" style="margin-top: 20px;"/>
        </section>

        <section id="visi">
            <img src="../../images/au2.png"/>
            <div class="kolom">
                <h2>Visi</h2>
                <p>Memberikan pelayanan yang terbaik untuk hewan kesayangan Anda</p>
            </div>
        </section>

        <section id="misi">
            <div class="kolom-misi">
                <h2>Misi</h2>
                <ul style="list-style-image: url(../images/list.png)">
                <li>Menyediakan layanan konsultasi</li>
                <li>Menyediakan layanan order obat</li>
                <li>Menyediakan layanan pickup dan delivery</li>
            </div>
        </section>

        <!-- untuk card what client say -->
        <h2 style="text-align:center;">What Our Client Say</h2>
        <section id="klien">
        <div class="container">
            <div class="card">
               <div class="head-card">
                <img src="../../images/a1.jpg" alt="">
               </div>
               <div class="body-card">
                <h1>Fionn Norris</h1>
                <p>Pelayanan sangat baik dan fast respon</p>
               </div>
          </div>
          <div class="card">
             <div class="head-card">
                 <img src="../../images/a2.jpg" alt="">
             </div>
             <div class="body-card">
              <h1>Bette D. Finch</h1>
              <p>Pelayanan sangat memuaskan</p>
             </div>
          </div>	
       </div>
        </section>

        <!-- BAGIAN OUR TEAM -->
        <section id="ourteam">
            <div class="tengah">
                <div class="kolom-team">
                    <h2>Our Team</h2>
                </div>

                <div class="team-list">
                    <div class="kartu-team">
                        <img src="../../images/vina.png"/>
                        <p>Anatasha Eka S.</p>
                    </div>
                    <div class="kartu-team">
                        <img src="../../images/bugi.jpg"/>
                        <p>Bugi Pradana</p>
                    </div>
                    <div class="kartu-team">
                        <img src="../../images/gita.jpg"/>
                        <p>Gitahayu Pradipta</p>
                    </div>
                    <div class="kartu-team">
                        <img src="../../images/gusti.jpg"/>
                        <p>Gusti Agzalia</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN CONTACT US -->
        <section id="contactus">
            <img src="../../images/au3.png" style="margin-top: 50px; margin-bottom: 50px;"/>
            <div class="kolom">
                <h2>Contact Us</h2>
                <p>Silahkan konsultasi pada kami</p>
                <!-- SAMBUNG KE SERVICE -->
                <a href="" class="tbl-biru">Consult Now</a>
            </div>
        </section>
    </div>
    
</body>
</html>