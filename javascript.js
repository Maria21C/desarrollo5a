function Restar(){
    let num1= document.getElementById("txtNumero1").value;
    let num2= document.getElementById("txtNumero2").value;
    
    let respuesta = num1-num2;

    alert("RESULTADO: "+respuesta);
}
function Sumar(){
    let num1= document.getElementById("txtNumero1").value;
    let num2= document.getElementById("txtNumero2").value;
    
    let respuesta = Number(num1)+Number(num2);

    alert("RESULTADO: "+respuesta);
}

function Dividir(){
    let num1= document.getElementById("txtNumero1").value;
    let num2= document.getElementById("txtNumero2").value;
    
    let respuesta = num1/num2;

    alert("RESULTADO: "+respuesta);
}

function Multiplicar(){
    let num1= document.getElementById("txtNumero1").value;
    let num2= document.getElementById("txtNumero2").value;
    
    let respuesta = num1*num2;

    alert("RESULTADO: "+respuesta);
}

function Salir(){
    window.location ="Curriculum.php";

}