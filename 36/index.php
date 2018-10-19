
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Calculator</title>
</head>
<body>

            

    <div class='panel'>
        <div class='panel-up'>
            <div class='panel-flag'>
                <button class='button red'></button>
                <button class='button yellow'></button>
                <button class='button green'></button>

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
            <button class='button-num' data-value="6" >6</button>
            <button class='button-num symb' data-value="-" >-</button>
            <button class='button-num' data-value="1" >1</button>
            <button class='button-num' data-value="2" >2</button>
            <button class='button-num' data-value="3" >3</button>
            <button class='button-num symb' data-value='+' >+</button>
            <button class='button-num long' data-value="0" >0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
            <button class='button-num' data-value="." >,</button>
            <button class='button-num symb' data-value="=" >=</button>
        </div>
    </div>

    <script type="text/javascript" src="script.js"></script>
</body>
</html>