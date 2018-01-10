(function() {

// console.log("connected");

// Variables
var home = document.querySelector('.home');
var arrow = document.querySelector('.arrow');

// Functions

function website(event)
{
// home.style.display = 'none';
TweenMax.to(home, 1, {y:"-1500px", ease:Power0.easeOut})
console.log("window");

setTimeout(function(){
       window.location.href = 'about.php';
    }, 500);

// window.addEventListener('mouseover',about, false);
// }
//
// function about(){
//   window.location = "about.php";
}
// function bg() {
//
//   var element = document.querySelector('.background');
//   element.style.backgroundImage = "none";
//   element.style.backgroundImage = "url(../images/desktop/indexBg.gif?"+new Date().getTime()+")";
// }


// Listeners
arrow.addEventListener('mouseover', website, false);
arrow.addEventListener('touchmove', website, false);
// window.addEventListener('load', bg, false);

})();
