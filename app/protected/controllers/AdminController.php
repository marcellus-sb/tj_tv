<?php

class AdminController extends Controller
{
    public $layout = '//layouts/admin';
    
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
                'actions' => array(
                    'logout', 'dashboard',
                    'video', 'videoupload', 
                    'playlist', 'playlistcreate', 
                    'text', 'textcreate', 
                ),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array('error'),
                'users' => array('*'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }
    
    public function actionDashboard()
    {
        $playlists = PlaylistVideo::model()->findAll();
        
        $this->render('dashboard');
    }
    
    public function actionVideo()
    {
        $pageSize = 1;

        $criteria = new CDbCriteria;
        
        $total = MediaVideo::model()->count($criteria);
        $pages = new CPagination($total);
        $pages->pageSize = $pageSize;
        $pages->applyLimit($criteria);
        
        $videos = MediaVideo::model()->findAll();
        
        
        return $this->render('video', 
            array(
                'pages' => $pages,
                'videos' => $videos,
            )
        );
    }
    
    public function actionVideoUpload()
    {
        if (!empty($_FILES))
        {
            $file = CUploadedFile::getInstanceByName('video');
            if (!empty($file) && !$file->getHasError())
            {
                $uploader = new VideoUploader;
                $uploader->upload($_POST['label'], $file);
                
                return $this->render('videoupload', array(
                    'msg' => 'Vídeo salvo com sucesso.'
                ));
            }
            else
            {
                echo 'Você falhou';
            }
        }
        
       return $this->render('videoupload');
    }
    
    
    public function actionPlaylist()
    {
        return $this->render('playlist');
    }
    
    public function actionPlaylistCreate()
    {
        return $this->render('playlistcreate');
    }
    
    
    public function actionText()
    {
        $pageSize = 1;

        $criteria = new CDbCriteria;
        
        $total = MediaText::model()->count($criteria);
        $pages = new CPagination($total);
        $pages->pageSize = $pageSize;
        $pages->applyLimit($criteria);
        
        $texts = MediaText::model()->findAll($criteria);
        
        
        return $this->render('text', 
            array(
                'pages' => $pages,
                'texts' => $texts,
            )
        );
    }
    
    public function actionTextCreate()
    {
        if (isset($_POST['Text']))
        {
            $text = new MediaText;
            
            $text->label = $_POST['Text']['label'];
            $text->content = $_POST['Text']['content'];
            
            $text->save();
        }
        
        return $this->render('textcreate');
    }
    
    
    
    public function actionError()
    {
            echo "deu pau";
    }
    
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
}

