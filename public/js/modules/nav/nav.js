document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

$(document).ready(function(){
    $('.sidenav').sidenav();
});

window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;
    if(scroll !== 0){
        $("#main-nav").css( "background","white");
        return $("#main-nav").css( "position","fixed");
    }
    $("#main-nav").css( "background","transparent");
    $("#main-nav").css( "position","")
});
