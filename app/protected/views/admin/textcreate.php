<?php
    $this->cssList[] = 'admin/dashboard';
    $this->cssList[] = 'form';
    $this->pageTitle = 'Criar Mensagem';
?>

<h1>Nova Mensagem</h1>
<form method="post" class="form">
    <div class="field">
        <label for="Text[label]">Nome</label><input id="label" name="Text[label]" type="text">
    </div>
    <div class="field">
        <label for="Text[content]">Conteúdo</label><textarea id="label" name="Text[content]"></textarea>
    </div>
    <div class="control">
        <button type="submit">enviar</buton>
    </div>
</form>
