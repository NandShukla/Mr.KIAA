<?php
    /*ORIGINAL CREATOR: Gagan, Nand and Irtika
    AUTHOR: Gagan, Nand and Irtika
    Copyright (C) 2022-2023 KIA <>
    */

    function Get_Message($Type,$Param){
        require_once ("Language_Controller.php");
        $Message = Message($Type,$Param);
        return $Message;
    }

    function Delete(){
        $filename = $_POST["bar"];
        $filename2 = '" "';
        $final = str_replace(" ",$filename,$filename2);
        $path = "../Graphs/{$filename}/{$filename}.mh";
        $path2 = "../Graphs/{$filename}/encode.mh";
        if(file_exists($path)){
            $Message = Get_Message("Positives","Canc");
            unlink($path);
            unlink($path2);
            rmdir("../Graphs/{$filename}");
            echo "<script>
            alert('$Message');
            </script>";
        }    
        else{
            $Message = Get_Message("Errors","Graph");
            echo "
            <script>
            alert('$Message');
            </script>";
        }
    }
    if(isset($_POST["Button"])){
        Delete();
    }
?> 