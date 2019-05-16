<?php
  //msql접속
  $conn = mysqli_connect('localhost',
          'root',
          '0286655',
          'opentutorials',
          '3307');
  $sql = "SELECT * FROM topic LIMIT 100";
  $result = mysqli_query($conn, $sql);
  //SELECT문 만났을 때 리턴 : mysqli_result 객체
  //객체 정보
  // int current field
  // int field count
  // arry lengths
  // int num_rows

  var_dump($result);



?>
