<?php

class SiteController extends Controller
{
    public $layout = '//layouts/clean';
    
    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'actions' => array('index', 'login'),
                'users' => array('*'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    //aqui é a página TV
    public function actionIndex()
    {
        $this->render('index',
            array ('tvSize' => '800x600')
        );
    }
    
    public function actionLogin()
    {
        $model = new LoginForm;

        // collect user input data
        if (isset($_POST['LoginForm']))
        {
            $model->attributes = $_POST['LoginForm'];
            
            if ($model->validate() && $model->login())
            {
                return $this->redirect($this->createUrl('admin/dashboard'));
            }
        }
        
        return $this->render('login', array('model'=>$model));
    }
}