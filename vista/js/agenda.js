//**************************** */ Editar********************************
// Obtener referencia a botones
// Recuerda: el punto . indica clases
const botones = document.querySelectorAll(".editar");
// Definir función y evitar definirla de manera anónima
const clickEditar = function(evento) {
        // Recuerda, this es el elemento
        //console.log("El texto que tiene es: ", this.getAttribute("idEditar"));
        var idEditar = this.getAttribute("idEditar")
        axios({
            method: 'GET',
            url: `http://localhost/application/Mi-Agenda/controlador/agenda.axios.php/editar?editar=${idEditar}`
        }).then(res => {

            const datos = res.data

            console.log(datos.nombre);
            document.querySelector("#id").value = datos.id;
            document.querySelector("#nombre").value = datos.nombre;
            document.querySelector("#domicilio").value = datos.domicilio;
            document.querySelector("#telefono").value = datos.telefono;
            document.querySelector("#comentarios").value = datos.comentarios;

            document.querySelector("#enviar").setAttribute("name", "update");
            document.querySelector("#enviar").setAttribute("value", "Editar");


        }).catch(err => console.log(err))

    }
    // botones es un arreglo así que lo recorremos
botones.forEach(boton => {
    //Agregar listener
    boton.addEventListener("click", clickEditar);
});

//**************************** */ Eliminar********************************

const botons = document.querySelectorAll(".eliminar");
// Definir función y evitar definirla de manera anónima
const clickEliminar = function(evento) {
        // Recuerda, this es el elemento
        //console.log("El texto que tiene es: ", this.getAttribute("idEditar"));
        var idEliminar = this.getAttribute("idEliminar")
        console.log(idEliminar);
        axios({
            method: 'GET',
            url: `http://localhost/application/Mi-Agenda/controlador/agenda.axios.php/editar?eliminar=${idEliminar}`
        }).then(res => {

            window.location.assign("http://localhost/application/Mi-Agenda/index.php")

        }).catch(err => console.log(err))

    }
    // botones es un arreglo así que lo recorremos
botons.forEach(boton => {
    //Agregar listener
    boton.addEventListener("click", clickEliminar);
});