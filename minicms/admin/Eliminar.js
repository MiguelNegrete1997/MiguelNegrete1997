//Funcion
function confirmdelete(id){

    if(confirm("¿Estas seguro que deseas eliminar este contenido?")) {
        location.href = "Eliminar.php?id="+id;
    }else{
        alert("No se pudo elimiar registro")};
    }


function redirect()
{
    location.href = "Contenido.html";
}
