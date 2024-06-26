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
  <?php include_once "navbar-nologin.php";?>
  <div class="rounded-5 border border-5 mt-3 mx-5" style="background-color: lightgreen">
    <div class="row">
       <div class="col">
          <img src="./img/chiodo.png" alt="chiodo post-it" width="60" height="40" class="m-0 pt-1">
       </div>
       <div class="col text-end">
          <img src="./img/chiodo1.png" alt="chiodo post-it" width="60" height="40" class="m-0 pt-1">
       </div>
    </div>
      <div class="container pt-1 px-4 pb-4">
        <h2 style="font-family: 'Comic Sans MS'">SELEZIONA IL TUO SPORT PREFERITO E TI COMPARIRA' IL CAMPO AD ESSO CORRISPONDENTE, CON TUTTE LE INFORMAZIONI UTILI ALLEGATE. COMPILA IL FORM PER PRENOTARE IL CAMPO DA TE SELEZIONATO, INSERENDO IL GIORNO, LA FASCIA ORARIA E IL NUMERO DI PERSONE CHE PARTECIPERANNO. TI COMPARIRA' AUTOMATICAMENTE IL PREZZO COMPLESSIVO PER POTER USUFRUIRE DELLA PRENOTAZIONE E, SOPRATTUTTO, SE IL CAMPO SELEZIONATO E' DISPONIBILE PER LA DATA E L'ORARIO SCELTO. </h2>
        <h2 style="font-family: 'Comic Sans MS'">PER ALTRE EVENTUALI INFORMAZIONI, PUOI CONTATTARCI DIRETTAMENTE VISITANDO LA PAGINA <a href="./contatti.php" style="text-decoration: none">"CONTATTI"</a>.</h2>
        <div class="text-end">
          <h2 style="font-family: 'Comic Sans MS'" class="fw-bold">GIOCA CON NOI!</h2>
        </div>
      </div>
  </div>
  <?php include_once "footer.php";?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>