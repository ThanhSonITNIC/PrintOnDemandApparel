<?php

namespace App\Classes\Files;

use App\Classes\Files\Image;

class Logo{
    /**
     * Get list logo
     * 
     * @return array Logo
     */
    public function get(){
        return[
            new Image('storage/images/logo','logo-light.png', 117, 25),
            new Image('storage/images/logo', 'logo-dark.png', 117, 25),
            new Image('storage/images/logo', 'logo-small.png', 32, 18)
        ];
    }
}