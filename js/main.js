(function() {

console.log("connected");

// Variables

    // ABout
var aboutButton = document.querySelector('.aboutButton');
var resumeButton = document.querySelector('.resumeButton');
var experienceButton = document.querySelector('.experienceButton');
var educationButton = document.querySelector('.educationButton');
var skillButton = document.querySelector('.skillsButton');


    // Parallax
var aboutInfo = document.querySelector('.aboutInfo');
var experience = document.querySelector('.experience');
var education = document.querySelector('.education');
var resume = document.querySelector('.resume');
var skills = document.querySelector('.skills');

var about = document.querySelector('.aboutInfo');
var resume = document.querySelector('.resumeInfo');
var education = document.querySelector('.educationInfo');
var experience = document.querySelector('.experienceInfo');
var skills = document.querySelector('.skillsInfo');
var img = document.querySelector('.aboutMeImage');


    // Header - HAmburger 
var hamButton = document.querySelector('.hamButton');
var overlay = document.querySelector('.overlay');
var close = document.querySelector('.close');
// Visible
aboutInfo.style.display = 'block';
experience.style.display = 'none';
education.style.display = 'none';
resume.style.display = 'none';
skills.style.display = 'none';

// Functions

    // About Animation
function aboutF(){
  aboutInfo.style.display = 'block';
  experience.style.display = 'none';
  education.style.display = 'none';
  resume.style.display = 'none';
  skills.style.display = 'none';
}

function resumeF(){
  resume.style.display = 'block';
  aboutInfo.style.display = 'none';
  experience.style.display = 'none';
  education.style.display = 'none';
  skills.style.display = 'none';
}

function experienceF(){
  aboutInfo.style.display = 'none';
  experience.style.display = 'block';
  education.style.display = 'none';
  resume.style.display = 'none';
  skills.style.display = 'none';
}

function educationF(){
  aboutInfo.style.display = 'none';
  experience.style.display = 'none';
  education.style.display = 'block';
  resume.style.display = 'none';
  skills.style.display = 'none';
}


function skillsF(){
  aboutInfo.style.display = 'none';
  experience.style.display = 'none';
  education.style.display = 'none';
  resume.style.display = 'none';
  skills.style.display = 'block';
}


    // Parallax
function parallax(event){
  var x = event.clientX;
  if(x<200){
    // TweenMax.to(about, 2, {x:"-5px", ease:Elastic.easeOut})
    // TweenMax.to(resume, 2, {x:"-5px", ease:Elastic.easeOut})
    // TweenMax.to(experience, 1, {x:"-5px", ease:Elastic.easeOut})
    // TweenMax.to(education, 1, {x:"-5px", ease:Elastic.easeOut})
    // TweenMax.to(skills, 1, {x:"-5px", ease:Elastic.easeOut})
    TweenMax.to(img, 1, {x:"-5px", ease:Elastic.easeOut})

  }
  else {
    // TweenMax.to(about, 1, {x:"10px", ease:Elastic.easeOut})
    // TweenMax.to(resume, 1, {x:"10px", ease:Elastic.easeOut})
    // TweenMax.to(experience, 1, {x:"10px", ease:Elastic.easeOut})
    // TweenMax.to(education, 1, {x:"10px", ease:Elastic.easeOut})
    // TweenMax.to(skills, 1, {x:"10px", ease:Elastic.easeOut})
    TweenMax.to(img, 1, {x:"10px", ease:Elastic.easeOut})

  }
}

function openMenu(){
overlay.style.width = "100%";
}

function closeMenu(){
overlay.style.width = "0%";
}


// Listeners
    // About Buttons
aboutButton.addEventListener("click",aboutF,false);
resumeButton.addEventListener("click",resumeF,false);
experienceButton.addEventListener("click",experienceF,false);
educationButton.addEventListener("click",educationF,false);
skillButton.addEventListener("click",skillsF,false);

// window.addEventListener('mousemove', parallax,false);

hamButton.addEventListener('click',openMenu, false);
close.addEventListener('click',closeMenu, false);

})();
