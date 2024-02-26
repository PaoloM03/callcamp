<div class="rounded-5 border border-5 mt-3 mx-5" style="background-color: lightgreen">
<div class="container">
    <form>
        <div class="pt-3">
            <h4 class="fw-bold">DESIDERI CONTATTARCI? MANDA UN MESSAGGIO COMPILANDO IL FORM QUI IN BASSO, INSERENDO I TUOI DATI, E TI INOLTREREMO UNA MAIL CON TUTTE LE INFORMAZIONE DA TE RICHIESTE.
        </div>  
            <div class="row mt-5">
                <div class="col form-group d-flex fw-bold ">
                    <label for="nome" class="form-label mx-4">NOME:</label> 
                    <input type="text" id="nome" name="nome" class="form-control" maxlenght="255" required><br>
                </div>
                <div class="col form-group d-flex fw-bold">
                    <label for="cognome" class="form-label mx-4">COGNOME:</label>
                    <input type="text" id="cognome" name="cognome" class="form-control" maxlenght="255" required>
                </div>
            </div>
            <div class="row mt-5">
                <div class="form-group d-flex fw-bold">
                    <label for="email" class="form-label mx-4">EMAIL:</label>
                    <input type="email" id="email" name="email" class="form-control" maxlenght="255" required>
                </div>
            </div>
            <div class="row mt-5">
                <div class="form-group d-flex fw-bold">
                <label for="oggetto" class="form-label ms-3 me-2">OGGETTO:</label>
                <input type="text" id="oggetto" name="oggetto" class="form-control" maxlenght="100" required>
                </div>
            </div>
            <div class="row mt-5 mb-4">
                <div class="form-group d-flex fw-bold">
                    <p><label for="messaggio" class="form-label mx-1">MESSAGGIO:</label></p>
                    <textarea id="messaggio" name="messaggio" class="form-control" rows="4" style="resize: none;" maxlenght="500" required></textarea>
                </div>
            </div>
            <div class="my-4 text-center">
                <button class="btn btn-success fw-bold py-1 px-5"><h5 class="fw-bold pt-1">INVIA</h5></button>
            </div>
    </form>
</div>
</div>