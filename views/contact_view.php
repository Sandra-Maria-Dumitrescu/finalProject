<h1>Unde ne pute&#355;i g&#259;si</h1><br>

<p class="underline">Adres&#259;: Bd. Republicii nr. 11, Pite&#351;ti 110166</p>

<p class="underline marginBottom">Telefon: 021-620-312</p>

<p>Fax: 021-462-254</p>

<p class="underline">Email: happy_pets@yahoo.com</p><br>

<div class="formContainer">
    <?php include("/assets/scripts/validate_form.php"); ?>

<!--    <form method="post" action="--><?php //echo $_SERVER['PHP_SELF']; ?><!--" name="myForm" id="formContact">-->
        <form method="post" action="http://rowebproiectfinal.ro/assets/scripts/validate_form.php" name="myForm" id="formContact">
        <fieldset>
            <input type="text" name="name" placeholder="Nume" tabindex="1" autofocus  >
            <span class="error"></span>
        </fieldset>
        <fieldset>
            <input type="email" name="email" placeholder="Adresa e-mail" tabindex="2"  >
            <span class="error"></span>
        </fieldset>
        <fieldset>
            <textarea name="message" placeholder="Mesaj" tabindex="4"  ></textarea>
        </fieldset>
        <fieldset>
            <button type="submit" name="submit" id="formContact-submit" data-submit="Sending" tabindex="5">Submit
            </button>
        </fieldset>
        <div class="success"></div>
    </form>
</div>