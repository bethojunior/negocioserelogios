document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    // var instances = M.Sidenav.init(elems, options);
});

$(document).ready(function(){
    $('.sidenav').sidenav();
});

window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    if(scroll === 0){
        $("#main-nav").addClass('nav-normal');
        return $("#main-nav").removeClass('nav-fixed');
    }
    $("#main-nav").addClass('nav-fixed');
    $("#main-nav").removeClass('nav-normal');
});
