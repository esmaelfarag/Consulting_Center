<?php

namespace App\Traits;



Trait UserTrait
{
    function saveImages($photo , $folder)
    {
        $image_name = time().'.'.$photo -> getClientOriginalName();
//        $file_extension = $photo -> getClientOriginalExtension();
        $file_name = $image_name;
        $path = $folder;
        $photo-> move($path,$file_name);
        return $file_name;
    }


}
