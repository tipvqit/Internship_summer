<?php
  $string_ = '{"a":"1","b":"2","c":"3"}';
  var_dump($string_);
  echo "<hr>";
  echo "<center><b>Insert associative array</b></center>";
  //-----------------------------------------------------------------------
  
  echo "<center><b>First</b></center>";
  //การเพิ่มแบบ associative array
  $array_asso = json_decode($string_, true);
  var_dump($array_asso);
  
  //เพิ่มที่ตำแหน่งเริ่มต้น
  $first = array("z"=>"0") + $array_asso;
  var_dump($first);
  
  $string_first = json_encode($first);
  var_dump($string_first);
  //-----------------------------------------------------------------------
  
  echo "<center><b>Last</b></center>";
  //การเพิ่มแบบ associative array
  $array_asso2 = json_decode($string_, true);
  var_dump($array_asso2);
  
  //เพิ่มที่ตำแหน่งสุดท้าย
  $last = $array_asso2 + array("d"=>"4");
  var_dump($last);
  
  $string_last = json_encode($last);
  var_dump($string_last);
  echo "<hr>";
  //-----------------------------------------------------------------------
  
  echo "<center><b>Delete associative array</b></center>";
  //การลบแบบ associative array
  $array_asso3 = json_decode($string_);
  var_dump($array_asso3);

  // การลบต้องอ้างอิง key
  unset($array_asso3->a);
  var_dump($array_asso3);

  $string_del = json_encode($array_asso3);
  var_dump($string_del);
  echo "<hr>";
?>
