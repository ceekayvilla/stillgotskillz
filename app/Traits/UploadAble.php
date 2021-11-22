<?php 
namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Trait UploadAble
 * @package App\Traits
 */
trait UploadAble{

    /**
     * [uploadOne description]
     * @param  UploadedFile $file    
     * @param  null       $folder  
     * @param  string     $disk    
     * @param  null       $filename
     * @return false|string
     */
    public function uploadOne(UploadedFile $file, $folder=null, $disk='public', $filename=null){
        $name=!is_null($filename) ? $filename : Str::random(25);

        return $file->storeAs(
            $folder, 
            $name.".".$file->getClientOriginalExtension(),
            $disk
        );

    }

    /**
     * [deleteOne delete a file on storage]
     * @param  null $path [path to the file to be deleted]
     * @param  string $disk [which app-storage is the file on]
     */
    public function  deleteOne($path=null, $disk='public'){
        Storage::disk($disk)->delete($path);
    }
}