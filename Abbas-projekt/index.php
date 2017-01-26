<?php 
    include('header.php');
?>


<?php
    if (isset($_GET['page'])) { 
        $p = $_GET['page'];
        
        switch ($p) {

            case 'home':
                include ('home.php');
                break;

            case 'about':
                include ('about.php');
                break;

            case 'portfolio':
                include ('portfolio.php');
                break;

            case 'contact':
                include ('contact.php');
                break;

            case 'admin':
                include ('admin.php');
                break;

            default:
                include ('home.php');
                break; 
        }
    } else {
        include ('home.php');
    }
?>

<?php include('footer.php'); ?>