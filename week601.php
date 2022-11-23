<?php
  $role = 'subscribe2';
  $message = '';

  if('admin'=== $role){
    $message ='Welcome, Admin';
  }elseif('author'===$role){
    $message ='Welcome , Author';
  } elseif('subscribe'===$role){
    $message ='Welcome, Subscribe';
  }else{
    $message ='Sorry';
  }
  print($message);
?>