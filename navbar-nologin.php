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
          <button class="btn btn-success fw-bold" data-bs-toggle="modal" data-bs-target="#modal-login">Accedi/Registrati</button>
          <div class="modal fade text-center" id="modal-login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header bg-success">
                  <h3 class="modal-title text-white fw-bold" id="staticBackdropLabel" style="font-family: 'Comic Sans MS'">CALLCAMP</h3>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-center">
                <div>
                  <h5 style="font-family: 'Helvetica'">Effettua il Login</h5>
                </div> 
                <div class="row mt-4 pt-1">
                  <div class="form-group d-flex fw-bold">
                    <label for="email" class="form-label ms-3 me-4 pe-2 ps-1">EMAIL:</label>
                    <input type="email" id="email" name="email" class="form-control" maxlenght="255" required>
                  </div>
                </div>
                <div class="row mt-4 pt-2">
                  <div class="form-group d-flex fw-bold">
                    <label for="oggetto" class="form-label ms-1 me-2">PASSWORD:</label>
                    <input type="text" id="password" name="password" class="form-control" maxlenght="100" required>
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-center">
                <div>
                  <a href="#" class="link-primary">Password dimenticata? Recupera password</a><br>
                  <a href="#" class="link-secondary">Non sei registrato? Registrati!</a>
                </div>
                <div class="mt-3 mb-2">
                    <button class="btn btn-success fw-bold py-1 px-5"><h5 class="fw-bold pt-1">LOGIN</h5></button>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>