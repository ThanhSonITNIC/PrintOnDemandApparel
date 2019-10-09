<?php

namespace App\Classes\Files;

use App\Classes\Files\ImageUpload;
use App\Classes\Files\Image;

class LogoUpload extends ImageUpload{
    /**
     * Path to upload logo
     * 
     * @var string
     */
    public $path = "storage/images/logo";
    
    public function __construct($fileName){
        $image = new Image($this->path, $fileName);
        $image->dontMakeWatermark();
        parent::__construct($image);
    }
}