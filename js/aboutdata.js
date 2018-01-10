(function () {

// var desc = document.querySelector(".about_desc");
const httpRequest = new XMLHttpRequest();


    function aboutData(){
      const url = './admin/scripts/functions.php?aboutDesc=' + this.id;

      fetch(url)
      .then((resp)=>resp.json())
      .then(({about_desc})=>{
        let desc = document.querySelector(".about_desc").innerHTML = about_desc;
        // desc.innerHTML = about_desc;
        // console.log("works");


      })
    // })
      // .catch(function(error)
      // {
      //   console.log(error);
      // });

    }



aboutData.call(document.querySelector(".about_desc"));
// skillName.call(document.querySelector(".skill_name"));
})();
