document.querySelector('#button').addEventListener('click', Horario);
function Horario(){
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'HorarioClases.json',true);
    xhttp.send();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let datos = JSON.parse(this.responseText);
            let tabla = document.querySelector('#tabla');
            tabla.innerHTML = '' ;
            
            for(let item of datos){
                tabla.innerHTML += `
                <tr>
                <td>${item.Lunes}</td>
                <td>${item.Martes}</td>
                <td>${item.Miercoles}</td>
                <td>${item.Jueves}</td>
                <td>${item.Viernes}</td>
                </tr>
                `

            } 
        }
    }
}
