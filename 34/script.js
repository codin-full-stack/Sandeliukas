
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


