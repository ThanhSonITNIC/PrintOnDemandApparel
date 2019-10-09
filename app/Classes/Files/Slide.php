<?php

namespace App\Classes\Files;

use Illuminate\Support\Facades\Storage;

class Slide{
    /**
     * Path
     * @var string
     */
    public $path = "storage/images/slider";


    /**
     * Get slides
     * 
     * @return array Slide
     */
    public function get(){
        $list = array();

        $images = Storage::disk('local')->files('images/slider');

        foreach ($images as $image) {
            array_push($list, new Image($this->path, basename($image)));
        }

        return $list;
    }
}

