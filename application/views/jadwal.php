<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Rubik&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  </head>
  <body>
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


    <!-- hero -->
    <div class="position-relative container-fluid" style="padding: 0;">
        <img src="../../images/Jadwal-Hero-1.png" style="width: inherit;">
        <h2 class="title">Doctors<br>Schedule</h2>
    </div>
    <!-- menu -->
    
    <div id="menu" class="container">
        <div class="row">
          <div class="col-3">
            <div class="schedule-head">
                <img src="../../images/avatar-male.png" alt="" style="height: 200px;">
                <h4>Drh. Hendra</h4>
            </div>
          </div>
          <div class="col-9">
            <div class="row">
                <div class="schedule-desc">
                    <div>
                        <h5>Kamis</h5>
                        <p>10:00 - 13:30</p>
                    </div>
                    <div>
                        <h5>Jumat</h5>
                        <p>14:30 - 17:00</p>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

    <!-- footer -->

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
  <style>
body {
    background-color: #FFFDF2;
}

h2 {
    font-family: 'Rubik', sans-serif;
    font-weight: bolder;
    font-size: 3.5rem;
}

h3 {
    font-family: 'Pangolin', cursive;
    font-size: 3.5rem;
}

h4 {
    font-family: 'Rubik', sans-serif;
    font-weight: bold;
    font-size: 2rem;
}

/* jadwal.html */

.title {
    position: absolute;
    top: 250px;
    right: 250px;
}

.schedule-head {
    margin: 40px auto;
    text-align: center;
}

.schedule-head h4 {
    margin-top: 20px;
}

.schedule-desc {
    margin: 40px auto;
    padding-left: 40px;
}

.schedule-desc h5 {
    font-family: 'Rubik', sans-serif;
    font-weight: bold;
    font-size: 1.5rem;
    padding-top: 8px;
}

.schedule-desc p {
    font-family: 'Rubik', sans-serif;
    font-size: 1rem;
}
  </style>
</html>