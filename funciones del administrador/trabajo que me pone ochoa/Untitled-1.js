





var url = "./../controlador/persona.controlador.php";

function consultar (){
    $.ajax({
        url: url,
        data: {"accion":"CONSULTAR"},
        type:'POST',
        datatype: 'json'

    }).done(function(response){
        var html = "";

       $.each( response, function(index, data){
            html +="tr";

            html +="<td>"+ data.nombres+"</td>";
            html +="<td>"+ data.contenido+"</td>";
            html +="<td>"+ data.precio+"</td>";
            html +="<td>"+data.acciones+"</td>";
            html +="<td>";
            html +="</td>";
            html +="<button class='btn btn-waring' onclick='consultarporid("+data.idpromocion +");'><span class ='fa fa-edit'></span>modificar</button>"
            html +="<button class='btn btn-danger' onclick='Eliminar("+data.idpromocion +");'><span class ='fa fa-trash'></span>Eliminar</button>"
            html += "/<tr>";
       });

       document.getElementById("datos").inerrHTML = httml;

        

    }).fail(function (response){
        console.log(reponse);

    });

}

function consultarporid(nombre){
    $.ajax({
        url: url,
        data: {"idpromocion " : idpromocion, "accion" : "COMSULTAR_ID"},
        type: 'POST',
        dataType:'json'

    }).done(function(response){
        documen.getElementById('nombres').value = response.nombres;
        documen.getElementById('contenido').value = response.contenido;
        documen.getElementById('precio').value = response.precio;
        documen.getElementById('acciones').value = response.acciones ;

    }).fail(function(response){
        console.log(response);

    });

}

function guardar(){

}

function modificar(){

}

function eliminar(idnombre){

}

function validar(){
    
    nombres = documen.getElementById('nombres').value;
    contenido = documen.getElementById('contenido').value;
    precio = documen.getElementById('precio').value;
    acciones = documen.getElementById('acciones').value;

    if(nombres == "" || contenido == "" || precio == "" || acciones == "" ){
        return false
    }
    return true;
   
}




