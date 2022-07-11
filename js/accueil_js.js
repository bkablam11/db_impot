// JavaScript Document
(function (){
//	document.getElementsByClassName('li-main')[0].onclick = function (e) {
//
//	 if(document.getElementsByClassName('ul-opt')[0].style.display == "block" ||
//					document.getElementsByClassName('ul-opt')[0].style.display == ""){
//		 document.getElementsByClassName('ul-opt')[0].style.display = "none"
//	 }else
//	   document.getElementsByClassName('ul-opt')[0].style.display = "block"
//
//    }

$(document).ready(function (){
    $('#name-pren')
    .popover({ title: 'Twitter Bootstrap Popover', content: "It's so simple to create a tooltop for my website!" })
    .blur(function () {
                               $(this).popover('hide');
                           });
    console.log("load ended!")
})

})();
