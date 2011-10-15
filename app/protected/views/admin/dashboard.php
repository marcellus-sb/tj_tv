<?php 
    $this->cssList[] = 'admin/dashboard';
    $this->pageTitle = 'Dashboard';
?>
<h1>Painel de Controle</h1>
<div id="dashboard">
    <div class="playlists left">
        <h3>Em Execução</h3>
        <div>

        </div>
        
        
    </div>
    <div class="actions left">
        <a class="action" href="<?php echo $this->createUrl('admin/videoupload'); ?>">Enviar Vídeo</a>
        <a class="action" href="<?php echo $this->createUrl('admin/textcreate'); ?>">Criar Mensagem</a>
    </div>
    <div class="clear"></div>
</div>