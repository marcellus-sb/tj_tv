<?php
    $this->cssList[] = 'admin/dashboard';
    $this->cssList[] = 'form';
    $this->pageTitle = 'Upload de Vídeo';
?>

<h1>Upload de Vídeo</h1>
<form method="post" class="form" enctype="multipart/form-data">
    <div class="field">
        <label for="label">nome</label><input id="label" name="label" type="text">
    </div>
    <div class="field">
        <label for="video">arquivo</label><input id="video" name="video" type="file">
    </div>
    <div class="control">
        <button type="submit">enviar</buton>
    </div>
</form>