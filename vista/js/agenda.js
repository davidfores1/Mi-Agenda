class Agenda {

    constructor() {

        this.id = "";
        this.nombre = "";
        this.domicilio = "";
        this.telefono = "";
        this.comentarios = "";
        this.estado = "0";
        this.botonEliminar = "";
        this.botonCancelar = "";

        this.eventos();
    }

    eventos() {

        this.clickListaEditar();
        this.clickListaEliminar();
        this.BotonCancelar();

    }

    clickListaEditar() {

            this.botonEditar = document.querySelectorAll(".editar");

            this.botonEditar.forEach(button => {
                button.addEventListener("click", () => {
                    this.botonEditar.forEach(button => {
                        button.classList.remove("editar");
                    })
                    button.classList.toggle("editar");
                    this.idEditar = document.querySelector(".editar").getAttribute("idEditar");
                    this.clickEditar(this.idEditar);

                })

            })

        }
        //seleccionar para EDITAR
    clickEditar() {

        axios({

            method: 'GET',
            url: `http://localhost/application/Mi-Agenda/controlador/agenda.axios.php/editar?editar=${this.idEditar}`

        }).then(res => {

            if (this.estado == 0) {
                document.querySelector("#cancelar").setAttribute("id", "elimina");
                document.querySelector("#enviar").style.backgroundColor = "#7dcf7d";
                document.querySelector("#enviar").setAttribute("name", "update");
                document.querySelector("#enviar").setAttribute("value", "Editar");
                this.estado = 1;
            }

            this.datos = res.data

            this.id = document.querySelector("#id").value = this.datos.id;
            this.nombre = document.querySelector("#nombre").value = this.datos.nombre;
            this.telefono = document.querySelector("#telefono").value = this.datos.telefono;
            this.domicilio = document.querySelector("#domicilio").value = this.datos.domicilio;
            this.comentarios = document.querySelector("#comentarios").value = this.datos.comentarios;


        }).catch(err => console.log(err))


    }

    // seleccionar para ELIMINAR
    clickListaEliminar() {

        this.botonEliminar = document.querySelectorAll(".eliminar");

        this.botonEliminar.forEach(button => {
            button.addEventListener("click", () => {
                this.botonEliminar.forEach(button => {
                    button.classList.remove("eliminar");
                })
                button.classList.toggle("eliminar");
                this.idEliminar = document.querySelector(".eliminar").getAttribute("idEliminar");
                console.log(this.idEliminar);
                this.clickEliminar(this.idEliminar);

            })

        })

    }

    clickEliminar() {

        axios({

            method: 'GET',
            url: `http://localhost/application/Mi-Agenda/controlador/agenda.axios.php/editar?eliminar=${this.idEliminar}`

        }).then(res => {

            window.location.assign("http://localhost/application/Mi-Agenda/index.php")

        }).catch(err => console.log(err))


    }

    //Boton calcelar
    BotonCancelar() {

        this.botonCancelar = document.querySelector("#cancelar")

        this.botonCancelar.addEventListener("click", function() {

            window.location.assign("http://localhost/application/Mi-Agenda/index.php");

        })

    }

}

new Agenda();