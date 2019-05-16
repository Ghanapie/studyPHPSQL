<?php

  //msql접속
  $conn = mysqli_connect("localhost", "root", "0286655", "opentutorials", "3307");

  //insert문
  $sql =  "
    INSERT INTO topic (
        title,
        description,
        created
    ) VALUES (
        'MySQL',
        'MySQL is ....',
        NOW()
    )";

  //쿼리문 날리기
  $result = mysqli_query($conn,$sql);

  if($result == false){
    //mysql error comment
    echo mysqli_error($conn);
  }

 ?>
