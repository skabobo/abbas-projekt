/********************************
EXPAND
*********************************/

$(document).ready(function () {
    $('.hidden').hide();
    $('.info-image').click(function () {
        // .parent() selects the A tag, .next() selects the P tag
        $(this).parent().next().slideToggle(200);
    });
    $('.hidden').slideUp(200);
});



/*var hiddens = document.getElementsByClassName('hidden');
var buttons = document.getElementsByClassName("info-image");
for (var i = 0; i < buttons.length; i++) {
    var v = buttons[i];
    v.addEventListener('click', func);
}
        
function func() {
    var idx = Number(this.id); //Bygger på att<i> har id av 0,1,2, ossv
    var h = hiddens[idx].style;

    if (h.display === 'block') {
        h.display = 'none';
    } else {
        h.display = 'block';
    }
}*/