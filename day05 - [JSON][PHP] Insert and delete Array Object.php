<?php
    echo "<center><b>json_encode() and json_decode()</b></center><br>";
    /*
        การเพิ่มข้อมูลตำแหน่งแรกสุด array_unshift()
        การเพิ่มข้อมูลตำแหน่งที่กำหนด array_splice
        การเพิ่มข้อมูลตำแหน่งท้ายสุด array_push()
        การลบข้อมูลตำแหน่งแรกสุด array_shift()
        การลบข้อมูลตำแหน่งที่กำหนด array_splice
        การลบข้อมูลตำแหน่งท้ายสุด array_pop()
    */
    //Array
        echo "<center><b>Array</b></center><br>";
        $color = '["red","green"]';
        var_dump($color);
        echo"<hr>";
        echo "<center><b>Array Insert</b></center><br>";

    //-------------------------------------------------------------------------------------------------------
    //การเพิ่มข้อมูลตำแหน่งแรกสุด array_unshift()
        echo "<center>การเพิ่มข้อมูลตำแหน่งแรกสุด array_unshift()</center><br>";
    //decode = str-> arr
        echo "<b>Decode string to array</b><br>";
        $arr_color = json_decode($color, true);
        var_dump($arr_color);
        echo "<b>Add  \"blue\",\"yellow\" into array</b><br>";
        array_unshift($arr_color,"blue","yellow");
        var_dump($arr_color);
    //encode = arr->str
        echo "<b>Encode array to string</b><br>";
        $str_color = json_encode($arr_color, true);
        var_dump($str_color);
        echo"<hr>";
    
    //-------------------------------------------------------------------------------------------------------
    //การเพิ่มข้อมูลตำแหน่งที่กำหนด array_splice
        echo "<center>การเพิ่มข้อมูลตำแหน่งที่กำหหนด array_splice()</center><br>";
    //decode = str-> arr
        echo "<b>Decode string to array</b><br>";
        $arr_color = json_decode($color, true);
        var_dump($arr_color);
        echo "<b>Add  \"blue\",\"yellow\" into array</b><br>";
        $color2 = ["blue","yellow"];
        array_splice($arr_color, 1, 0, $color2);
        var_dump($arr_color); //ผลลัพธ์ '["red","blue","yellow","green"]
    //encode = arr->str
        echo "<b>Encode array to string</b><br>";
        $str_color = json_encode($arr_color, true);
        var_dump($str_color);
        echo"<hr>";

    //-------------------------------------------------------------------------------------------------------
    //การเพิ่มข้อมูลตำแหน่งท้ายสุด array_push()
        echo "<center>การเพิ่มข้อมูลตำแหน่งท้ายสุด array_push()</center><br>";
    //decode = str-> arr
        echo "<b>Decode string to array</b><br>";
        $arr_color = json_decode($color, true);
        var_dump($arr_color);
        echo "<b>Add  \"blue\",\"yellow\" into array</b><br>";
        array_push($arr_color,"blue","yellow");
        var_dump($arr_color);
    //encode = arr->str
        echo "<b>Encode array to string</b><br>";
        $str_color = json_encode($arr_color, true);
        var_dump($str_color);
        echo"<hr>";
        
        
        
        echo "<center><b>Array Delete</b></center><br>";
    //-------------------------------------------------------------------------------------------------------
    //การลบข้อมูลตำแหน่งแรกสุด array_shift()
        echo "<center>การลบข้อมูลตำแหน่งแรกสุด array_shift()</center><br>";
    //decode = str-> arr
        echo "<b>Decode string to array</b><br>";
        $arr_color = json_decode($color, true);
        var_dump($arr_color);
        echo "<b>Delete data in array</b><br>";
        array_shift($arr_color);
        var_dump($arr_color);
    //encode = arr->str
        echo "<b>Encode array to string</b><br>";
        $str_color = json_encode($arr_color, true);
        var_dump($str_color);
        echo"<hr>";
    
    //-------------------------------------------------------------------------------------------------------
    //การลบข้อมูลตำแหน่งที่กำหนด array_splice
        echo "<center>การลบข้อมูลตำแหน่งที่กำหหนด array_splice()</center><br>";
    //decode = str-> arr
        echo "<b>Decode string to array</b><br>";
        $arr_color = json_decode($color, true);
        var_dump($arr_color);
        echo "<b>Add  \"blue\",\"yellow\" into array</b><br>";
        array_unshift($arr_color,"blue","yellow");
        var_dump($arr_color); //ผลลัพธ์ ["blue","yellow","red","green"]
        echo "<b>Delete data into array</b><br>";
        array_splice($arr_color, 1, 2);
        var_dump($arr_color); //ผลลัพธ์ '["red","blue","yellow","green"]
    //encode = arr->str
        echo "<b>Encode array to string</b><br>";
        $str_color = json_encode($arr_color, true);
        var_dump($str_color);
        echo"<hr>";
    //-------------------------------------------------------------------------------------------------------
    //การลบข้อมูลตำแหน่งท้ายสุด array_pop()
        echo "<center>การลบข้อมูลตำแหน่งท้ายสุด array_pop()</center><br>";
    //decode = str-> arr
        echo "<b>Decode string to array</b><br>";
        $arr_color = json_decode($color, true);
        var_dump($arr_color);
        echo "<b>Delete data in array</b><br>";
        array_pop($arr_color);
        var_dump($arr_color);
    //encode = arr->str
        echo "<b>Encode array to string</b><br>";
        $str_color = json_encode($arr_color, true);
        var_dump($str_color);
        echo"<hr>";

?>
