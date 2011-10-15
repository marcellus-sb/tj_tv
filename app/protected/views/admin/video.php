<?php
    $this->cssList[] = 'admin/dashboard';
    $this->pageTitle = 'Vídeos';
?>

<div id="upbutton" class="actions right">
    <a class="action" href="<?php echo $this->createUrl('admin/videoupload'); ?>">Enviar Vídeo</a>
</div>
<h1>Vídeos</h1>

<div id="work_media">
    <div class="playlist half_size">
        <h3>Playlist</h3>
        <div class="list">
        </div>
        <button disabled="disbaled">Salvar</button>
    </div>
    <div class="videolist half_size last">
        <h3>Reservatório de Vídeos</h3>
        <div class="list">
        </div>
    </div>
    <div class="clear"></div>
    <div> aslkjaldj</div>
</div>


<?php /*
<ul><?php foreach($videos as $video): ?>
        <li><?php echo $video->label; ?></li>
        <?php endforeach; ?>
    </ul>
 * 
 */