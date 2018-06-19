<?php 
  if(isset($_POST['submit'])){
    if($_POST['firstname'] && $_POST['lastname']){
    echo "Welcome " . $_POST['firstname'] . " " . $_POST['lastname'] . "!";
    }else{
      echo "Please Insert your Name!!!";
    }
  }
?>