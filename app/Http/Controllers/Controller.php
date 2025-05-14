<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


        function removeFileIfExists($name) {


            if($name != null){
                $path = public_path("uploads/$name");
                if(file_exists($path)){
                    unlink($path);
                }
            }

            return true;

        }
    

      function uploadFile($image , $folder , $key=0) {

        if($image != null){

            $imageName = $folder.'/'.time().$key.'.'.$image->getClientOriginalExtension();
            $image->move(public_path("uploads/$folder") , $imageName );
        }
        return $imageName;

  }
    

}
