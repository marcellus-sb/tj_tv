<?php

abstract class Playlist extends CActiveRecord
{
    const STOP = 'stop';
    const PLAY = 'play';
    const PAUSE = 'pause';
    
    public function clearMediaList()
    {
        foreach ($this->mediaRelators as $media)
        {
            $media->delete();
        }
        
        return $this;
    }
    
    public function setMediaList($medias)
    {
        $this->clearMediaList();

        foreach ($medias as $media)
        {
            $this->appendMedia($media);
        }
        
        return $this;
    }
    
    public function play()
    {
        $playlists = static::model()->findAll();
        
        foreach ($playlists as $playlist)
        {
            $playlist->status = self::STOP;
            $playlist->save();
        }
        
        $this->status = self::PLAY;
        $this->save();
        
        return $this;
    }
    
    abstract public function appendMedia($media);
}
