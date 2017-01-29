function deleletconfig(){

	var del = confirm("Är du säker på att du vill radera detta?");
	if (del == true){
   		header ("Location: indexadmin.php?page=about")
	}
		return del;
	}