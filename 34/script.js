



var users = document.querySelectorAll(".box-heading_data")

  for (var i = 0;  i < users.length; i++) {
   users[i].style.fontStyle="italic" ;
//    users[i].style.color="#FF9F1C";
   console.log(users[i]);
 
  }

  var table = document.querySelectorAll("a.two")

  for (var i = 0;  i <table.length; i++) {
    
    table[i].style.fontStyle="italic" ;
    table[i].style.fontSize="14px";
    table[i].style.color="#FF9F1C";
    console.log(table[i]);

  }

  
  var table = document.querySelectorAll("a.one")

  for (var i = 0;  i <table.length; i++) {
    
    table[i].style.fontStyle="italic" ;
    table[i].style.fontSize="16px";
    table[i].style.color="#011627";
    console.log(table[i]);

  }  

  var table = document.querySelectorAll("h1.one")

  for (var i = 0;  i <table.length; i++) {
    table[i].style.color="#024f18";
    console.log(table[i]);

  }  

  var btn = document.querySelectorAll(".btn")

  for (var i = 0;  i <btn.length; i++) {
    btn[i].style.backgroundColor="#FF9F1C";
    btn[i].style.border="none";
   
   

  }  




var el = document.querySelector(".xmas");
var date = new Date;
var y = "2018";
var m = "11";
var d = "25";
var h = date.getHours();
var array=daysUntil(y,m,d,h);
el.innerHTML="O iki kalėdų liko  "+ array['0']+"  d.";
console.log(el);


document.querySelector(".btn").addEventListener("click", displayDate);
document.querySelector(".inp").addEventListener("change", displayDate);
function displayDate() {
    document.querySelector(".subpanel").innerHTML = Date();
}

document.querySelector(".dropbtn").addEventListener("click", menu);
function menu() {
  var bt = document.querySelector(".dropbtn");
 
  if (bt.style.backgroundColor != "#FF9F1C") {
    bt.style.backgroundColor="#FF9F1C";
    bt.style.cursor="pointer";
    bt.style.transform="rotate(180deg)";
    bt.style.transition="all 0.3s ease-in-out 0s";
    var block = document.querySelectorAll(".dropdown-content");
    for (var i = 0;  i < block.length; i++) {
    block[i].style.display="block" ;

    }
  }
  else if(bt.style.backgroundColor == "#FF9F1C"){
    bt.style.backgroundColor="#2EC4B6";
    bt.style.cursor="default";
    bt.style.transform="rotate(90deg)";
    bt.style.transition="all 0.3s ease-in-out 0s";
    var block = document.querySelectorAll(".dropdown-content");
    for (var i = 0;  i < block.length; i++) {
    block[i].style.display="none" ;
    }
  }
}

