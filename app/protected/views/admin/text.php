<?php
    $this->pageTitle = 'Mensagens';
?>

<div>
    <ul><?php foreach($texts as $text): ?>
        <li><?php echo $text->label; ?></li>
<?php endforeach; ?>
    </ul>


<?php $this->widget('CLinkPager', array(
    'pages' => $pages,
)); ?>
</div>