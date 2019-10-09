<?php

namespace App\Classes\Files;

use File;
use Intervention\Image\ImageManagerStatic as ImageManager;

class Image{
    /**
     * Path on image
     * 
     * @var string
     */
    public $path = "storage/images/";

    /**
     * Title logo
     * 
     * @var string
     */
    public $title;

    /**
     * Name image
     * 
     * @var string
     */
    public $name;

    /**
     * Width size
     */
    public $width;

    /**
     * Height size
     */
    public $height;

    /**
     * When upload if $isMakeWatermark = true then create watermark
     * 
     * @var boolean
     */
    private $isMakeWatermark = true;

    /**
     * Width watermark size
     */
    public $widthWatermark = 400;

    /**
     * Height watermark size
     */
    public $heightWatermark = null;

    /**
     * Construct
     * 
     * @param string $title
     * @param string $name
     * @param $width = null
     * @param $height = null
     */
    public function __construct($path, $name, $width = null, $height = null){
        $this->name = $name;
        $this->path = $path;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Get image path
     * 
     * @return string
     */
    public function path(){
        return $this->path.'/'.$this->name;
    }

    /**
     * Get watermark path
     * 
     * @return string
     */
    public function pathWatermark(){
        return $this->path."/watermark/".$this->name;
    }

    /**
     * Set size
     * 
     * @param int width
     * @param int height
     * 
     * @return void
     */
    public function size($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Don't make watermark
     */
    public function dontMakeWatermark(){
        $this->isMakeWatermark = false;
    }

    /**
     * Make watermark
     */
    public function makeWatermark(){
        if(!$this->isMakeWatermark){
            return null;
        }

        if(!File::exists($this->path."/watermark"))        
        File::makeDirectory($this->path."/watermark", 0777, true);
        ImageManager::make($this->path())->resize($this->widthWatermark, $this->heightWatermark, function ($constraint) {
            $constraint->aspectRatio();
        })->save($this->pathWatermark());
        
        return $this->pathWatermark();
    }

}
