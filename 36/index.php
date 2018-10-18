
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
            <button type="submit" class='button-num' name="A/C" value="Hello">A/C</button>
            <button type="submit" class='button-num symb' name="-" value="-" >+/-</button>
            <button type="submit" class='button-num symb' name="%" value="%" >%</button>
            <button type="submit" class='button-num symb' name="/" value="/" >/</button>
            <button type="submit" class='button-num' name="7" value="7" >7</button>
            <button type="submit" class='button-num' name="8" value="8" >8</button>
            <button type="submit" class='button-num' name="9" value="9" >9</button>
            <button type="submit" class='button-num symb' name="*" value="*" >x</button>
            <button type="submit" class='button-num' name="4" value="4" >4</button>
            <button type="submit" class='button-num' name="5" value="5" >5</button>
            <button type="submit" class='button-num' name="6" value="6" >6</button>
            <button type="submit" class='button-num symb' name="-" value="-" >-</button>
            <button type="submit" class='button-num' name="1" value="1" >1</button>
            <button type="submit" class='button-num' name="2" value="2" >2</button>
            <button type="submit" class='button-num' name="3" value="3" >3</button>
            <button type="submit" class='button-num symb' name='+' value='+' >+</button>
            <button type="submit" class='button-num long' name="0" value="0" >0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
            <button type="submit" class='button-num' name="," value="," >,</button>
            <button type="submit" class='button-num symb' name="=" value="=" >=</button>
        </div>
    </div>

<script>

var rez = document.querySelector(".input").value;



function result() {
    rezo=document.querySelector(".button-num").value;
    rez=rez+rezo;
    document.querySelector(".input").value=rez;
}

document.querySelector(".button-num").addEventListener("click", result);



</script>
</body>


