const audio = new Audio("assets/clignotant.ogg")
const audiox = new Audio("assets/MLG - INTERVENTION 420 QUICKSCOPE.mp3")
const audiax = new Audio("assets/How to load the M1 Garand the US Army way.mp3")
const audiablax = new Audio("assets/_1_HOUR__Nya__arigato__You_can_eat_the_girl__AdobeExpress.mp3")
const audiablaxito = new Audio("assets/Call-of-Duty_-Modern-Warfare-_Reloading_-Voicelines-_online-video-cutter.com_.mp3")

var delay = 1300;
var lastClick = 0;
var hp = 200;
var dmg= 19;

let body = document.querySelector("body")
let search = document.getElementById("film");
let intervention = document.getElementById("horizontal")
let ALGERIA = document.getElementById("FRANCE")
let munition = document.getElementById("munition")
let PV = document.getElementById("PV")
i = 0;
j = 4;
search.addEventListener("mouseover", () => {
  audio.play();
})

// ______________________________LA BETE___________________________
intervention.addEventListener("click", () => {
  if (lastClick >= (Date.now() - delay)){return;}
  hp = hp-dmg;
  audiox.play();
  munition.innerHTML= "Munitions restantes "+j+"/5";
  PV.innerHTML= "<h3>SHREKOZORUS</h3><progress value="+hp+" max='200'>100%</progress>" 
  if(hp <= 0){
    PV.innerHTML= '<h4>SHREK "THE LAST OGRE" HAS BEEN SLAIN!</h4><p>The website has been freed...</p>';
    document.getElementById("clio2").style.display = "none";
    document.getElementById("FRANCE").style.display = "none";
    document.getElementById("pépé").style.display = "none";
    document.getElementsByClassName("mute")[0].style.display = "none";
    document.getElementsByClassName("mute")[1].style.display = "none";
    document.getElementsByClassName("mute")[2].style.display = "none";
    document.getElementById("ded").style.display = "none";
    document.getElementById("dede").style.display = "none";






    document.body.style.backgroundColor = "black";
    document.body.style.backgroundImage = "None";

  }
  i++;
  j--;
  if(j == 0){
    j = 5;
  }
  if (i == 5) {
    i = 0;
    audiablaxito.play();
    alert("RELOAD !");
    audiax.play();
  }
  lastClick = Date.now();

// ______________________LA BETE__________________________
})
document.addEventListener("keydown", (e) => {
  if (e.key == 'M') {
    audio.muted = !audio.muted;
  }
  if (e.key == 'O') {
    search.style.pointerEvents = "auto";
  }
  if (e.key == 'P') {
    search.style.pointerEvents = "none";
  }
})
body.addEventListener("click", () => {
  audio.pause();
  audio.currentTime = 0;
})

ALGERIA.addEventListener("mouseover", () => {
  audiablax.play();
// for($i = 0; $i<101; $i++){
//   audiablax.setVolume(".".$i)
//   setTimeout(3000)
// }
})
ALGERIA.addEventListener("mouseout", () => {
  audiablax.pause();

})

