<?php
    //file_get_contents("php://input") คือ show content ที่แนบมา คือ name=Z&role=Admin
    //echo file_get_contents("php://input"); 
    
    //เราใช้ file_get_contents เพื่อรับข้อมูลจาก file 
    $ucontent = file_get_contents("php://input");
    //โดย file อยู่ที่ php://input ที่เป็นภาษา JSON จากนั้นก็แปลงให้กลายเป็น object ของ php โดยใช้ json_decode
    $u_obj = json_decode($ucontent, true);
    $u_obj["uname"] = $u_obj["name"]."CCCCCCCCCCC";
    echo json_encode($u_obj);
    
    //echo"hello" . $_GET["uname"]." " . $_GET["role"] ;
?>