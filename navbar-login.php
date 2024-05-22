<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <div>
      <a style="font-family: 'Comic Sans MS'" class="navbar-brand bg-success px-3 py-1 rounded-2 text-white fw-bold" href="./Index.php">CALLCAMP</a>
    </div>
    <div id="navbarNav" class> 
      <ul class="navbar-nav">
        <li class="nav-item mx-5 align-items-center">
          <a class="nav-link fw-bold" aria-current="page" href="./nostri-centri.php">I NOSTRI CENTRI</a>
        </li>
        <li class="nav-item mx-5 align-items-center">
          <a class="nav-link fw-bold" href="./come-funziona.php">COME FUNZIONA</a>
        </li>
        <li class="nav-item mx-5 align-items-center">
          <a class="nav-link fw-bold" href="./contatti.php">CONTATTI</a>
        </li>
        <li class="nav-item mx-5 align-items-center">
          <a class="btn btn-outline-success fw-bold" href="./sei-gestore.php">Sei un Gestore?</a>
        </li>
        <li class="nav-item mx-4 align-items-center">
          <a href="#" class="btn btn-success fw-bold"><i class="bi bi-person-circle mx-1"></i>
            <?php
            echo $_SESSION["utente"];
            ?>
            <i class="bi bi-caret-down-fill mx-1"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>