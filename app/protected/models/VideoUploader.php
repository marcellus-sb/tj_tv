<?php

class VideoUploader
{
    protected $bucket;
    protected $video;
    
    public function __construct($bucket=null)
    {
        if (!isset($bucket))
        {
            $bucket = 'static'.'/'
            .'videorepository'.'/';
        }
        
        $this->bucket = $bucket;
    }
    
    public function upload($label, CUploadedFile $file)
    {
        $this->video = $this->createMediaVideo($label);
        
        $path = $this->getFilePath().$this->generateFileName().'.'.$file->getExtensionName();
        
        $this->video->filePath = Yii::app()->baseUrl.'/'.$this->bucket.$this->generateFileName().'.'.$file->getExtensionName();
        $this->video->save();
        
        $file->saveAs($path);
        
    }
    
    protected function createMediaVideo($label)
    {
        $video = new MediaVideo;
        $video->label = $label;
        
        $video->filePath = 'tmppath';
        
        $video->save();
        
        return $video;
    }
    
    protected function getFilePath()
    {
        return Yii::app()->params['pathupload'] . $this->bucket;
    }
    
    protected function generateFileName()
    {
        if (!isset($this->video))
        {
            throw new Exception('Não existe vídeo salvo no banco de dados.');
        }
        
        return 'video' . $this->video->id;
    }
}
