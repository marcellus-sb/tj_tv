<?php
    $this->cssList[] = 'admin/dashboard';
    $this->jsList[] = 'editplaylist';
    
    $this->pageTitle = 'Mensagens';
?>

<div id="upbutton" class="actions right">
    <a class="action" href="<?php echo $this->createUrl('admin/textcreate'); ?>">Criar Mensagem</a>
</div>
<h1>Mensagens</h1>

<div id="work_media">
    <div class="playlist half_size">
        <h3>Playlist</h3>
        <ul id="playlist" class="list">
            
        </ul>
        <button disabled="disabled" class="right">Salvar</button>
    </div>
    <div class="videolist half_size last">
        <h3>Reservatório de Mensagens</h3>
        <ul id="media_list" class="list"><?php foreach($texts as $text): ?>
            <li class="media_item">
                <input type="hidden" value="<?php echo $text->id; ?>">
                <?php echo $text->label; ?>
                <button class="erase">×</button>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="clear"></div>
</div>


<?php /*

 * 
 */