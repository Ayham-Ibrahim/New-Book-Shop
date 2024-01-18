<?php
include "includes/DBConnection.php";
include 'includes/app-entry-point.php';
$search_query = isset($_GET['search_query']) ? $_GET['search_query'] : '';
?>

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
  <!--header start -->

  <header>
    <nav class="homnav navbar navbar-expand-lg fixed-top navbar-scroll" id="scroll-navbar" style="transition: all 0.3s ease-in-out;">
      <div class="container-fluid">
        <a class="navbar-brand me-2" href="">
          <h1 class="logo" style="color:black;font-size: 36px;font-weight: 600;font-family: initial;margin-left:20px;margin-top: 5px;"><img src="./siteimg/logo.png" alt="" width="60px">Book<span style="color: #089da1;">Shop</span></h1>
        </a>
        <!-- ------------------------------- -->
        <button class="navbar-toggler" type="button" onclick="myFunction()" data-mdb-toggle="collapse" data-mdb-target="#mytoggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-top: -16px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="27" height="31" fill="currentColor" class="bi bi-justify" viewBox="1 1 10 10">
            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
        <div class="collapse navbar-collapse" id="mytoggler">
          <ul class="navbar-nav home-link me-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#!">Home</a>
            </li>
            <?php
            $query = "SELECT name FROM category";
            $results = SQLQuery($query);
            ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <button class="dropdown-item" id="all-products">All</button>
                <?php foreach ($results as $category) : ?>
                  <button class="dropdown-item" id="<?php echo $category['name']; ?>"><?php echo $category['name']; ?></button>
                <?php endforeach; ?>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="">About-us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav d-flex flex-row">
            <a href="login.php" class="add-pro-btn" style="padding-left:10px;padding-right: 10px;">Sign in</a>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--header end   -->

  <!--home section start   -->
  <section class="home">
    <img class="background" src="./siteimg/about.png" alt="">
    <div class="row">

      <div class="col-4">
        <div class="main_tag">
            <h1>WELCOME TO<br><span>BOOK STORE</span></h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda molestias atque laborum 
                non fuga ex deserunt. Exercitationem velit ducimus praesentium, obcaecati hic voluptate id 
                tenetur fuga illum quidem omnis? Rerum?
            </p>
            <a href="./login.php" class="add-pro-btn main_btn">Discover More</a>
        </div>
      </div>
      <div class="col-8">
        <div class="main_img">
          <img src="./siteimg/table.png">
        </div>
    </div>
    </div>
  </section>
  <!--home section end   -->


  <!-- --------------------------show product to the user---------------------------------- -->
  <main class="user_product">
    <?php
    $row = SQLQuery("SELECT * FROM `product` ORDER BY `created_at` DESC LIMIT 21");
    ?>
    <div id="products-container" class="container text-center">

      <div class="row gy-5">
        <h3 class="mine fw-bold pb-3" style="letter-spacing: 2px;color: #089da1;">New Arrivals</h3>
        <?php foreach ($row as $prod) : ?>
          <div class="ProCol col-4" data-category="<?php echo $prod['category_name']; ?>">
            <div class="card" style="margin-bottom: 10px;">
              <div class="card-body">
                  <div class="pro-img-box">
                    <img class="w-100" src="includes\API\imgs\<?php echo $prod['image']; ?>" style="height: 300px;" alt="product-image">
                  </div>
              </div>
              <h5 class="card-title" style="margin-top: 10px;"><?php echo $prod['name']; ?></h5>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>

  <script>
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      var navbar = document.getElementById("scroll-navbar"); // Replace "yourNavbarId" with the actual ID of your navbar
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    }
    // Function to load products based on the selected category
    function loadProducts(category) {
      // Hide all products
      document.querySelectorAll('.ProCol').forEach(function(product) {
        product.style.display = 'none';
      });

      // Show products of the selected category or show all products
      if (category === 'all-products') {
        document.querySelectorAll('.ProCol').forEach(function(product) {
          product.style.display = 'block';
        });
      } else {
        document.querySelectorAll('.ProCol[data-category="' + category + '"]').forEach(function(product) {
          product.style.display = 'block';
        });
      }
    }
    // Event handler for category selection
    document.querySelectorAll('.dropdown-item').forEach(function(item) {
      item.addEventListener('click', function() {
        var category = this.id;
        loadProducts(category);
      });
    });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <?php echo HomeFooter(); ?>
  <?php echo Footer(); ?>