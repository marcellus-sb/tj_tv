<?php
    $this->pageTitle = 'login';
    $this->cssList[] = 'form';
?>

<form class="simpleform middle" method="post" action="">
    <fieldset>
        <legend>Administração</legend>
        <label>Usuário<input type="text" name="LoginForm[username]"></label>
        <label>Senha<input type="password" name="LoginForm[password]"></label>
        <div class="control">
            <button type="submit">entrar</button>
        </div>
    </fieldset>
</form>

