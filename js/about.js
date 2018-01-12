(function() {

console.log("connected");


// VARIABLES
var def = document.querySelector(".default"),
    des = document.querySelector(".design"),
    vid = document.querySelector(".vid"),
    dev = document.querySelector(".dev"),
    defS = document.querySelector(".defaultS"),
    desS = document.querySelector(".designS"),
    vidS = document.querySelector(".vidS"),
    devS = document.querySelector(".devS"),
    designButton = document.querySelector("#design");
    videoButton = document.querySelector("#video");
    devButton = document.querySelector("#dev");
    designSButton = document.querySelector("#designS");
    videoSButton = document.querySelector("#videoS");
    devSButton = document.querySelector("#devS");
// var nojs = document.querySelector(".nojs");
//
//     nojs.style.display = 'none';

des.style.display = 'none';
vid.style.display = 'none';
dev.style.display = 'none';
desS.style.display = 'none';
vidS.style.display = 'none';
devS.style.display = 'none';

// FUNCTIONS
function designGraph()
{
  def.style.display = 'none';
  vid.style.display = 'none';
  dev.style.display = 'none';
  des.style.display = 'block';
  defS.style.display = 'none';
  vidS.style.display = 'none';
  devS.style.display = 'none';
  desS.style.display = 'block';

}

function videoGraph()
{
  def.style.display = 'none';
  vid.style.display = 'block';
  dev.style.display = 'none';
  des.style.display = 'none';
  defS.style.display = 'none';
  vidS.style.display = 'block';
  devS.style.display = 'none';
  desS.style.display = 'none';
}

function devGraph()
{
  def.style.display = 'none';
  vid.style.display = 'none';
  dev.style.display = 'block';
  des.style.display = 'none';
  defS.style.display = 'none';
  vidS.style.display = 'none';
  devS.style.display = 'block';
  desS.style.display = 'none';

}



// LISTENERS
designButton.addEventListener("click", designGraph, false);
videoButton.addEventListener("click", videoGraph, false);
devButton.addEventListener("click", devGraph, false);
designSButton.addEventListener("click", designGraph, false);
videoSButton.addEventListener("click", videoGraph, false);
devSButton.addEventListener("click", devGraph, false);

})();
