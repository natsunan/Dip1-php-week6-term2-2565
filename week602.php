<?php
$role = 'admin';
$message ='';

switch($role){
    case 'admin';
     $message = 'Welcome Admin';
     break;
     case 'author':
        $massage = 'Welcome, Author';
        break;
         case  'subscribe';
         $message = 'Welcome,Subscribe';
         break;
         default:
         $message ='Sorry';
     }
         print ($message)

?>