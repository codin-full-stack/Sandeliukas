var rez = document.querySelector(".input");
var vals = [];




function result2() {
    if (rez.value.indexOf('%') > -1) {
    
        var numberString = rez.value.split(/\D+/);
        var operatorString = rez.value.split(/[^\s()*/%+-]+/);
        var opr=operatorString[1];
        var num1=numberString[0];
        var num2=numberString[0]/100*numberString[1];
        rez.value=num1+opr+num2;
        rez.value=eval(rez.value).toFixed(2);
        var n = rez.value;
        n = parseFloat(n);
        rez.value=n;  
    

    }
    else{
    rez.value=eval(rez.value).toFixed(2);
    var n = rez.value;
    n = parseFloat(n);
    rez.value=n;  
    
    }
}

function result(button) {
    var val = button.getAttribute('data-value');

    if(button.classList.contains('symb') && val != '=' && val != '%') {
        vals.push(val);
    }
    // console.log(rez.value);
    if (rez.value=='0'){
        rez.value='';
    }

    if (val=='='){
        if (rez.value.indexOf('%') > -1) {
            
            var symbol = vals[0];
            var numbers = rez.value.split(symbol);
            var percents = (numbers[0] / 100) * parseInt(numbers[1]);
            var result = numbers[0] + symbol + percents;

            rez.value=eval(result).toFixed(2);
            var n = rez.value;
            n = parseFloat(n);
            rez.value=n;
            val='';
            vals = [];
            
         

        } else {
            rez.value=eval(rez.value).toFixed(2);
            var n = rez.value;
            n = parseFloat(n);
            rez.value=n;
            val='';
            vals = [];
        }
        
    }

    if (val=='A/C'){
        rez.value='0';
        val='';
        vals = [];
    }

   
    // rez.value = rez.value + val;
    rez.value += val;
    
}

var btn = document.querySelectorAll('.button-num');


for (var xi = 0; xi < btn.length; xi++) {
    // console.log(btn[xi]);
    btn[xi].addEventListener("click", function(e) {
        // e.preventDefault();
        result(e.currentTarget);
    });

}


