<?php
    /*ORIGINAL CREATOR: Gagan (KIA)
    AUTHOR: Gagan (KIA)
    Copyright (C) 2022-2023 KIA <rtg.gagan@gmail.com>
    */

    $filename = "../Graphs/Temp.txt";
    $reader = fopen("../Graphs/TempEncode.txt","r");
    $name = fgets($reader);
    fclose($reader);
    echo move_uploaded_file(
        $_FILES["upFile"]["tmp_name"],
        $name
    )? "OK":"ERROR";
?> 
