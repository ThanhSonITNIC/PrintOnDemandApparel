<?php

namespace App\Classes\Files;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Classes\Files\FileUpload;
use Intervention\Image\ImageManagerStatic as ImageManager;
use App\Classes\Files\Image;

class ImageUpload extends FileUpload{
    /**
     * @var Image
     */
    protected $image;

    /**
     * Path to upload
     * 
     * @var string
     */
    public $path = "storage/images";

    /**
     * Construct
     * 
     * @param string $fileName
     */
    public function __construct(Image $image){
        $this->image = $image;
    }

    public function upload(UploadedFile $file)
    {
        // create path if not exists
        $this->createPath();

        // upload file
        if($this->image->width == null || $this->image->height == null)
            ImageManager::make($file)->save($this->image->path());
        else
            ImageManager::make($file)->resize($this->image->width, $this->image->height)->save($this->image->path());

        // respone
        $response = new \StdClass;
        $response->link = $this->image->path();
        $response->watermark = $this->image->makeWatermark();
        return stripslashes(json_encode($response));
    }
}