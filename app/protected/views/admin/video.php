<?php
    $this->cssList[] = 'admin/dashboard';
    $this->jsList[] = 'editplaylist';
    
    $this->pageTitle = 'Vídeos';
?>

<div id="upbutton" class="actions right">
    <a class="action" href="<?php echo $this->createUrl('admin/videoupload'); ?>">Enviar Vídeo</a>
</div>
<h1>Vídeos</h1>

<div id="work_media">
    <div class="playlist half_size">
        <h3>Playlist</h3>
        <ul id="playlist" class="list">
            
        </ul>
        <button disabled="disabled" class="right">Salvar</button>
    </div>
    <div class="videolist half_size last">
        <h3>Reservatório de Vídeos</h3>
        <ul id="media_list" class="list"><?php foreach($videos as $video): ?>
            <li class="media_item">
                <input type="hidden" value="<?php echo $video->id; ?>">
                <?php echo $video->label; ?>
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