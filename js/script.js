


/*============================Nice Scroll Starts=======================*/
$(function(){
	$("body").niceScroll({
		cursorcolor: "#FF8C00",
		cursorwidth: "10px",
		cursorborder: "none"
	});
})
/*============================Nice Scroll Ends=======================*/

/*============================Go to Top Button Section Starts=======================*/
function goTop()
{
	$('html, body').animate({ scrollTop: 0 }, 'slow');  //For Chrome, Safari, and Opera
	document.documentElement.scrollTop = 0; // For IE and Firefox
}

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        document.getElementById("buttonTop").style.display = "block";
    } else {
        document.getElementById("buttonTop").style.display = "none";
    }
}
/*============================Go to Top Button Section Ends=======================*/


