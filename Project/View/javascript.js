const toggleButton = document.getElementsByClassName('toggle-button')[0]
const Burger = document.getElementsByClassName('burger')[0]

toggleButton.addEventListener('click', () => {
  Burger.classList.toggle('active')
})


var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}


function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

function validate(){
  var username=genrate.getElementById("username").nodeValue;
  var password=genrate.getElementById("password").nodeValue;
  
  if(username=="andan"&&password=="Andan1_"){
    alert("login succesfully");
    return true;
  }
  else{
    alert("login failed");
    return false;
  }
}