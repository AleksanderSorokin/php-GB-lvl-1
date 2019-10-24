<?php

    function connectDB () {
        $config = getDBconfig();
        $db = mysqli_connect(
            $config['db_host'],
            $config['db_user'],
            $config['db_pass'],
            $config['db_name']
        );
        return $db;
    }   

    function getAssocResult (string $query) {
        $db = connectDB();
        $result = mysqli_query($db, $query);
        
        $resArr = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $resArr [] = $row;
        }
        mysqli_close($db);
        return $resArr;

    }

    function executeQuery (string $query) {
        $db = connectDB();
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        return $result;
    }

    /*function myScan(string $dir) {
        $list = scandir($dir);
        if(!$list) {return false;}
        unset($list[0], $list[1]);
        foreach($list as $fileName) {
            $info = getimagesize("$dir$fileName");
            print_r ($info);
        }
    }*/
?>