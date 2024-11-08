<?php
include "app/config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include "views/layouts/head.php" ?>
    <style>
      html, body, .intro {
        height: 100%;
        margin: 0;
        font-family: 'Arial', sans-serif;
      }

      @media (min-width: 550px) and (max-width: 750px) {
        html, body, .intro {
          height: 550px;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
        html, body, .intro {
          height: 550px;
        }
      }

      a.link {
        font-size: 0.875rem;
        color: #6582B0;
        text-decoration: none;
      }

      a.link:hover, a.link:active {
        color: #426193;
      }

      .bg-image {
        background-image: url('https://assets.st-note.com/img/1595503546196-asVMNmt4to.jpg?width=800&dpr=2'); 
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        height: 100%;
        border-radius: 1rem;
      }
      
      .card {
        border-radius: 1.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
      }

      .btn-primary {
        background-color: #92aad0;
        border-color: #92aad0;
      }

      .btn-primary:hover {
        background-color: #7b93bb;
        border-color: #7b93bb;
      }

      .form-control {
        border-radius: 1.25rem;
      }

      .form-label {
        font-size: 1rem;
        font-weight: 500;
        color: #4f4f4f;
      }

      .intro-section {
        padding-top: 10%;
      }

      .container {
        max-width: 900px;
      }

      /* Animaciones */
      @keyframes floating {
        0% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0); }
      }
      
      .img-fluid {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-top-left-radius: 1rem;
        border-bottom-left-radius: 1rem;
      }

      .card-body {
        border-top-right-radius: 1rem;
        border-bottom-right-radius: 1rem;
      }

      .bg-image {
        animation: floating 6s ease-in-out infinite;
      }
    </style>
  </head>
  <body>
   
      <div class="bg-image h-100">
        <div class="mask d-flex align-items-center h-100">
          <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
              <div class="col-12 col-lg-9 col-xl-8">
                <div class="card">
                  <div class="row g-0">
                    <div class="col-md-4 d-none d-md-block">
                      <img
                        src="https://i.pinimg.com/564x/77/b5/6b/77b56bca42f340647e81acda5bddbf1c.jpg"
                        alt="login form"
                        class="img-fluid"
                      />
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                      <div class="card-body py-5 px-4 p-md-5">

                        <form action="">
                          <h4 class="fw-bold mb-4" style="color: #92aad0;">Log in to your account</h4>

                          <div class="form-outline mb-4">
                            <input type="email" id="form2Example1" class="form-control" />
                            <label class="form-label" for="form2Example1">Email address</label>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="password" id="form2Example2" class="form-control" />
                            <label class="form-label" for="form2Example2">Password</label>
                          </div>

                          <div class="d-flex justify-content-end pt-1 mb-4">
                            <button class="btn btn-primary btn-rounded" type="button">Log in</button>
                          </div>
                          <hr>
                          <a class="link float-end" href="#!">Forgot password? Click here.</a>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  

    <?php include "views/layouts/scripts.php" ?>
  </body>
</html>