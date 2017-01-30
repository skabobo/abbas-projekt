/********************************
COUNTDOWN
*********************************/

getDaysAndHours("2018-01-15","#dday", "#dhour");//Visar tiden direkt
var a = setInterval( ()=>{ getDaysAndHours("2018-01-15","#dday", "#dhour"); },1000*60)


getDaysAndHours("2018-05-31","#dday2", "#dhour2");//Visar tiden direkt
var b = setInterval( ()=>{ getDaysAndHours("2018-05-31","#dday2", "#dhour2"); },1000*60)

//Upprepa rad 5-6 och 9-10 med en annan sluttid
function getDaysAndHours(target, days, hours) {
  var today=new Date();
  var endDate=new Date(target);
  var diff=(endDate-today)/1000;
  diff=diff/3600; //timmar
  var dagar=diff/24;// dagar
  timmar=diff- parseInt(dagar)*24;

  $(days).html(parseInt(dagar));
  $(hours).html(parseInt(timmar));
}

/*(function start() {
	v = setInterval(mytimer, 1); //för att timern ska köras direkt.
    v = setInterval(mytimer, 1000); //för att inte belasta datorn för mycket.
    x = setInterval(mytimer2, 1)
    x =  setInterval(mytimer2, 1000);
})();
    
//start ();

function mytimer() { 
    var obj = getTime(new Date(2018,0,15)); //Skapar datumobjekt med slutdatum och skicar datumet till getTime.
    // 0=januari 1=februari osv 
    if(obj.days<=0 && obj.hours<=0)  {
    	clearInterval(v); //Stoppa timern
        document.getElementById("on-lia").innerHTML = "I'm on my LIA!";
    }
  //jQUERY
  $("#dday").html(obj.days);
  $("#dhour").html(obj.hours);

	//document.getElementById("dday").innerHTML = obj.days;
	//document.getElementById("dhour").innerHTML = obj.hours;
	//document.getElementById("dmin").innerHTML = obj.minutes;
	//document.getElementById("dsec").innerHTML = obj.seconds;
}


function mytimer2() {
        //var d=new Date(2017,11,24);
	var obj = getTime(new Date(2018,4,31));
	if(obj.days<=0 && obj.hours<=0)  {
        clearInterval(x); //Stoppa timern
		document.getElementById("graduated").innerHTML = "Graduated!";
	}

  //jQUERY
  $("#dday2").html(obj.days);
  $("#dhour2").html(obj.hours);

	//document.getElementById("dday2").innerHTML = obj.days;
	//document.getElementById("dhour2").innerHTML = obj.hours;
	//document.getElementById("dmin2").innerHTML = obj.minutes;
	//document.getElementById("dsec2").innerHTML = obj.seconds;
}
   

function getTime(endtime) {
	var t = endtime.getTime() - new Date().getTime(); // slutdatumet minus dagens datum.
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
	var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
		'total': t,
		'days': days,
		'hours': hours,
		'minutes': minutes,
		'seconds': seconds
    };
}*/



