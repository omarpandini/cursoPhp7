<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">Send</button>    
</form>


<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $file = $_FILES["fileUpload"];

    if ($file["error"]) {
        throw new Exception("Eror: " . $file["error"]);
    }

    $dirUploads = "uploads";

    if (!is_dir($dirUploads)) {
        mkdir($dirUploads);
    }

    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
        echo "Upload realizado com sucesso!";
    } else {
        throw new Exception("Não foi possível fazer upload");
    }
}
?>
