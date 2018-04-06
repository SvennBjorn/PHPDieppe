<form method="post" action="#">
    <div>
        <label for="pseudo">Pseudo&nbsp;:</label>
        <input type="text" name="pseudo" value="<?php if(isset($pseudo)) echo $pseudo; ?>"/>
    </div>
    <div>
        <label for="mdp">Mot de passe&nbsp;:</label>
        <input type="password" name="mdp"/>
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
        <input type="hidden" name="frmLogin" />
</form>