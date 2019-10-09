<?php

namespace App\Classes\Files;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use File;

class FileUpload{
    /**
     * Path to upload file
     * 
     * @var string
     */
    public $path;

    /**
     * Rename file upload
     * 
     * @var string
     */
    public $fileName;

    /**
     * Construct
     * 
     * @param string $path
     * @param string $fileName
     */
    public function __construct($path, $fileName){
        $this->path = $path;
        $this->fileName = $fileName;
    }

    /**
     * Upload file
     * 
     * @param UploadedFile $file
     * 
     * @return json path file
     */
    public function upload(UploadedFile $file)
    {
        // update extension file name
        $this->fileName = Str::before($this->fileName, '.');
        $this->fileName = Str::finish($this->fileName, '.');
        $this->fileName .= $file->getClientOriginalExtension();

        // create path if not exists
        $this->createPath();

        // upload file
        $file->move(public_path($this->path), $this->fileName);
        
        // respone
        $response = new \StdClass;
        $response->link = $this->path.'/'.$this->fileName;
        return stripslashes(json_encode($response));
    }

    /**
     * Create path if not exists
     * 
     * @return mixed true | null
     */
    public function createPath(){
        if(!File::exists($this->path)) {
            return File::makeDirectory($this->path, 0777, true);
        }
    }
}