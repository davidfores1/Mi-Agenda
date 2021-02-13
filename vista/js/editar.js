// Obtener referencia a botones
// Recuerda: el punto . indica clases
const botones = document.querySelectorAll(".editar");
// Definir función y evitar definirla de manera anónima
const cuandoSeHaceClick = function(evento) {
        // Recuerda, this es el elemento
        //console.log("El texto que tiene es: ", this.getAttribute("idEditar"));
        var idEditar = this.getAttribute("idEditar")
        console.log(idEditar);

        axios({
            method: 'GET',
            url: `controlador/controlador.agenda.php/?editar=${idEditar}`
        }).then(res => {

            console.log(res.data);

        }).catch(err => console.log(err))

    }
    // botones es un arreglo así que lo recorremos
botones.forEach(boton => {
    //Agregar listener
    boton.addEventListener("click", cuandoSeHaceClick);
});