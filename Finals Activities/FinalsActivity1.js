function add(){
    let num1 = Number(document.getElementById("number1").value);
    let num2 = Number(document.getElementById("number2").value);    
    document.getElementById("result").innerHTML = num1 + num2;  
}

function subtract(){
    let num1 = Number(document.getElementById("number1").value);
    let num2 = Number(document.getElementById("number2").value);    
    document.getElementById("result").innerHTML = num1 - num2;  
}

function multiply(){
    let num1 = Number(document.getElementById("number1").value);
    let num2 = Number(document.getElementById("number2").value);    
    document.getElementById("result").innerHTML = num1 * num2;  
}

function divide(){
    let num1 = Number(document.getElementById("number1").value);
    let num2 = Number(document.getElementById("number2").value);    
    document.getElementById("result").innerHTML = num1 / num2;  
}