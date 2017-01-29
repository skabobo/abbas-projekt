	$(document).ready(function($){
		var path = window.location.search;

		if (path == '') {
   			path = '?page=home';
 		}  

 		var target = $('nav a[href="indexadmin.php'+path+'"]');

 		target.addClass('current');
	});