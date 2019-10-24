<?php
            
    $mysql = new mysqli("127.0.0.1", "root", "", "resto");
        if($mysql->connect_errno) {
               prinf("Соединение не установлено", mysql_connect_error());
        exit();
            }
    
    if(isset($_POST['upload'])) {
        if(!empty($_FILES ['image'] ['tmp_name'])) {
            $img = addslashes(file_get_contents($_FILES ['image']['tmp_name']));
            $destination_dir = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'pablic'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'smallimg'.DIRECTORY_SEPARATOR.$_FILES ['image']['name'];
            move_uploaded_file($_FILES ['image'] ['tmp_name'], $destination_dir);
            $size = getimagesize($destination_dir);
            $imgName = basename($destination_dir, ".jpg");
            $fileName = basename($destination_dir);
            $urlImg = addslashes('/pablic/img/bigimg/'.$fileName);
            $width = $size [0];
            $height = $size [1];
        }
        $query = "INSERT INTO dishes (name, image, width, height, url) VALUES ('$imgName', '$img', '$width', '$height', '$urlImg')";
        $mysql->query($query);
        $mysql->close();       
    }
    
?>