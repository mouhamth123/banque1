/*!
 * Start Bootstrap - Grayscale v5.0.9 (https://startbootstrap.com/template-overviews/grayscale)
 * Copyright 2013-2019 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-grayscale/blob/master/LICENSE)
 */

!function(e){"use strict";e('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var a=e(this.hash);if((a=a.length?a:e("[name="+this.hash.slice(1)+"]")).length)return e("html, body").animate({scrollTop:a.offset().top-70},1e3,"easeInOutExpo"),!1}}),e(".js-scroll-trigger").click(function(){e(".navbar-collapse").collapse("hide")}),e("body").scrollspy({target:"#mainNav",offset:100});function a(){100<e("#mainNav").offset().top?e("#mainNav").addClass("navbar-shrink"):e("#mainNav").removeClass("navbar-shrink")}a(),e(window).scroll(a)}(jQuery);



let exampleInputEmail1=document.getElementById('exampleInputEmail1');
let exampleInputPassword1=document.getElementById('exampleInputPassword1');
let Submit=document.getElementById('Submit');
let form=document.getElementById('form');
let error=document.getElementById('error');




exampleInputEmail1.addEventListener("focusout",function(e){

e.preventDefault();



if(exampleInputEmail1=="" ){
     error.innerHTML="veuiller remplir les champs vides";
     Submit.disabled=true;
}})
exampleInputPassword1.addEventListener("focusout",function(e){

e.preventDefault();



if(exampleInputPassword1=="" ){
     error.innerHTML="veuiller remplir les champs vides";
     Submit.disabled=true;

}else {
	Submit.disabled=false;
}


})



Submit.addEventListener("submit",function(e){

e.preventDefault();


})