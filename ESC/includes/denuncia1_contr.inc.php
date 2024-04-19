<?php
declare(strict_types=1);

function is_input_empty(string $name,string $partido,string $correo){
     if(empty($name) || empty($partido) || empty($correo)){
        return true;
     }else{
        return false;
     }
}
function is_postal_code_invalid(string $postal_code) {
    $pattern = '/^\d{5}$/';
    if (!preg_match($pattern, $postal_code)) {
        return true; 
    } else {
        return false;
    }
}
function is_electoral_zone_invalid(string $electoral_zone) {
    $pattern = '/^\d{4}$/';
    if (!preg_match($pattern, $electoral_zone)) {
        return true; 
    } else {
        return false;
    }
}

// function is_gender_taken(object $pdo ,string $gender) {
//     if(get_gender($pdo,$gender)){
//         return true;
//     }else{
//         return false;
//     }
// }
// function is_email_taken(object $pdo ,string $email){
//     if(get_email($pdo,$email)){
//         return true;
//     }else{
//         return false;
//     }
// }
// function save_image( $_FILES["foto"] ){
//     if($_FILES["foto"]["error"] == 4){
//     $fileName= $_FILES["foto"]["name"];
//     $fileSize=$_FILES["foto"]["size"];
//     $tmpName = $_FILES["foto"]["tmp_name"];
//     $validExtension=['jpg','jpeg','png'];
//     $imageExtension=explode('.', $fileName);
//     $imageExtension=strtolower(end($imageExtension));
//     if(!in_array($imageExtension, $validExtension)){
//         echo '<div class="alert alert-danger" style="width: 50vw; height: 5vh; display:flex; flex-direction:column; justify-content:center;" role="alert">
//         <div>La imagen debe ser de extensión jpg, jpeg o png</div></div>';
//         header("Location: ../e2.php");
//         die();
//     }else if($fileSize > 1000000){
//         echo '<div class="alert alert-danger" style="width: 50vw; height: 5vh; display:flex; flex-direction:column; justify-content:center;" role="alert">
//         <div>La imagen supera el tamaño soportado</div></div>';
//         header("Location: ../e2.php");
//         die();
//     }
//     else{
//         $newImageName=uniqid();
//         $newImageName='.'.$imageExtension;
//         return $newImageName;
//         }
//     }else{
//         echo '<div class="alert alert-danger" style="width: 50vw; height: 5vh; display:flex; flex-direction:column; justify-content:center;" role="alert">
//         <div>La imagen supera el tamaño soportado</div></div>';
//         header("Location: ../e2.php");
//         die();
//     }
// }