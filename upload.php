<?php 

//test upload server deploy
$configfile = getcwd()."/asset/image/product/".$_GET["kode"] . ".png"; //untuk server   
$custom_width = $_GET['width'] ??  '0';
$custom_height =$_GET['height'] ??  '0';


try {
   if (file_exists($configfile) == 1) { 
      $type = pathinfo($configfile, PATHINFO_EXTENSION); 
      $data = file_get_contents($configfile);
      $image = imagecreatefromstring($data);
      header('Content-Type: image/JPEG');
      if($custom_width > 0 ){ 
         $imgResized = imagescale($image , $custom_width, $custom_height); // width=500 and height = 400
         
         imagejpeg($imgResized);
         imagedestroy($imgResized);
      }else{ 
   
         imagejpeg($image, null, 9);
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
