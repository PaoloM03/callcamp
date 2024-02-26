<?php session_start() ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callcamp</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="modal fade text-center" id="modal-registrati" aria-labelledby="modal-registrati-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h3 class="modal-title text-white fw-bold" id="modal-registrati-label" style="font-family: 'Comic Sans MS'">CALLCAMP</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div>
                        <h5 style="font-family: 'Helvetica'">Compila i campi per la registrazione</h5>
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
                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#modal-registrati">Non sei registrato? Registrati!</button>
                    </div>
                    <div class="mt-3 mb-2">
                        <button class="btn btn-success fw-bold py-1 px-5"><h5 class="fw-bold pt-1">LOGIN</h5></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        const modalRegistrati= document.getElementById("modal-registrati")
        var modal = new bootstrap.Modal(modalRegistrati, {
        keyboard: false
        });
        modal.show();
    </script>
    
    </body>
</html>