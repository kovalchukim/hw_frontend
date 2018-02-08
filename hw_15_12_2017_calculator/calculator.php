<script>
    var num1,num2,result,oper;
    num1=+prompt("Type a first number");

    if(num1 && Number.isInteger(num1)){
        num2=+prompt("Type a second number");

        if(num2 && Number.isInteger(num2)){
            oper=prompt("Type an operator");

            if(oper=="+") {
                result = Number(num1) + Number(num2);
            }else if(oper=="/"){
                result=Number(num1)/Number(num2);
            }else if(oper=="*"){
                result=Number(num1)*Number(num2);
            }else if(oper=="-"){
                result=Number(num1)-Number(num2);
            } else {
                result = "You type bad operator"
            }
            alert(result);

        }else{
            alert("It`s not a number!");
        }

    }else{
        alert("It`s not a number!");
    }

</script>
