(function(){
var wb = document.querySelector('.wb'),
    db = document.querySelector('.db'),
    vb = document.querySelector('.vb'),
    webGallery = document.querySelector('.webGallery');
    vidGallery = document.querySelector('.videoGallery');
desGallery = document.querySelector('.desGallery');

desGallery.style.display = 'none';
vidGallery.style.display = 'none';
function web()
{
  webGallery.style.display = 'block';
vidGallery.style.display = 'none';
desGallery.style.display = 'none';

}

function des()
{
  webGallery.style.display = 'none';
  vidGallery.style.display = 'none';
  desGallery.style.display = 'block';

}

function vid()
{
  webGallery.style.display = 'none';
  vidGallery.style.display = 'block';
  desGallery.style.display = 'none';

}

wb.addEventListener("click", web, false);
db.addEventListener("click", des, false);
vb.addEventListener("click", vid, false);

})();
