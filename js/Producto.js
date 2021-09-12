$(document).ready(function() {
    var funcion;
    $('.select2').select2();
    rellenar_laboratorios();
    rellenar_tipos();
    rellenar_presentaciones();

    function rellenar_laboratorios() {
        funcion = "rellenar_laboratorios";
        $.post('../controller/LaboratorioController.php', { funcion }, (response) => {
            const laboratorios = JSON.parse(response);
            let template = '';
            laboratorios.forEach(laboratorio => {
                template += `
                    <option value="${laboratorio.id}">${laboratorio.nombre}</option>
                `;
            });
            $('#laboratorio').html(template);
        })
    }

    function rellenar_tipos() {
        funcion = "rellenar_tipos";
        $.post('../controller/TipoController.php', { funcion }, (response) => {
            const tipos = JSON.parse(response);
            let template = '';
            tipos.forEach(tipo => {
                template += `
                    <option value="${tipo.id}">${tipo.nombre}</option>
                `;
            });
            $('#tipo').html(template);
        })
    }

    function rellenar_presentaciones() {
        funcion = "rellenar_presentaciones";
        $.post('../controller/PresentacionController.php', { funcion }, (response) => {
            const presentaciones = JSON.parse(response);
            let template = '';
            presentaciones.forEach(presentacion => {
                template += `
                    <option value="${presentacion.id}">${presentacion.nombre}</option>
                `;
            });
            $('#presentacion').html(template);
        })
    }

    $('#form-crear-producto').submit(e => {
        let nombre = $('#nombre_producto').val();
        let concentracion = $('#concentracion').val();
        let adicional = $('#adicional').val();
        let precio = $('#precio').val();
        let laboratorio = $('#laboratorio').val();
        let tipo = $('#tipo').val();
        let presentacion = $('#presentacion').val();
        //console.log(nombre + " " + concentracion + " " + adicional + " " + precio + "  " + laboratorio + "  " + tipo + "  " + presentacion);
        funcion = "crear";
        $.post('../controller/ProductoController.php', { funcion, nombre, concentracion, adicional, precio, laboratorio, tipo, presentacion }, (response) => {
            console.log(response);
        });
        e.preventDefault();
    });
})