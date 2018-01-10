(function() {

console.log("connected");

// Variables
var submit = document.querySelector('.btn-primary');


// Fuction
function contactForm(){
  // type: "POST",
  //    url: "contact.php"
  var php;
php = XMLHttpRequest();
php.open("GET", contact.php, false);
}

function fresh()
{
  document.querySelector("#contactForm").reset();
  // console.log("work?");
}


// Listeners
submit.addEventListener('click',contactForm, false);
window.addEventListener('load', fresh, false);

})();
