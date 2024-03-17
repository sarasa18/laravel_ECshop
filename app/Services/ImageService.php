<?php 

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;


class ImageService {
  public static function upload($imageFile, $folderName ) {
    $fileName = uniqid(rand().'_');
    $extension = $imageFile->extension(); 
    $fileNameToStore = $fileName. '.' . $extension;
    $preimage = ImageManager::imagick()->read($imageFile);
    $resizedImage = $preimage->resize(1920, 1080)->encode();

    Storage::put('public/' . $folderName . '/' . $fileNameToStore, $resizedImage );

    return $fileNameToStore;
  }
}