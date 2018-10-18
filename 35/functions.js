


// function untilXmas() {

//     var oneMinute = 60 * 1000;
//     var oneHour = oneMinute * 60;
//     var oneDay = oneHour * 24;
//     var today = new Date();
//     var setDay = new Date();
 
//     setDay.setMonth('11');
//     setDay.setDate('25');
//     var diff = setDay.getTime() - today.getTime();
//     days = Math.round(diff/oneDay);
//     console.log(days);

//     return days;
// }





function daysUntil($year,$month,$day,$hour) {
    var oneMinute = 60 * 1000;
    var oneHour = oneMinute * 60;
    var oneDay = oneHour * 24;
    var today = new Date();
    var setDay = new Date();
 
    setDay.setFullYear($year);
    setDay.setMonth($month);
    setDay.setDate($day);
    setDay.setHours($hour);

    var diff = setDay.getTime() - today.getTime();
    days = [Math.round(diff/oneDay),Math.abs(diff/oneHour)];
    console.log(days);
    return days;
}


