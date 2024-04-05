<?php
include_once "funzioni.php";
?>
<div class="container pt-4">
    <header><h1 style="font-family: 'Comic Sans MS'" class="text-success fw-bold">Benvenuto in Callcamp!</h1>
        <h4 style="font-family: 'Comic Sans MS'">Benvenuto nel nostro sito di prenotazione di campi sportivi, il tuo portale online per organizzare partite senza preoccupazioni. Disponiamo di campi da calcio, pallavolo, tennis e basket. Mettiamo a tua disposizione uno strumento semplice e intuitivo per prenotare il campo perfetto per le tue esigenze. <span class="text-success fw-bold">GIOCA CON NOI!</span></h4>
        
    </header>
    <div id="carouselSport" class="carousel slide" data-bs-ride="carousel">
    <?php
      btn_carousel();
    ?>
        <div class="carousel-inner">
<?php
carousel_campi();

?>
  </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSport" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Precedente</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselSport" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Successivo</span>
    </button>
    </div>
</div>