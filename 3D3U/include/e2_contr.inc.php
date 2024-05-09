<?php
declare(strict_types=1);

function is_input_empty(string $name,string $partido,string $correo){
     if(empty($name) || empty($partido) || empty($correo)){
        return true;
     }else{
        return false;
     }
}
function is_email_invalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       return true;
    }else{
       return false;
    }
}

function is_name_taken(object $pdo ,string $name){
    if(get_name($pdo,$name)){
        return true;
    }else{
        return false;
    }
}
function is_email_taken(object $pdo ,string $email){
    if(get_email($pdo,$email)){
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