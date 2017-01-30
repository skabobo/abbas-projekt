jQuery.konami = function(fn, code) {
    // ↑ ↑ ↓ ↓ ← → ← → 38, 38, 40, 40, 37, 39, 37, 39
    // A B B A S = 65, 66, 66, 65, 83 
    code = code || [65, 66, 66, 65, 83];
    var i = 0;

    $(document).keydown(function(e) {
        var char = typeof code === 'string' ? String.fromCharCode(e.which).toLowerCase() : e.which;
        i = char === code[i] ? i + 1 : 0;
        if (i === code.length) {
            fn();
            i = 0;
        }
    });
};

$.konami(function() {
    if (window.confirm('Vill du spela Hänga Gubbe')) {
        window.open('hangman.php', '_blank');

    };
});