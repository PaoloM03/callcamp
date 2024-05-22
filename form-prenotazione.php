<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenotazione Campi Sportivi</title>
</head>
<body>
    <div class ="container px-5 pt-3">
        <div class = "row">
            <div class ="card col-5 px-5 py-2">
                <div class = "py-2">
                    <span class = "h2 text-success fw-bold" style="font-family: 'Comic Sans MS'">Prenota il tuo campo</span>
                </div>
                <form action="processa_prenotazione.php" method="post">
                    <label for="sport">Scegli lo sport:</label>
                    <?php
                    campo_prenotabile();
                    ?>
                    <br><br>
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data">
                    <br><br>
                    <label for="orario">Orario:</label>
                    <input type="time" id="orario" name="orario">
                    <br><br>
                    <label for="durata">Durata (ore):</label>
                    <input type="number" id="durata" name="durata" min="1" max="2" step="1" value="1">
                    <br><br>
                    <label for="numero_persone">Numero di persone:</label>
                    <input type="number" id="numero_persone" name="numero_persone" min="1" value="1">
                    <br><br>
                    <?php
                    ?>
                    <aside>
                        <h5>Prezzo Finale:</h5>
                        <span id="prezzo_finale">0</span>€
                    </aside>
                    <div class = "pt-2">
                        <button class="btn btn-success fw-bold py-1 px-3" id="btn-login"><h5 class="fw-bold pt-1">PRENOTA</h5></button>
                    </div>
                </form>
            </div>
            <div class = "col-7">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <?php
                                dettagli_capienza_costo_campi();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <script src="./script.js"></script>
        </div>
    </div>
</body>
