<?php

namespace App\Helpers;

use Illuminate\Http\File;
use Validator;

class UploadHelper
{

    public static function uploadImage($file, $resize = false, $imageName = null)
    {
        $validator = Validator::make(['file' => $file], [
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        if ($validator->fails()) {
            return redirect()->back();
        }
        if(!$imageName){
            $imageName = time() . uniqid() . '.' . $file->getClientOriginalExtension();
        }
        $folder = 'uploads/' . date('Y') . '/' . date('m');
        $path = public_path($folder);
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $fullPath = $path . '/' . $imageName;
        $realPath = $folder . '/' . $imageName;
        if ($resize !== false) {
            $width = $resize;

            $image = \Image::make($file)->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save("{$fullPath}");
        } else {
            $file->move($path, $imageName);
        }
        return $realPath;
    }

    public static function deleteImage($folder, $current_file)
    {
        if ($current_file) {
            $path = public_path('uploads/' . $folder . '/' . $current_file);
            if (file_exists($path)) {

                File::delete($path);
            }
        }
    }
}
