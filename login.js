//apertura del modale login
const modalLogin= document.getElementById("modal-login")
var modal = new bootstrap.Modal(modalLogin, {
keyboard: false
});
modal.show()
// funzione per il login
function login() {
    let form = document.getElementById("form-login"); // ci ricaviamo il form di login
    let data = new FormData(form); // trasformiamo il form da HTML in un oggetto JavaScript contenente i dati
    data.append("operazione", "login"); // aggiungiamo ai dati già presenti nel form il tipo di operazione che stiamo effettuando
    fetch("./server.php", { // effettuiamo sul server l'invio dei dati in POST
        method:"post",
        body: data // questi sono i dati recuperati e inviati al server
    }).then(function(response){
        var esito = response.status;
        switch(esito){
            case 200:
                window.location.href = "index.php";
                break
            case 500:
                alert("utente non registrato");
                break
            case 501:
                alert("la password inserita nomn è corretta");
                break
        }
    })
}
var btn_login = document.getElementById("btn-login");
btn_login.addEventListener("click", function() {
    login();
})