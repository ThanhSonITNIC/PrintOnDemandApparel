<?php

namespace App\Classes\Files;

use App\Classes\Files\ImageUpload;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use File;
use App\Classes\Files\Image;

class ImageArticleUpload extends ImageUpload{
    /**
     * Path to upload post
     * 
     * @var string
     */
    public $path = "storage/images/article";

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
     * Product
     * 
     * @var Post
     */
    public $post;

    public function __construct($post = null){
        $this->post = $post;

        // custom path
        $this->path = Str::finish($this->path, '/');
        $this->path .= $now = Carbon::now()->format('Y/m');

        // custom file name
        $this->fileName = Str::random(20);

        $image = new Image($this->path, $this->fileName);
        $image->dontMakeWatermark();
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
        if($this->post != null)
            if($this->post->image != null){
                $jsonImages = json_decode($this->post->image);
                !isset($jsonImages->link) ?: File::delete($jsonImages->link);
                !isset($jsonImages->watermark) ?: File::delete($jsonImages->watermark);
            }

        return parent::upload($file);
    }
    
}