<?php 
  session_start();
  if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
    session_write_close();
  } else {
    session_unset();
    session_write_close();
    $url = "./";
    // header("Location: $url");
  } 
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
                      <abbr title="Profile">
                      <button
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

          <div class="d-flex flex-row bd-highlight mb-4 justify-content-center apl-job-post">
            <div class="p-2 bd-highlight">
              <a href="fpost.php" class="btn btn-warning w-0" id="btn-post ">Post</a></div>
            <div></div>
              <div class="p-2 bd-highlight">
              <a href="#job" class="btn btn-warning w-0" id="btn-apply">Apply</a></div>
          </div>
 
          <!-- Card -->
          <div class="card bg-dark">
            <div class="card-header text-light text-center" id="job"><h1>Jobs</h1></div>
            
          <?php
            require_once('./config.php');
            $jobtitle = "";
            $address = "";
            $profession = "";
            $duration = "";
            $contactNo = "";
            $jobdetail = "";
            $budget = "";

            $sql = "SELECT * FROM job;";
            $stmtselect = $db->prepare($sql);
            $stmtselect->execute();
            $users = $stmtselect->fetchAll();

            foreach($users as $user)
            {
          ?>
            
            <div class="card bg-dark border-5 shadow-lg" id="card-down-margin">
              <div class="card-body">
                <h5 class="card-title text-light"><?php echo $user['jobtitle']; ?> - [<?php echo $user['job_id']; ?>]</h5>
                <p class="text-light"><strong>Profession: <?php echo $user['jobtitle']; ?></strong></p>
                <p class="card-text text-light">
                <?php echo $user['jobdetail']; ?>
                </p>
                <p class="text-light"><strong>Job Duration:</strong> <?php echo $user['jobduration']; ?></p>
                <p class="text-light"><strong>Budget:</strong> Rs. <?php echo $user['budget']; ?></p>
                <p class="text-light"><strong>Contact No. :</strong> <?php echo $user['contactNo']; ?></p>
                <a href="fapplyforjob.php" class="btn btn-warning">Apply</a>
              </div>
            </div>
          <!-- Card End --> 

          <?php
            }
          ?>
        
          <!-- Card 
          <div class="card bg-dark" id="card-down-margin">
            <div class="card-body">
              <h5 class="card-title text-light">Special title treatment</h5>
              <p class="card-text text-light">
                With supporting text below as a natural lead-in to additional
                content.
              </p>
              <a href="#" class="btn btn-warning">Apply</a>
            </div>
          </div>
           Card End -->
          
        </div>
        <!--container end-->
      </div>
      <!-- End In Super container -->

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
    <!--super-contaner end-->
 
    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>