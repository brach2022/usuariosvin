<?php

function getFolderProyect(){

   if (strpos(__DIR__,'/') !== false){ 
      $folder = str_replace('/opt/lampp/htdocs/', '/', __DIR__);
   }else{   
      $folder = str_replace('C:\\xampp\\htdocs\\', '/', __DIR__);
   }

   $folder1=str_replace('config', '', $folder);
   $folder2=str_replace("\\", '/', $folder1);

   return $folder2;

}








?>