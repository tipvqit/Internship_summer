<?php
    echo "Hello<br>";

    // เขียนฟังก์ชันในรูปแบบ PHP
    function A(){
        echo "ok";
    }
    A();

    // Comparison JavaScript & PHP
    // อ้างอิง: https://www.lullabot.com/articles/learning-javascript-from-php-a-comparison#variables-scope

    // array เปล่า
        // เขียน Array ในรูปแบบ JavaScript
        // var a = []; 

        // เขียน Array ในรูปแบบ PHP
        $a = array();
    
    // array unit value
        // เขียน Array ในรูปแบบ JavaScript
        // var a0 = (1,2)

        // เขียน Array ในรูปแบบ PHP
        $a0 = array(1, 2); 
        var_dump($a0);

    // array muti value
        // เขียน Array ในรูปแบบ JavaScript
        // var a1 = (0,"ok",[10,10])

        // เขียน Array ในรูปแบบ PHP
        $a1 = array(0, "ok", array(10,10)); 
        var_dump($a1);
    
    //3.1
        $a[] = 20;
        echo "new";
        var_dump($a);
    
    //3.2
        array_push($a, "30"); //อื่นๆ ex. array_slice
        echo "3.2";
        var_dump($a);
        echo $a[1];
        

    //4. object key-value
        //4.1 dictionary style
        //4.2 class style
        
        //4.1 dictionary style
        //4.1.1 empty
            // JavaScript
                // var obj1 = {}
            // PHP
                $obj1 = array();    
        //4.1.2 with init values 
            // JavaScript
                // var obj2 = {"name";"A","age":20};
            // PHP
                $obj2 = array("name"=>"A", "age"=>20); // key-value => associatied array. 
                var_dump($obj2);
                var_dump(json_encode($obj2));

        //4.2 class style
        class User{
           public $name;
           public $age;
        }
        /* Associative Array
            การใช้ Key แทนการอ้างอิง โดยค่าที่เก็บคือ Value โดยค่าของ Value
        */

        //-------------------------------------------------
        //การใช้งาน
        $user = new User();
        $user->name = "B";
        $user->age = 21;
        var_dump($user);
        // obj-> str
        var_dump(json_encode($user));
        echo "<br>";
        // obj-> str => str-> obj
        $c = json_decode(json_encode($user));
        var_dump($c);
        
        //-------------------------------------------------
        // obj-> str
        $str_user = json_encode($user);
        // str-> obj
        $c1= json_decode($str_user);
        
        // $c1["name"] = $c1["name"]."0001"; //error
        // var_dump($c1); //error
        
        //edit by
        $c1->name = $c1->name."0001"; 
        var_dump($c1);

        //-------------------------------------------------
        echo "<br>";
        //str-> obj
        $c2 = json_decode($str_user,true);  //associated
        var_dump($c2);
        $c2["name"] = $c2["name"]."0002";   //class
        var_dump($c2);
        //-------------------------------------------------

;?>