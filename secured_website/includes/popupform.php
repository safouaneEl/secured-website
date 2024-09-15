<?php
session_start();
?>
<!-- popup form css -->
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    
    * {
        box-sizing: border-box;
    }
    
    /* Button used to open the contact form - fixed */
    .open-button {
        background-color: #2878EB;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 63px;
        right: 28px;
        width: 280px;
        z-index: 99;
    }
    
    /* The popup form (hidden) */
    .form-popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999; 
        justify-content: center;
        align-items: center;
    }
    
    .form-container {
        position: relative;
        max-width: 9900px; 
        padding: 30px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0 40px 45px rgba(0, 0, 0, 0.5);
        display: flex;
        flex-direction: column;
        gap: 20px;
        z-index: 10000; 
    }
    
    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 30px;
        color: #000;
        cursor: pointer;
        background-color: transparent;
        border: none;
        z-index: 10001; 
    }
    
    .close-button:hover {
        color: red;
    }
    
    .form-group {
        display: flex;
        justify-content: space-between;
        gap: 20px; 
    }
    
    .form-column {
        flex: 1;
    }
    
    .form-container input[type=text],
    .form-container input[type=email],
    .form-container textarea {
        width: 100%;
        padding: 15px;
        margin: 5px 0;
        border: none;
        background: #f1f1f1;
    }
    
    textarea {
        height: 100px; 
    }
    
    .form-container .btn {
        background-color: #2878EB;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-top: 5px;
    }
    
    .form-container .cancel {
        background-color: #F14D5D;
    }
    
    
    
</style>
    
<!-- Popup form -->
<div class="form-popup" id="myForm">
    <form action="singup.php" class="form-container" method="post">
        <h1>Obtenir un devis</h1>
        <span class="close-button" onclick="closeForm()">&times;</span>

        <div class="form-group">
            <div class="form-column">
                <label for="nom"><b>Nom Complet</b></label>
                <input type="text" placeholder="Entrez votre nom (Obligatoire)" name="popupnom" required>
            </div>
            <div class="form-column">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Entrez votre email (Obligatoire)" name="popupemail" required>
            </div>
        </div>

        <div class="form-group">
            <div class="form-column">
                <label for="tel"><b>Numero</b></label>
                <input type="text" placeholder="Entrez votre numero" name="popuptel" >
            </div>
            <div class="form-column">
                <label for="pays"><b>Pays</b></label>
                <input type="text" placeholder="Entrez votre pays" name="popuppays" >
            </div>
        </div>

        <div class="form-group">
            <div class="form-column">
                <label for="projet"><b>Type de Projet</b></label>
                <input type="text" placeholder="Entrez le type de projet (Obligatoire)" name="popupprojet" required>
            </div>
            <div class="form-column">
                <label for="budget"><b>Budget</b></label>
                <input type="text" placeholder="Entrez votre budget (Obligatoire)" name="popupbudget" required>
            </div>
        </div>

        <label for="detail"><b>Détails du Projet</b></label>
        <textarea placeholder="Entrez les détails de votre projet" name="popupdetail" ></textarea>

        <button type="submit" class="btn" name="popupbutton" >Obtenir</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
    </form>
</div>

 
<!-- merci Popup -->
<div class="form-popup" id="mercipopup" style="display : none;">
    <div class="form-container">
        <h2>Merci pour votre confiance!</h2>
        <p>Votre proposition est prise en considération, vous serez contacté très prochainement par notre équipe!</p>
        <button class="btn" onclick="closemercipopup()">Fermer</button>
    </div>
</div>

<div class="form-popup" id="resseyerformpopup" style="display: none;">
    <div class="form-container">
        <h2>Erreur!</h2>
        <p>Il y a une certaine erreur, n'hésitez pas à remplir le fromulaire une autre fois s'il vous plaît.</p>
        <button class="btn" onclick="closeresseyerformpopup()">Fermer</button>
    </div>
</div>
<!-- Popup form JS -->
<script>
    
    function openForm() {
        document.getElementById("myForm").style.display = "flex";
    }

    
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }

    
    function mercipopup() {
        document.getElementById("mercipopup").style.display = "flex";
    }

    
    function closemercipopup() {
        document.getElementById("mercipopup").style.display = "none";
    }

    function resseyerformpopup() {
        document.getElementById("myForm").style.display = "none";
        document.getElementById("resseyerformpopup").style.display = "flex";
    }

    
    function closeresseyerformpopup() {
        document.getElementById("resseyerformpopup").style.display = "none";
    }
</script>

<script>
window.onload = function() {
        <?php
        if (isset($_SESSION['form_success'])) {
            if ($_SESSION['form_success']) {
                echo'mercipopup();'; 
            } else {
                echo'resseyerformpopup();';
            }
            unset($_SESSION['form_success']); 
        }
        ?>
    }
</script>





