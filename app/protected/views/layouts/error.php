<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/sicaeco.css" type="text/css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/static/css/error.css" type="text/css">
	    <meta http-equiv="Content-Type"
	        content="text/html; charset=utf-8">
	    <title><?php echo Yii::app()->name . ' - Erro Imprevisto'; ?></title>
    </head>
    
    <body>
        <div id="main">
            <div class="content-space">
            <div id="logo">
	            <a href="<?php echo Yii::app()->request->baseUrl; ?>/"><img alt="Simpósio Capixaba de Ecologia" src="<?php echo Yii::app()->request->baseUrl; ?>/static/img/logo_header.png" width="272" height="72" title="Simpósio Capixaba de Ecologia"></a>
	        </div>
	        <?php echo $content; ?>
            </div> <!-- /content-space -->
        </div> <!-- /main -->
    </body>
</html>



