




var el = document.querySelector(".xmas");
var date = new Date;
var y = "2018";
var m = "11";
var d = "25";
var h = date.getHours();
var array=daysUntil(y,m,d,h);
el.innerHTML="O iki kalėdų liko  "+ array['0']+"  d.";
console.log(el);


