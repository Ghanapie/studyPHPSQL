<?php
  function print_title(){
    if(isset($_GET['id'])){
      echo htmlspecialchars($_GET['id']);
    }
    else{
      echo "Welcome";
    }
  }
 ?>

 <?php
  function print_description(){
    if(isset($_GET['id'])){
      $basename = basename($_GET['id']);
      echo htmlspecialchars(file_get_contents("data/".$basename));
    }
    else {
      echo "Hello PHP";
    }
  }
  ?>

  <?php
  function print_list(){
    $list = scandir('./data');
    $i = 0;
    while($i < count($list)){
      $list_scure = htmlspecialchars($list[$i]);
      if($list[$i] != '.' && $list[$i] != '..'){
        echo "<li><a href=\"index.php?id=$list_scure\">$list_scure
        </a></li>\n";
      }
      $i = $i + 1;
    }
  }
   ?>
