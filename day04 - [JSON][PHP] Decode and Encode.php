<html>
    <script>
        //data serialization & de-serializaion
        var obj1 = {"user":"A","talk":function(){console.log("hello"); }};
        var obj2 = {"name":"AAA","age": 10.5 ,"tickets":{"s1": 1, "s2": 2}};
        
        //1. serialization 
        var str1 = JSON.stringify(obj1);
        console.log(str1); //{"user":"A"}

        var str2 = JSON.stringify(obj2);
        console.log(str2); //{"name":"AAA","age":10.5,"tickets":{"s1":1,"s2":2}}
        //หรือ
        console.log(JSON.stringify(obj2)); //{"name":"AAA","age":10.5,"tickets":{"s1":1,"s2":2}}
        
        //2. de-serializaion
        var  r01 = JSON.parse(str1);
        console.log(r01); //Object {user: "A"}

        var  r02 = JSON.parse(str2);
        console.log(r02); //Object {name: "AAA", age: 10.5, tickets: Object}
    </script>
</html>

<?php
    echo "<center><b>serialize() and unserialize()</b></center><br>";
    /*
        ฟังก์ชัน serialize() เป็นฟังก์ชันที่ใช้สำหรับแพ็ก array หรือobject ให้อยู่ในรูปของสตริง 
        ฟังก์ชัน unserialize() เป็นฟังก์ชันที่ทำให้ข้อมูลจะกลับมาอยู่ในรูปเดิมอย่างไม่เสียคุณสมบัติ
        ถ้าเรา serialize() array เมื่อ unserialize() ก็จะได้อะเรย์คืนมา จะใช้ในการส่งค่าผ่านฟอร์ม
            
        อ้างอิง: http://www.select2web.com/php/serialize-php-function.html
    */

    //Array
    echo "<b>Array</b><br>";
        $arr = array("Green", 0.123, 987);
        
        // Serialize the data 
        // Array -> String 
        $str_arr = serialize($arr);  
        var_dump ($str_arr);  
        
        // Unserialize the data
        // String -> Array 
        $arr2 = unserialize($str_arr);    
        var_dump ($arr2);  

    //Object
    echo "<b>Object</b><br>";
        class A {
            public $name= "Tommy";    
            public function show() {echo "Hello!";}
        }
        $obj = new A;
        
        // Serialize the data 
        // Object -> String
        $str_obj = serialize($obj);  
        var_dump ($str_obj);  

        // Unserialize the data
        // String -> Object 
        $obj2 = unserialize($str_obj);    
        var_dump ($obj2);   

    echo "<hr><br>";
    //echo "\n";
    echo "<center><b>json_encode() and json_decode()</b></center><br>";
    /*
    การใช้งาน JSON เพื่อการสื่อสารกับ Javascript ในรูปแบบของ Ajax
    ในความเป็นจริงแล้วทุกภาษาที่รองรับการเขียนโปรแกรมแบบ OOP (Object-Oriented Programming) สามารถใช้งาน JSON ได้ทั้งหมด

    PHP เองก็จะมีกลุ่มของคำสั่งชุดหนึ่งชื่อว่า JSON (JavaScript Object Notation) ใช้ในการแลกเปลี่ยนข้อมูลกับ Javascript 
    ในรูปแบบของวัตถุ Object ซึ่งความสามารถนี้ถูกเพิ่มเข้ามาใน PHP 5.2.0

    คำสั่งที่สำคัญมี 2 คำสั่งคือ
    json_encode ใช้ในการจัดรูปแบบตัวแปรของ PHP เป็น JSON String เพื่อใช้ในการส่งไปยัง Javascript
    json_decode ใช้ในการจัดรูปแบบข้อมูล JSON String ที่ได้รับมาเป็นตัวแปรของ PHP
    */
    //Array
    echo "<b>Array</b><br>";
        $str = '[1, 2, "A"]';
        var_dump(($str));

        //decode = str-> arr
        $arr = json_decode($str, true);
        var_dump($arr);

        //encode = arr->str
        $str2 = json_encode($arr, true);
        var_dump($str2);

    //Object
    echo "<b>Object</b><br>";
        //$str_obj = '{"a":"ABCDE","b":2.22,"c":3,"d":4,"e":5}';
        $str_obj = '{"name":"AAA","age": 10.5 ,"tickets":{"s1": 1, "s2": 2}}';
        
        // มีฟังก์ชัน
        //$str_obj = '{"user":"A","talk":function(){console.log("hello"); }}'; //ผลลัพธ์เป็น null
        
        var_dump($str_obj);

        //decode = str->obj
        $obj = json_decode($str_obj);
        var_dump($obj);

        //encode = obj->str 
        $str_obj2 = json_encode($obj);
        var_dump($str_obj2);

?>