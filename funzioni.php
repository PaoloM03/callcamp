<?php session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
function elenco_campi(){
    $connessione = new mysqli("localhost", "root", "", "callcamp"); //creazione connessione al database
    if($connessione->connect_error) //controllo connessione
    {echo $connessione->connect_error;} 
    else //altrimenti esegue questo pezzo di codice
    {
        $sql ="SELECT nome, descrizione, url_immagine, tipo FROM campi"; //query di selezione dei campi nella tabella campi
        $connessione->set_charset("utf8"); //imposta il formato utf8 sulla connessione
        $risultati = $connessione->query($sql)->fetch_all(MYSQLI_ASSOC);
        $connessione->close(); //chiusura connessione
        foreach ($risultati as $risultato){ //ciclo for per leggere tutti gli array presente in questo array multidimensionale
            /*sull'array associativo ciclato, vado ad estrarre ogni valore per ogni determinata chiave
            il testo presente nelle parentesi quadre è la chiave dell'array associativo*/
            $nome_campo = $risultato["nome"];
            $descrizione_campo = $risultato["descrizione"];
            $url_immagine = $risultato["url_immagine"];
            $tipo_campo = $risultato["tipo"];
            //
            //crea l'html per ogni campo ritrovato nel database
        echo "<div class=\"card col-6 pe-0 ps-0\" style=\"width: 40rem;\">
                <img src=\"$url_immagine\" class=\"card-img-top\" alt=\"campo $tipo_campo\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$nome_campo</h5>
                    <p class=\"card-text\">$descrizione_campo</p>
                </div>
            </div>
        ";//
        }
    }
}
    function carousel_campi(){
        $connessione = new mysqli("localhost", "root", "", "callcamp"); //creazione connessione al database
        if($connessione->connect_error)//controllo connessione
        {echo $connessione->connect_error;}
        else //altrimenti esegue questo pezzo di codice
        {
            $sql ="SELECT url_immagine, tipo FROM campi"; //query di selezione dei campi nella tabella campi
            $connessione->set_charset("utf8"); //imposta il formato utf8 sulla connessione
            $risultati = $connessione->query($sql)->fetch_all(MYSQLI_ASSOC);
            $connessione->close(); //chiusura connessione
            $indice = 0; //indice di partenza è uguale a 0
            foreach ($risultati as $risultato){ //ciclo for per leggere tutti gli array presente in questo array multidimensionale
                /*sull'array associativo ciclato, vado ad estrarre ogni valore per ogni determinata chiave
                il testo presente nelle parentesi quadre è la chiave dell'array associativo*/
                $url_immagine = $risultato["url_immagine"];
                $tipo_campo = $risultato["tipo"];
                $is_active ="";
                if($indice==0) {$is_active = "active";}
                //
                //crea l'html per ogni campo ritrovato nel database
                echo "<div class=\"carousel-item $is_active\">
                <img src=\"$url_immagine\" class=\"d-block w-100\" alt=\"campo $tipo_campo\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h2 style=\"font-family: 'Comic Sans MS' ; font-size: 70px\" class=\"pb-5\">$tipo_campo</h2>
                </div>      
                </div>";
                //
                $indice++; //incrementa l'indice di 1
            }
        }
    }
    function btn_carousel(){
        $connessione = new mysqli("localhost", "root", "", "callcamp"); //connessione al server 
        if($connessione->connect_error)
        {echo $connessione->connect_error;}
        else
        {
            $sql ="SELECT tipo FROM campi";
            //selezione campi carousel
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
    function login($email, $password){
        $connessione = new mysqli("localhost", "root", "", "callcamp"); //connessione al server 
        if($connessione->connect_error)
        {echo $connessione->connect_error;}
        else
        {
            $sql ="SELECT nome, cognome, email, password, admin FROM utenti WHERE email like ?";
            // prepared statement
            $statement = $connessione->prepare($sql);
            $statement->bind_param("s", $email);
            $statement->execute();
            $risultati = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
            $statement->close();
            //
            $connessione->close();
            $conteggio = count($risultati);
            if($conteggio == 1){
                foreach ($risultati as $risultato) {
                    $password_hash = $risultato["password"];
                    $is_password_uguale = password_verify($password, $password_hash);
                    if($is_password_uguale == true){
                        $_SESSION["utente"] = $risultato["nome"] . " " . $risultato["cognome"];
                        $_SESSION["email"] = $risultato["email"];
                        $_SESSION["admin"] = $risultato["admin"];
                        $_SESSION["logged"] = true;
                    }
                    else {
                        http_response_code(501);
                    }
                }
            }
            else 
            {
                http_response_code(500);
            }
        }
    }
    function campo_prenotabile() {
        $connessione = new mysqli("localhost", "root", "", "callcamp"); //connessione al server 
        if($connessione->connect_error)
        {echo $connessione->connect_error;}
        else
        {
            $sql ="SELECT tipo FROM campi";
            $risultati=$connessione->query($sql);//esecuzione della query con ritorno dei risultati sottoforma di oggetto, in caso la query sia eseguita con successo
            //in caso di fallimento ritornerà un false
            $risultati_array=$risultati->fetch_all(MYSQLI_ASSOC);
            echo "<select name=\"sport\" id=\"sport\">";
            foreach ($risultati_array as $risultato) {
                $tipo_campo = $risultato["tipo"];
                echo "<option value=\"$tipo_campo\">$tipo_campo</option>";
            }
            echo "</select>";
        }
    }
    function dettagli_capienza_costo_campi() {
        $connessione = new mysqli("localhost", "root", "", "callcamp"); //connessione al server 
        if($connessione->connect_error)
        {echo $connessione->connect_error;}
        else
        {
            $sql ="SELECT tipo, capienza, costo_persona FROM campi";
            $risultati=$connessione->query($sql);//esecuzione della query con ritorno dei risultati sottoforma di oggetto, in caso la query sia eseguita con successo
            //in caso di fallimento ritornerà un false
            $risultati_array=$risultati->fetch_all(MYSQLI_ASSOC);
            echo "<ul style=\"font-family: 'Comic Sans MS'\">";
            foreach ($risultati_array as $risultato) {
                $tipo_campo = $risultato["tipo"];
                $capienza = $risultato["capienza"];
                $costo_persona = $risultato["costo_persona"];
                echo "<li><strong>Campo da $tipo_campo:</strong><br>Capienza max = $capienza persone - Prezzo = $costo_persona euro a persona</li>";
            }
            echo "</ul>";
        }
    }
    function costo_persona_campo($tipo_campo) {
        $connessione = new mysqli("localhost", "root", "", "callcamp"); //connessione al server 
        if($connessione->connect_error)
        {echo $connessione->connect_error;}
        else
        {
            $sql ="SELECT costo_persona FROM campi WHERE tipo = ?";
            $statement = $connessione->prepare($sql);
            $statement->bind_param("s", $tipo_campo);
            $statement->execute();
            $risultati = $statement->get_result();
            $risultati_array=$risultati->fetch_all(MYSQLI_ASSOC);
            $costo_persona;
            foreach ($risultati_array as $risultato) {
                $costo_persona = $risultato["costo_persona"];
            }
            return $costo_persona;
        } 
    }
?>