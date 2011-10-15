<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/reset.css" type="text/css">
        <?php
            foreach ($this->cssList as $cssFile)
            {
                echo '<link rel="stylesheet" href="'.Yii::app()->request->baseUrl.'/static/css/'.$cssFile.'.css" type="text/css">';
                echo "\n";
            }
        ?>

	    <meta http-equiv="Content-Type"
	        content="text/html; charset=utf-8">
	    <title><?php echo trim($this->pageTitle. ' ' . Yii::app()->name); ?></title>
    </head>
    
    <body>
        <?php echo $content; ?>
        <?php
            foreach ($this->jsList as $jsFile)
            {
                echo '<script src="'.Yii::app()->request->baseUrl.'/static/js/'.$jsFile.'.js" type="text/javascript"></script>';
                echo "\n";
            }
        ?>
    </body>
</html>
