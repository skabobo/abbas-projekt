<?php include('headeradmin.php'); ?>


<?php
    if (isset($_GET['page'])) { 
        $p = $_GET['page'];
        
        switch ($p) {

            case 'home':
                include ('homeadmin.php');
                break;

            case 'about':
                include ('aboutadmin.php');
                break;

            case 'portfolio':
                include ('portfolioadmin.php');
                break;

            case 'contact':
                include ('contactadmin.php');
                break;

            default:
                include ('homeadmin.php');
                break; 
        }
    } else {
        include ('homeadmin.php');
    }
?>