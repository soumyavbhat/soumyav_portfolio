console.log("conn");
const httpRequest = new XMLHttpRequest();

// var lightbox = document.querySelector('.lightbox');
// lightbox.style.display = 'none';
//
// function lightboxUp() {
// // console.log('yup');
// lightbox.style.display = 'block';
// }

function fillContent(currentIndex, currentObject){
// console.log("??");
  if (!httpRequest) {
      alert('Giving up :(Cannot create an XMLHTTP instance');
      return false;
    }
      httpRequest.onreadystatechange = processRequest;
      console.log("here");
      httpRequest.open('GET', 'admin/scripts/functions.php?id=' + this.id);
      httpRequest.send();

}
function processRequest() {
    if (httpRequest.readyState === XMLHttpRequest.DONE){
      // console.log("x");
      if (httpRequest.status === 200){
          let data = JSON.parse(httpRequest.responseText);
          processResult(data);
      } else {
        // console.log("error");
        alert('There was a problem with the request.');
      }
    }
  }
  function processResult(data) {
    // console.log("data");
    const { dev_image, dev_desc, vid_image, vid_desc, video} = data[0];

    let devImage = document.querySelector('.dev-image').src = dev_image;
    let devDesc = document.querySelector('.dev-desc').innerHTML = dev_desc;
    let vidImage = document.querySelector('.vid-image').src = vid_image;
    let vidDesc = document.querySelector('.vid-desc').innerHTML = vid_desc;
    let vid = document.querySelector('.vid').src = video;

  }

// DEVELOPMENT
var devThumb = document.querySelectorAll(".devThumb");

devThumb.forEach(function(id,index){
 id.addEventListener('click', fillContent, false)
})

// VIDEO
var vidThumb = document.querySelectorAll(".vidThumb");

vidThumb.forEach(function(id,index){
  console.log("works");
  id.addEventListener('click', fillContent,false);
})
