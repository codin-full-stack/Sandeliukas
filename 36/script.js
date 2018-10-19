var rez = document.querySelector(".input");
var vals = [];

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

            rez.value=eval(result).toFixed(0);
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


