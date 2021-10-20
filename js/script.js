
document.addEventListener('DOMContentLoaded', function () {

    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
});

// Or with jQuery

$(document).ready(function () {
    $('.collapsible').collapsible();
});


//Modal Contato

const elemsModal = document.querySelectorAll(".modal");
const instancesModal = M.Modal.init(elemsModal);