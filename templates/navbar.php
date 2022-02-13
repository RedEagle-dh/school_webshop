<!-- Navigationsbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dave's Webshop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <!-- Dropdown Menü -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategorie
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!-- Kategorie aus Datebank -->
            <?php
            include_once 'functions\db_funktionen.php';
            $sql = "SELECT * FROM kategorien";
            $result = db_query($sql);

            while ($row = mysqli_fetch_row($result)) {
              echo "<li><a class=\"dropdown-item\" href=\"#\">$row[1]</a></li>";
            }




             ?>

            <!-- Dropdown Trennstrich -->
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <!-- Dropdown Menü Ende -->
        <li class="nav-item">
          <a class="nav-link disabled">Coming Soon</a>
        </li>
      </ul>
      <form class="d-flex" id="onetwo">
        <input class="form-control me-2" type="search" placeholder="Name/ArtNr" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Suche</button>
      </form>
      <style>
        #onetwo {
          margin-right: 10px;
        }
      </style>
      <form class="d-flex">

        <button class="btn btn-outline-success" type="submit">Warenkorb (<?= $cartItems ?>)</button>
      </form>

    </div>
  </div>
</nav>
<!-- Navigationsbar Ende -->
