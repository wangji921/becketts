<?php

namespace App\Handlers;

use Image;

class ImageUploadHandler
{
    // only allowed the file extension to upload
    protected $allowed_ext = ["png", "jpg", "gif", 'jpeg'];

    public function save($file, $folder, $file_prefix, $max_width = false)
    {
        // rule for saving the file, for example: uploads/images/avatars/201709/21/
        // divide the folder for finding more effective
        $folder_name = "uploads/images/$folder/" . date("Ym/d", time());

        // The physical path of storage, `public_path()` is trying to fetch the physical path of `public`
        // For example: /home/vagrant/Code/becketts/public/uploads/images/avatars/201709/21/
        $upload_path = public_path() . '/' . $folder_name;

        // get the extension of the file, because the extension will be empty when getting from clipboard
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';
        // dd($file->guessExtension());

        // combine the file name, prefix is for identification, prefix is the ID of the model
        // For example: 1_1493521050_7BVc9v9ujP.png
        $filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $extension;

        // Terminate the operation if it is not an image
        if ( !in_array($extension, $this->allowed_ext) ) {
            return false;
        }

        // move the image to the target folder
        $file->move($upload_path, $filename);

        // if there is width limitation, resize the photo
        if ($max_width && $extension != 'gif') {

            // resize the photo
            $this->reduceSize($upload_path . '/' . $filename, $max_width);
        }

        return [
            'path' => "/$folder_name/$filename"
        ];
    }

    public function reduceSize($file_path, $max_width)
    {
        $image = Image::make($file_path);

        // first, resize
        $image->resize($max_width, null, function ($constraint) {

            // width = $max_width and constrain aspect ratio (auto width)
            $constraint->aspectRatio();

            // prevent possible upsizing
            $constraint->upsize();
        });

        // save
        $image->save();
    }
}