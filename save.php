<?php
  echo "
    <h4>ตัวเลือกข้อสอบ</h4>
    <p>โจทย์ {$_REQUEST['cName']}</p>
    <p>รายละเอียด {$_REQUEST['cDetail']}</p>
    <ol>
  ";

  foreach($_REQUEST['cChoice'] AS $cChoice){
    echo "<li>{$cChoice}</li>";
  }

  echo "</ol>";
?>