<?php
   $content = "include/main.php";
   
   if (isset($_GET["p"])) {
       switch($_GET["p"]){
            case "login":
               $content = "include/login.php";
               break;
            case "logout":
                $content = "include/logout.php";
                break;
            case "show_search":
                $content = "include/show_search.php";
                break;
            case "profile":
                $content = "include/profile.php";
                break;
            case "own_list":
                $content = "include/own_list.php";
                break;
       }   
   }
?>