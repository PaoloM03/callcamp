<?php session_start() ?>
<?php 
    $connessione = new mysqli("localhost", "root", "", "callcamp");
    if($connessione->connect_error) 
    {echo $connessione->connect_error;} 
    else
    //{$dati = $connessione->query("SELECT id_utente, nome, cognome, email, cellulare FROM `utenti` WHERE admin=1;") ->fetch_all(); var_dump($dati);}7
    //insert
    {
        // $sql ="INSERT INTO utenti (nome, cognome, email, cellulare) VALUES
        // (?, ?, ?, ?)
        // ";
        // $statement =$connessione->prepare($sql);
        // $nome = "Leo";
        // $cognome = "Fiano";
        // $email ="leofiano@gmoail.com";
        // $cellulare = "3701232567";
        // $statement->bind_param("ssss", $nome, $cognome, $email, $cellulare);
        // if($statement->execute() === true){
        //     echo "Persona inserita correttamente";
        // }else{
        //     echo "Errore durante l'inserimento: $connessione->error";
        // }
        // $statement->close();
        
    }
    $nomi=["Paolo", "Luigi", "Anna"];
    foreach ($nomi as $nome) {
        if($nome=="Luigi"){
            echo "Ciao da Luigi";
        }else{
            echo "Ciao da persona che non è Luigi";
        }
    }

    for ($i = 0; $i < count($nomi); $i++) {
        $nome = $nomi[$i];
        
    }

    {
        $macchine = array(0 => "Nissan", 1 => "Mercedes", 2 => "Pegeout");

        var_dump($macchine);
    }
    {

        if((5 > 3) && (5 === "5")) {
            echo "Cinque è minore di tre";
        } else if(5 > 4) {
            echo "Cinque è maggiore di quattro";
        }
    }
    {
        $luce;
        if($luce) {
            echo "La luce è accesa";
        } else if(!$luce) {
            echo "La luce è spenta";
        }
    }
    // {
    $campo = "calcio";
    //     if($campo == "basket") {
    //         echo "Il campo è da basket";
    //     } else if($campo == "calcio") {
    //         echo "Il campo è da calcio";    
    //     } else if($campo == "pallavolo") {
    //         echo "il campo è da pallavolo";
    //     } else if($campo == "tennis") {
    //         echo "il campo è da tennis";
    //     } else {
    //         echo "il campo non è fra quelli disponibili";
    //     }

    // }
    // {
    //     switch ($campo) {
    //         case "basket":
    //             echo "Il campo è da basket";
    //             break;
    //         case "calcio":
    //             echo "Il campo è da calcio";
    //             break;
    //         case "pallavolo":
    //             echo "Il campo è da pallavolo";
    //             break;
    //         case "tennis":
    //             echo "Il campo è da tennis";
    //             break;
    //         default:
    //             echo "il campo non è fra quelli disponibili";
    //     }
    // }
    // $booleana = true;
    // while ($booleana == true){
    //     echo "ciao";
    //     $booleana = false;
    // }
    $eta = 16;
    do 
    {echo "eccoti il drink che mi hai chiesto";}
    while ($eta >= 18);