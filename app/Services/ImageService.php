<?php 

namespace App\Services;

use Illuminate\Support\Facades\Storage;
// use Illuminate\Validation\Rules\ImageFile;
use Intervention\Image\ImageManager;


class ImageService {
  public static function upload($imageFile, $folderName ) {

    // dd($imageFile['image']);
    if (is_array($imageFile)) {
      $file = $imageFile['image'];
    }else{
      $file = $imageFile;
    }

    $fileName = uniqid(rand().'_');
    $extension = $file->extension(); 
    $fileNameToStore = $fileName. '.' . $extension;
    $preimage = ImageManager::imagick()->read($file);
    $resizedImage = $preimage->cover(1920, 1080)->encode();

    Storage::put('public/' . $folderName . '/' . $fileNameToStore, $resizedImage );

    return $fileNameToStore;
  }
}