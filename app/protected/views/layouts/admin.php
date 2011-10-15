<?php 
    $this->cssList[] = 'admin/admin';
    $this->pageTitle .= ' - Admin';
    
    $menuMap = array(
        array(
            'name' => 'painel de controle',
            'action' => 'dashboard',            
        ),
        array(
            'name' => 'videos',
            'action' => 'video'
        ),
        array(
            'name' => 'mensagens',
            'action' => 'text'
        ),
    );
    
    
    
    $actionName = $this->getAction()->getId();
    
    $menuActive = function ($i) use ($actionName, $menuMap)
    {
      if ($actionName === $menuMap[$i]['action']) {
          return ' class="selected" ';
      }
      return;
    }
    
?>
<?php $this->beginContent('/layouts/clean'); ?>
<div class="container">
    <div id="header">
        <div class="maxwidth">
            <div id="logo"><a href=""><img src="<?php echo Yii::app()->baseUrl; ?>/static/img/logotjtv.png"></a></div>
            <div class="menu">
                <ul>
                    <?php foreach ($menuMap as $i => $menuitem): ?>
                    <li><a<?php echo $menuActive($i); ?>
                            href="<?php echo $this->createUrl('admin/'.$menuitem['action']); ?>">
                            <?php echo $menuitem['name']; ?>
                        </a>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="user_control">
                <?php echo Yii::app()->user->username; ?>, <a href="<?php echo $this->createUrl('admin/logout'); ?>">sair</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="content">
        <div class="maxwidth">
        <?php echo $content; ?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>
