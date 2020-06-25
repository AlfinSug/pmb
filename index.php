<!doctype html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
  <img src="assets/kiri3.png" alt="" style="position: fixed;bottom: 0;	left: 0;	height: 100%;	z-index: -1;">
    <div class="container">
      <div class="row" style="margin-top: 40px">
        <div class="col">
          <img src="assets/mid.svg" alt="" class="w-100" style="margin-top: 80px; margin-Left: 180px;">
        </div>
        <div class="col mt-4" style="margin-left: 200px; ">
          <div class="d-flex justify-content-center">
            <ul class="nav" role="tablist">
              <li class="nav-item">
                <a href="#step-1" id="step1-tab" class="nav-link active" aria-selected="true" data-toggle="tab" role="tab" style="margin-left: -25px"><h5>MAHASISWA</h5></a>
              </li>
              <li class="nav-item">
                <a href="#step-2" id="step2-tab" class="nav-link" aria-selected="false" data-toggle="tab" role="tab" style="margin-left: -10px"><h5>ADMIN</h5></a>
              </li>
              <div class="panel rounded">
              </div>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="step-1" area-labelledby="step1-tab" role="tab-panel">
              <div class="innerContent">
                <div class="login-content justify-content-center">
                  <form action="#">
                    <img src="assets/mhs.svg">
                    <h2>WELCOME</h2>
                    <div class="input-div one">
                      <div class="i">
                          <i class="fas fa-user"></i>
                      </div>
                      <div class="div">
                          <h5>NPM</h5>
                          <input type="text" class="input">
                      </div>
                    </div>
                    <div class="input-div pass">
                      <div class="i"> 
                          <i class="fas fa-lock"></i>
                      </div>
                      <div class="div">
                          <h5>Password</h5>
                          <input type="password" class="input">
                      </div>
                    </div>
                    <input type="submit" class="btn2" value="Login">
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="step-2" area-labelledby="step2-tab" role="tab-panel">
              <div class="innerContent">
                <div class="login-content justify-content-center">
                  <form action="#">
                    <img src="assets/adm.svg">
                    <h2>WELCOME</h2>
                    <div class="input-div one">
                      <div class="i">
                          <i class="fas fa-user"></i>
                      </div>
                      <div class="div">
                          <h5>Username</h5>
                          <input type="text" class="input">
                      </div>
                    </div>
                    <div class="input-div pass">
                      <div class="i"> 
                          <i class="fas fa-lock"></i>
                      </div>
                      <div class="div">
                          <h5>Password</h5>
                          <input type="password" class="input">
                      </div>
                    </div>
                    <input type="submit" class="btn2" value="Login">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: -200px; margin-left:-120px">
        <div class="col-3">
          <h4 class="font-weight-bold text-white">Bergabung bersama kami, Institut Teknologi Adhi Tama Surabaya. Penerima Anugerah Kampus Unggulan Jawa Timur!</h4>
        </div>
      </div>
      <div class="row" style="margin-left: 90px">
        <a href="#"><button type="button" class="btn btn-primary shadow font-text">Daftar Sekarang!</button></a>
      </div>
    </div>
    <!--  -->
    <!-- Optional JavaScript -->
    <!-- CDN JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>