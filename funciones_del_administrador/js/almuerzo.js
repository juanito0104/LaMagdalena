function Consultar(){
    $.ajax({

    }).done(function(response){

    }).fail(function(response){
        
    })
}

function ConsultarPorId(idalmuerzo){

}

function Guardar(){

}

function Modificar(){

}

function Eliminar(){

}

function Validar(){
    nombre = document.getElementById('nombre').value;
    valor = document.getElementById('valor').value;

    if(nombre == "" || valor == ""){
        return false;
    }
    return true;
}