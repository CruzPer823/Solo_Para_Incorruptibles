<?php
declare(strict_types=1);


function uploadImage(string $fileName, string $fileTmp, string $fileSize, string $fileError, string $fileActualExt, array $allowed ){
    if(in_array($fileActualExt, $allowed)){
       if($fileError==0){
         //tamaño en bytes
           if($fileSize<20000000){
               $fileNameNew = uniqid('',true).".".$fileActualExt;
               $fileDestination='./documents/'.$fileNameNew;
               move_uploaded_file($fileTmp,$fileDestination);
               return $fileNameNew;
           }else{
               echo "Archivo muy pesado";
           }
 
       }else{
           echo "Hubo un error";
       }
   }else{
       echo "Extension no permitida";
   }
}