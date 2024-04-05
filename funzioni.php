<?php

function elenco_campi(){
    $connessione = new mysqli("localhost", "root", "", "callcamp");
    if($connessione->connect_error) 
    {echo $connessione->connect_error;} 
    else
    {
        $sql ="SELECT nome, descrizione, url_immagine, tipo FROM campi";
        $connessione->set_charset("utf8");
        $risultati = $connessione->query($sql)->fetch_all(MYSQLI_ASSOC);
        $connessione->close();
        foreach ($risultati as $risultato){
            $nome_campo = $risultato["nome"];
            $descrizione_campo = $risultato["descrizione"];
            $url_immagine = $risultato["url_immagine"];
            $tipo_campo = $risultato["tipo"];
        echo "<div class=\"card col-6 pe-0 ps-0\" style=\"width: 40rem;\">
                <img src=\"$url_immagine\" class=\"card-img-top\" alt=\"campo $tipo_campo\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$nome_campo</h5>
                    <p class=\"card-text\">$descrizione_campo</p>
                </div>
            </div>
        ";
        }
    }
}
    function carousel_campi(){
        $connessione = new mysqli("localhost", "root", "", "callcamp");
        if($connessione->connect_error)
        {echo $connessione->connect_error;}
        else
        {
            $sql ="SELECT url_immagine, tipo FROM campi";
            $connessione->set_charset("utf8");
            $risultati = $connessione->query($sql)->fetch_all(MYSQLI_ASSOC);
            $connessione->close();
            $indice = 0;
            foreach ($risultati as $risultato){
                $url_immagine = $risultato["url_immagine"];
                $tipo_campo = $risultato["tipo"];
                $is_active ="";
                if($indice==0) {$is_active = "active";}
                echo "<div class=\"carousel-item $is_active\">
                <img src=\"$url_immagine\" class=\"d-block w-100\" alt=\"campo $tipo_campo\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h2 style=\"font-family: 'Comic Sans MS' ; font-size: 70px\" class=\"pb-5\">$tipo_campo</h2>
                </div>      
                </div>";
                $indice++;
            }
        }
    }
    function btn_carousel(){
        $connessione = new mysqli("localhost", "root", "", "callcamp");
        if($connessione->connect_error)
        {echo $connessione->connect_error;}
        else
        {
            $sql ="SELECT tipo FROM campi";
            $connessione->set_charset("utf8");
            $risultati = $connessione->query($sql)->fetch_all(MYSQLI_ASSOC);
            $connessione->close();
            $indice = 0;
            echo "<div class=\"carousel-indicators\">";
            foreach ($risultati as $risultato){
                $tipo_campo = $risultato["tipo"];
                $is_active ="";
                if($indice==0) {$is_active = "active";}
                echo"<button class=\"$is_active\" type=\"button\" data-bs-target=\"#carouselSport\" data-bs-slide-to=\"$indice\" aria-current=\"true\" aria-label=\"$tipo_campo\"></button>";
                $indice++;
            }
            echo "</div>";
        }
    }
?>