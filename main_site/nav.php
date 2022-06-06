
<main>
  <div class="d-flex flex-column  rounded-4  flex-shrink-0 p-3 bg-dark mt-3 ms-2 " style="width: 250px;">
     <img src="./assets/img/logo.png" alt="logo" width="225rem">
  
    <hr class="text-light">
    <ul class="nav flex-column mb-auto ">
      <li class="nav-link">
        <a href="dashboard.php" class=" nav-link text-white  
        <?php if ($page == 'dashboard') { echo "rounded-4 active bg-danger"; } ?>">
        <i class="fa-solid fa-gauge-high me-2"></i>
        Dashboard
        </a>
      </li>
      <li class="nav-link">
        <a href="orders.php" class="nav-link link-light <?php if ($page == 'orders') { echo "rounded-4 active bg-danger"; } ?>">
        <i class="fa-solid fa-table me-2"></i>
          Tables
        </a>
      </li>
      <li class="nav-link">
        <a href="#" class="nav-link link-light">
        <i class="fa-solid fa-money-bills me-2"></i>
          Billings
        </a>
      </li>
      <li class="nav-link">
        <a href="#" class="nav-link link-light">
        <i class="fa-brands fa-product-hunt me-2"></i>
          Products
        </a>
      </li>
      <li class="nav-link">
        <a href="#" class="nav-link link-light">
        <i class="fas fa-bell me-2"></i>
          Notifications
        </a>
      </li> 
    <hr class="text-light" style="margin-top:230px;">
      <li class="text-center nav-link">
        <a href="#" class="rounded-4 nav-link text-white active bg-danger">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        <strong>Log-out</strong>
        </a>
      </li>
    </ul>
    
  </div>

  
</main>