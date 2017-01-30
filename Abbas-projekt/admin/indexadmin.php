<?php 
    include('headeradmin.php');
    session_start();  

    if( !isset($_SESSION['admin']) ){
        header("Location: ../index.php?page=admin"); // kod för att inte loggas in i adminsidan när man skriver URL i adressfältet utan kod. Om vi inte har en SESSION som är true skickas man tillbaka till admin/login-sidan.  
     }
?>


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

<?php include('footeradmin.php'); ?>