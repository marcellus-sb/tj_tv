<?php
    $this->cssList[] = 'layouttv'.$tvSize;
?>
<div class="content">
    <div id="mediavideo">
        <video style="z-index: 0;" src="<?php echo Yii::app()->baseUrl; ?>/static/videorepository/sample.ogg"  width="800" height="540" autoplay></video>
    </div>
    <div id="bottom_bar">
        <div id="mediatext" class="left">
            lorem ipsum dolor sit amec avec consequecer. lorem ipsum tenser quick avec
        </div>
        <div id="widget" class="left">
            <div id="logo"><image src="<?php echo Yii::app()->baseUrl; ?>/static/img/logotjtv.png" height="30px"></div>
            <div id="clock">16:43</div>
        </div>
        <div class="clear"></div>
    </div>
</div>
