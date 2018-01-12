console.log("conn");
const httpRequest = new XMLHttpRequest();



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
    console.log("data");
    const {gallery_name, gallery_desc, video_name} = data[0];

    let lightHeader = document.querySelector('.light-header').src = gallery_name;
    let lightImg = document.querySelector('.light-img').src = video_name;
    let lightDesc = document.querySelector('.light-desc').innerHTML = gallery_desc;
    // let lightThumb = document.querySelector('.light-thumb').src = port_thumb;

  }
  // var port = document.querySelectorAll(".port-img");

var gallery = document.querySelectorAll(".gallery");
// gallery.addEventListener('click',fillContent,false);
// gallery.addEventListener('click', lightboxUp, false);
gallery.forEach(function(id,index){
 id.addEventListener('click', fillContent, false)
})


// DEVELOPMENT
