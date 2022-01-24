elementProperty = new ElementProperty();

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    $('.modal').modal();
});

$(document).ready(function(){
    $('.sidenav').sidenav();
    $('select').formSelect();
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

elementProperty.addEventInElement('#search-product','onclick',function(){
    $('#modal-search').modal('open');

})
elementProperty.addEventInElement('#search-mobile','onclick',function(){
    $('#modal-search').modal('open');
    $('.sidenav').sidenav();
})
