<?php

namespace App\Classes\Files;

use App\Classes\Files\ImageUpload;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use File;
use App\Classes\Files\Image;

class ImageApparelUpload extends ImageUpload{
    /**
     * Path to upload product
     * 
     * @var string
     */
    public $path = "storage/images/apparel";

    /**
     * Rename file upload
     * 
     * @var string
     */
    public $fileName;

    /**
     * Width size
     */
    public $width;

    /**
     * Height size
     */
    public $height;

    /**
     * Apparel
     * 
     * @var Apparel
     */
    public $apparel;

    public function __construct($apparel = null){
        $this->apparel = $apparel;

        // custom path
        $this->path = Str::finish($this->path, '/');
        $this->path .= $now = Carbon::now()->format('Y/m');

        // custom file name
        $this->fileName = Str::random(20);

        $image = new Image($this->path, $this->fileName);
        $image->size($this->width, $this->height);
        parent::__construct($image);
    }

    /**
     * Upload file
     * 
     * @param UploadedFile $file
     * 
     * @return json path file
     */
    public function upload(UploadedFile $file){
        // delete old image
        if($this->apparel != null)
            if($this->apparel->image != null){
                $jsonImages = json_decode($this->apparel->image);
                !isset($jsonImages->link) ?: File::delete($jsonImages->link);
                !isset($jsonImages->watermark) ?: File::delete($jsonImages->watermark);
            }

        return parent::upload($file);
    }
    
}