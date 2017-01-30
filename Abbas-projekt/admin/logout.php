<?php
session_start();
session_destroy(); // Förstöra alla sessions 

header("Location: ../index.php?page=admin"); // omdirigera till admin-inloggning

?>