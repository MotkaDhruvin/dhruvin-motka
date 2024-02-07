<nav class="navbar navbar-expand-lg text-uppercase fs-6 p-3 border-bottom fixed-top bg-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="home2.php"><img src="images/dhruvin.png" width="160" height="30" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1  gap-1 gap-md-5 pe-3  ">
            <li class="nav-item">
              <a class="nav-link" href="home2.php">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownPages" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">shop</a>
              <ul class="dropdown-menu list-unstyled border p-3" aria-labelledby="dropdownPages">
                <li>
                  <a href="chair.php" class="dropdown-item item-anchor">chair</a>
                </li>
                <li>
                  <a href="single-product.php" class="dropdown-item item-anchor">Single Product </a>
                </li>
                 
                <li>
                  <a href="coming-soon.php" class="dropdown-item item-anchor">Coming Soon </a>
                </li>
                <li>
                  <a href="cart.php" class="dropdown-item item-anchor">Cart </a>
                </li>
               
               
                <li>
                  <a href="wishlist.php" class="dropdown-item item-anchor">Wishlist   </a>
                  <!-- <span
                      class="badge bg-light text-dark ms-2">dhruvin</span> -->
                </li>
              
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">about</a>
            </li>
           
            <?php
            //  print_r($_COOKIE['email']);
              if(!isset($_COOKIE['email']))
              { ?>
 <li class="nav-item">
              <a class="nav-link" href="register">register</a>
            </li>

          <li class="nav-item"><a href="login" class="nav-link">Login</a></li>

              <?php } else { ?>

                <li class="nav-item"><a href="logout" class="nav-link">Logout</a></li>

                <?php }?>
                <!-- <li class="nav-item"><a href="logout" class="nav-link">Logout</a></li> -->


            
            <!-- <li class="nav-item">
              <a href="https://templatesjungle.gumroad.com/l/classi-html-template-for-furniture-shop" target="_blank" class="btn btn-outline-light rounded-pill" href="#">Get PRO</a>
            </li> -->
          </ul>
        </div>
      </div>
      <ul class="list-unstyled d-flex m-0">
        <li>
          <a href="wishlist.php" class="mx-2">
            <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#heart"></use></svg>
          </a>
        </li>
        <li>
          <a href="cart.php " class="mx-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
            <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#cart"></use></svg>
          </a>
        </li>
        <li class="search-box" class="mx-2">
          <a href="#search" class="search-button">
            <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#search"></use></svg>
          </a>
        </li>
      </ul>

    </div>
  </nav>