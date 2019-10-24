/*rotation du bouton burger*/
$(document).ready(function () {

	$('.nav-toggle').click(function () {
        $('body').toggleClass('nav-expanded')
	});

});



/*fixer la navbar en haut de l'écran*/
/*window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
*/
