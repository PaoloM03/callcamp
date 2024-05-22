function aggiorna_prezzo() {
    
    var tipo_campo = document.getElementById("sport").value;
    var num_persone = document.getElementById("numero_persone").value;
    var tipo_operazione = "costo_persona";

    var data = new FormData();
    data.append("campo", tipo_campo);
    data.append("operazione", tipo_operazione);
    fetch("./server.php", {
        method: "post",
        body: data
    })
    .then(function(response){
        return response.text(); // trasforma la risposta JSON in una stringa di testo
    })
    .then(function (dato) {
        var prezzo_totale = dato * num_persone;
        document.getElementById("prezzo_finale").innerHTML = prezzo_totale;
    });

}

var sport = document.getElementById("sport");
sport.addEventListener("change", function(event) {
    aggiorna_prezzo()
});