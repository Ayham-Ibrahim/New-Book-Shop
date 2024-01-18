<?php

function Head($title)
{
  return <<<EOF
      <!DOCTYPE html>
          <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
              <link rel="stylesheet" href="./assets/css/style2.css">
              <title>$title | Programs</title>  
          </head>
          <body>
EOF;
}

function Footer()
{
  return <<<EOF
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
        </body>
        </html>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="assets\js\jsp.js"></script> 

        
EOF;
}
function HomeFooter()
{
  return <<<EOF
  <footer class="bg-black text-center text-white" style="margin-top:20px;">
          <!-- Grid container -->
        
          <!-- Grid container -->
          <section class="">
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3 pt-5">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <img src="./siteimg/logo.png" alt="" width="60px">
                  <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Book Shop
                  </h6>
                  <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum molestias perspiciatis culpa nobis.
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Products
                  </h6>
                  <p>
                    <a href="#!" class="text-reset">Books</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">scientific books</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">stories</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Novels</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    Useful links
                  </h6>
                  <p>
                    <a href="#!" class="text-reset">Pricing</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Settings</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Orders</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Help</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                  
                    <i class="fa fa-envelope me-3"></i>
                    info@example.com
                  </p>
                  <p><i class="fa fa-facebook me-3"></i>BookShop</p>
                  <p><i class="fa  fa-instagram me-3"></i>BookShop</p>
                </div>
                <!-- Grid column -->              
              </div>
              <!-- Grid row -->
            </div>
            <hr style = "border-bottom: 1px solid rgb(255 255 255);margin: 0px 39px;">
          </section>
          <!-- Copyright -->
          <div class="text-center p-3 bg-black" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <p class="text-white">Souher Zedan - Aya Abedo - Mariam Yaghi</p>
          </div>
          <!-- Copyright -->
  </footer>
EOF;
}
