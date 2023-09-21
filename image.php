<?php 

//test deploy
//test ke 2
//test deploy 3
$configfile = getcwd()."/asset/image/subProduct/".$_GET["image"]; //untuk server   
$custom_width = $_GET['width'] ??  '0';
$custom_height =$_GET['height'] ??  '0';
try {
   if (file_exists($configfile) == 1) {
      
      $type = pathinfo($configfile, PATHINFO_EXTENSION);  
      $data = file_get_contents($configfile);
      $image = imagecreatefromstring($data);
      header('Content-Type: image/'. $type);
      
      if($custom_width > 0 ){ 
         $imgResized = imagescale($image , $custom_width, $custom_height); // width=500 and height = 400
         if( $type == "webp" ){
            imagewebp($imgResized);
         }else if( $type == "png" ){
            imagepng($imgResized);
         }

         imagedestroy($imgResized);
      }else{ 
        if( $type == "webp" ){ 
            imagewebp($image, null, 9);
        }else if( $type == "png" ){
            imagepng($image);
         }
        imagedestroy($image);
      }
      exit(0);
   } else {
      $path = getcwd()."/asset/image/product/" . 'not-found.png';
      $type = pathinfo($path, PATHINFO_EXTENSION);
      $data = file_get_contents($path);
      $image = imagecreatefromstring($data);
      header('Content-Type: image/' . $type);
      imagepng($image, null, 7);
      imagedestroy($image);
      exit(0);
   }
} catch (Exception $e) {
   $path = getcwd()."/asset/image/product/" . 'not-found.png';
   $type = pathinfo($path, PATHINFO_EXTENSION);
   $data = file_get_contents($path);
   $image = imagecreatefromstring($data);
   header('Content-Type: image/' . $type);
   imagepng($image, null, 7);
   imagedestroy($image);
   exit(0);
}
