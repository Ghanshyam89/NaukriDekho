<?php
  // session_start();
  // if (isset($_SESSION["email"])) {
  //   $email = $_SESSION["email"];
  //   session_write_close();
  // } else {
  //   echo "<script>alert('Please Login!')</script>";
  //   session_unset();
  //   session_write_close();
  //   $url = "./";
  //   header("Location: $url");
  // }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NaukriDekho - A Job Portal for Daily wages workers</title>
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />

    <!-- Font Styles -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap"
      rel="stylesheet"
    />

    <!-- 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script> -->

    <!-- Styles.css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <div class="super-container">
      <div class="in-super-container">
        <div class="container">
          <div class="header">
            <!-- Navbar -->
            <nav
              class="
                mb-1
                navbar navbar-expand-lg navbar-dark
                orange
                lighten-1
                sticky-top
                justify-content-between
              "
            >
              <div class="container-fluid">
                <a class="navbar-brand nav-flex-icons" href="#">
                  <img
                    id="nav-logo"
                    src="./Images/nlogo1.png"
                    alt="NaukriDekho"
                  />
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent-555"
                  aria-controls="navbarSupportedContent-555"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div
                  class="collapse navbar-collapse"
                  id="navbarSupportedContent-555"
                >
                  <!-- Search box -->
                  <!-- <form class="form-inline" id="search-box">
                    <div class="dm-form my-0">
                      <input
                        class="form-control mr-sm-2"
                        type="text"
                        placeholder="Search"
                        aria-label="Search"
                      />
                    </div>
                  </form> -->
                  <!-- Search Box End -->

                  <div style="margin-left: 555px;"></div>

                  <ul
                    class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end"
                  >
                    <li class="nav-item">
                      <a id="custom-nav" class="nav-link active" href="./"
                        ><strong class="btn btn-outline-warning">Home</strong>
                        <span class="sr-only"></span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a id="custom-nav" class="nav-link" href="#about"
                        ><strong class="btn btn-outline-warning">About Us</strong></a
                      >
                    </li>
                    <!-- <li class="nav-item">
                      <a id="custom-nav" class="nav-link" href="fregister.html"
                        ><strong class="btn btn-outline-warning">Register</strong></a
                      >
                    </li> -->

                    <li class="nav-item" float-right>
                      <form action="./PDO/logout.php" method="post">
                        <div id="custom-nav" class="nav-link">
                      <input class="btn btn-outline-warning" type="submit" value="Logout"
                        ></input></div>
                        </form>
                    </li>

                    <li class="nav-item avatar mx-4">
                      <abbr title="Profile"><button
                        class="btn btn-outline-warning"
                        style="
                          border-radius: 55%;
                          margin-top: 6px;
                          margin-left: 30px;
                        "
                      >
                        <a class="nav-link p-0" href="fprofile.php">
                          <img
                            src="Images/avatar.png"
                            class="rounded-circle z-depth-0"
                            alt="avatar image"
                            style="height: 4vh"
                          />
                        </a>
                      </button></abbr>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!--/.Navbar -->
          </div>
          <!--header end-->


        </div>
        <!--container end-->
      </div>
      <!-- End In Super container -->
          
      <!-- Apply Job Start -->

      <section style="height: 100vh!important; background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg')">
        <div class="container h-50">
          <div class="row d-flex justify-content-center align-items-center h-50">
            <div class="col-xl-9">
              <div style="border-radius: 15px; margin-top: 10px;" class="card bg-dark">
                <div class="card-body">
                    <h1 class="text-white align-items-center ps-4 mt-3 mb-2">Apply for a job</h1>
                <form name="applyform" action="./PDO/apply.php" method="POST" onsubmit="validate_form()"><!--ge-->
                  <div class="row align-items-center pt-4">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0 text-light">Full name</h6>
      
                    </div>
                    <div class="col-md-9 pe-5" >
                      <div class="row mx-1">
                      <input  id="firstName" name="firstName" type="text" class="validations form-control form-control-lg w-50 col-md-6" class="validations m-2" maxlength="30" placeholder="First Name" required/>  <!-- ge -->
                      <input  id="lastName" name="lastName" type="text" class="validations form-control form-control-lg w-50 col-md-6" class="validations" maxlength="30" placeholder="Last Name" required/>
                      </div>
      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0 text-light ">Email address</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input id="email" name="emailAddress" type="email" class="validations form-control form-control-lg" placeholder="example@example.com" />
      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0 text-light">About You</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <textarea class="form-control" name="owndetail" id="owndetail" rows="3" placeholder="Message sent to the employer"></textarea>
      
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0 text-light">Phone  No.</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input id="phoneno" name="phoneno" class="form-control validations" id="formFileLg" type="text"/>
                    </div>
                  </div>
      
                  <hr class="mx-n3">
      
                  <div class="row align-items-center">
                    <div class="col-md-3 ps-5">
      
                      <h6 class="mb-0 text-light ">Job Id</h6>
      
                    </div>
                    <div class="col-md-9 pe-5">
      
                      <input id="job_id" name="job_id" type="text" class="validations form-control form-control-lg" placeholder="Enter the Job Id Associated with Job title." />
      
                    </div>
                  </div>

                  <hr class="mx-n3">
                  
                  <div class="px-4 pt-5 validations">
                    <!-- <button type="submit" class="btn btn-warning btn-lg">Send application</button> -->
                    <input class="btn btn-warning btn-lg px-4" id="submit-btn" type="submit" value="Send application" />
                  </div>
                </form>
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </section>
    

      <!-- Apply Job End -->
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-3 footer" id="about">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-0">
      <li class="list-inline-item">
        <h5 class="mt-0 mb-3 text-light">Register for free</h5>
      </li><br>
      <li class="list-inline-item">
        <a href="fregister.html" class="btn btn-outline-light">Sign up!</a>
      </li>
    </ul>
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-1 text-light">© 2021 Copyright:
    <a href="https://NaukriDekho.me"> NaukriDekho.me</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    </div>
    <!--super-contaIner end-->
 

    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="fapplyforjob.js"></script>
  </body>
</html>
