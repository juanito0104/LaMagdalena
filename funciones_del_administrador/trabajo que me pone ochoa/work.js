var url = "./../controlador/controlador.php";

function Consultar (){
    $.ajax({
        url: url,
        data: {"accion":"CONSULTAR"},
        type:'POST',
        dataType: 'json'

    }).done(function(response){
        var html = "";

       $.each( response, function(index, data){
            html +="<tr>";

            html +="<td>"+ data.nombredepromocion+"</td>";
            html +="<td>"+ data.contenido+"</td>";
            html +="<td>"+ data.precio+"</td>";
            html +="<td>";
            html +="<button class='btn btn-warning' onclick='ConsultarPorId("+ data.idpromociones + ");'><span class ='fa fa-edit'></span>modificar</button>"
            html +="<button class='btn btn-danger' onclick='Eliminar("+ data.idpromociones + ");'><span class ='fa fa-trash'></span>Eliminar</button>"
            html +="</td>";
            html += "</tr>";
       });

       document.getElementById("datos").innerHTML = html;

        

    }).fail(function (response){
        console.log(response);

    });

}

function ConsultarPorId(idpromociones){
    $.ajax({
        url: url,
        data: {"idpromociones" : idpromociones, "accion" : "CONSULTAR_ID"},
        type: 'POST',
        dataType:'json'

    }).done(function(response){
        document.getElementById('nombredepromocion').value = response.nombredepromocion;
        document.getElementById('cont').value = response.contenido;
        document.getElementById('precio').value = response.precio;
        document.getElementById('idpromociones').value = response.idpromociones ;

    }).fail(function(response){
        console.log(response);

    });

}

function guardar(){
    $.ajax({
        url: url,
        data: retornarDatos("GUARDAR"),
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response == "OK"){
            alert("Datos Guardados Con ÉXITO")
        }else{
            alert(response);
        }
    }).fail(function(response){
        console.log(response)
    });
}

function modificar(){
    $.ajax({
        url: url,
        data:  retornarDatos("MODIFICAR"),
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response == "OK"){
            alert("Datos Guardados Con ÉXITO")
        }else{
            alert(response);
        }
    }).fail(function(response){
        console.log(response)
    });
}

function Eliminar(idpromociones){
    $.ajax({
        url: url,
        data: {"idpromociones": idpromociones, "accion": "ELIMINAR"},
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response == "OK"){
            alert("Datos Borrados Con Éxtito")
        }else{
            alert(response)
        }
    }).fail(function(response){
        console.log(response)
    });


}

function validar(idpromociones){
    
    nombres = document.getElementById('nombredepromocion').value;
    contenido = document.getElementById('contenido').value;
    precio = document.getElementById('precio').value;
    
    if(nombres == "" || contenido == "" || precio == ""){
        return false
    }
    return true;
   
}

function retornarDatos(accion){
    return{
        "nombres" : document.getElementById('nombredepromocion').value,
        "contenido" : document.getElementById('cont').value,
        "precio" : document.getElementById('precio').value,
        "accion": accion,
        "idpromociones": document.getElementById("idpromociones").value
    }
} 


