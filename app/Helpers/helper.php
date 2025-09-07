<?php

function uploadImage($image,$folder){
     $image_ext =$image->getClientOriginalExtension() ;
            $imageName = time() .'-'.$folder. '.'.$image_ext;
             $image->move(public_path('front/assets/images/' .$folder),$imageName);
             return $imageName;

}