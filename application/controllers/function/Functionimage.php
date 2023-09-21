<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Functionimage extends CI_Controller
{ 

   function product($id)
   {
      $configfile = "./asset/image/product/"; //untuk server 
      try {
         if (file_exists($configfile .   $id . ".png")) {
            $path = FCPATH . $configfile .  $id . ".png";
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $image = imagecreatefromstring($data);
            header('Content-Type: image/JPEG');
            imagejpeg($image, null, 7);
            imagedestroy($image);
            exit(0);
         } else {
            $path = FCPATH .  $configfile . 'not-found.png';
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $image = imagecreatefromstring($data);
            header('Content-Type: image/' . $type);
            imagepng($image, null, 7);
            imagedestroy($image);
            exit(0);
         }
      } catch (Exception $e) {
         $path = FCPATH .  $configfile . 'not-found.png';
         $type = pathinfo($path, PATHINFO_EXTENSION);
         $data = file_get_contents($path);
         $image = imagecreatefromstring($data);
         header('Content-Type: image/' . $type);
         imagepng($image, null, 3);
         imagedestroy($image);
         exit(0);
         
      }
   }
}
