function agregarComentario() {      //caja de comentarios
    let comentario = document.getElementById("cajadecomentarios").value;  //se crea la variable con el texto que agregen los usuarios
    if (comentario.trim() !== "") {
        let newp = document.createElement("p");
        newp.textContent = comentario;
        let padre = document.getElementById("comentarios");
        padre.appendChild(newp);
        document.getElementById("cajadecomentarios").value = ""; 
    } else {
        alert("Por favor, escribe un comentario.");
    }
}

function eliminarComentario() {
    let padre = document.getElementById("comentarios");
    if (padre.children.length > 0) {         //Si hay un comentario mayor a 0 caracteres, se elimina
        padre.removeChild(padre.lastChild);
    } else {    //si no se cumple, se manda mensasje de alerta
        alert("No hay comentarios para eliminar.");
    }
} 