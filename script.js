 function entrar(){
  let usuario = document.getElementById('user').value;
  let clave = document.getElementById('password').value;
  
  if(usuario== "Maria" && clave=="maria22"){
    
    window.location="Curriculum.php";
    
  }else{
    alert("Los datos ingresados no son correptos");
  }

}







