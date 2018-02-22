$(document).ready(function(){
    $(window).scroll(function () {
        $('#btn-top').tooltip('hide');
       });
       // scroll body to 0px on click
       $('#btn-top').click(function () {
           $('#btn-top').tooltip('hide');
           $('body,html').animate({
               scrollTop: 0
           }, 800);
           return false;
       });

       $('#btn-top').tooltip('show');
});