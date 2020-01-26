$('nav li a').filter(function(){
    $('nav li.active').removeClass('active');
     return this.href === location.href;
   }).parent().addClass('active');
