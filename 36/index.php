
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
</head>
<body>

            

    <div class='panel'>
        <div class='panel-up'>
            <div class='panel-flag'>
                <button class='button red'>
                <button class='button yellow'>
                <button class='button green'>

            </div>
            <div class='panel-input'>
                <input class='input' type='text' value='0'>
            </div>
        </div>

        <div class='panel-down'>
            <button class='button-num' data-value="A/C">A/C</button>
            <button class='button-num symb' data-value="-" >+/-</button>
            <button class='button-num symb' data-value="%" >%</button>
            <button class='button-num symb' data-value="/" >/</button>
            <button class='button-num' data-value="7" >7</button>
            <button class='button-num' data-value="8" >8</button>
            <button class='button-num' data-value="9" >9</button>
            <button class='button-num symb' data-value="*" >x</button>
            <button class='button-num' data-value="4" >4</button>
            <button class='button-num' data-value="5" >5</button>
            <button class='button-num'data-value="6" >6</button>
            <button class='button-num symb' data-value="-" >-</button>
            <button class='button-num' data-value="1" >1</button>
            <button class='button-num' data-value="2" >2</button>
            <button class='button-num' data-value="3" >3</button>
            <button class='button-num symb' data-value='+' >+</button>
            <button class='button-num long' data-value="0" >0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
            <button class='button-num' data-value="," >,</button>
            <button class='button-num symb' data-value="=" >=</button>
        </div>
    </div>

<script>

// var rez = document.querySelector(".input").value;



function result(button) {
    console.log(button);
    // if (rez=='0'){
    //     rez='';
    // }
    // val=button.value;
    // console.log(val);
    // rez=rez+val;

    // document.querySelector(".input").value=rez;
    
}

var btn = document.querySelectorAll(".button-num");

for (var xi = 0; xi < btn.length; xi++) {
    console.log(btn[xi]);
    btn[xi].addEventListener("click", function(e) {
        e.preventDefault();
        console.log(e);
        result(btn[xi]);
    });
    // console.log(btn[i].value);

}



</script>
</body>


