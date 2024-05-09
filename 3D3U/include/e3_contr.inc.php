<?php
declare(strict_types=1);

function is_input_empty(string $v1, string $v2, string $v3, string $v4, string $v5, string $v6){
     if(empty($v1) || empty($v2) ||empty($v3) ||empty($v4) ||empty($v5) ||empty($v6)){
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