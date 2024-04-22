<?php
declare(strict_types=1);

function is_input_empty($c1,$c2,$c3,$c4,$c5,$c6){
     if(empty($c1) && empty($c2) && empty($c3) && empty($c4) && empty($c5) && empty($c6)){
        return true;
     }else{
        return false;
     }
}

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

function deleteImage(string $filename){
       unlink('./documents/'.$filename);
}