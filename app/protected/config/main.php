<?php



return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'TJ TV',

    // preloading 'log' component
    'preload'=>array('log'),

    // autoloading model and component classes
    'import'=>array(
        'application.models.*',
        'application.components.*',
    ),

    // application components
    'components'=>array(
        'user'=>array(
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
        ),
        
        'urlManager'=>array(
            'showScriptName'=>false,
            'urlFormat'=>'path',
            'rules'=>array(
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
        
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=tj_tv',
            'emulatePrepare' => true,
            'username' => 'app_tj',
            'password' => 'devpass',
            'charset' => 'utf8',
        ),
        
        'errorHandler'=>array(
            // use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),

        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                /*
                array(
                    'class'=>'CWebLogRoute',
                ),
                */
            ),
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>array(
        // this is used in contact page
        'pathupload'=>dirname(__FILE__).DIRECTORY_SEPARATOR
            .'..'.DIRECTORY_SEPARATOR
            .'..'.DIRECTORY_SEPARATOR,
    ),
);
