const resumenTicket = document.getElementById("txtResumen");
const detalleTicket = document.getElementById("exampleFormControlTextarea1");
document.getElementById("formulario").addEventListener('submit', checkFormulario)

// El evento se recibe como parámetro, para poder cancelarlo si es necesario
function checkFormulario(e) {
        // Crea un arreglo para los mensajes de error
        let errors = [];
        // También una variable para poner foco al primer campo que tenga error
        let input = false;
        
        // Considerar cualquier valor tipo falsy (null, cadena vacía, etc.)
        if(!resumenTicket.value) {
            errors.push("Resumen: Es obligatorio rellenar este cambio");
            input = resumenTicket;
        } else if(resumenTicket.value.length <= 10|| nombreUsuario.value.length >= 100) {
            errors.push("Resumen: Debe tener entre 10 a 100 caracteres");
            input = resumenTicket;
        }

        if(!detalleTicket.value) {
            errors.push("Detalle: Debe llenar este campo");
            // Solo si no hay error en campo previo
            if(!input) input = detalleTicket;
        } else if(detalleTicket.value.length <= 10|| detalleTicket.value.length >= 600) {
            errors.push("Detalle: Debe tener entre 10 a 600 caracteres");
            if(!input) input = detalleTicket;
        }
        // ¿Hay errores?
        if(errors.length > 0) {
            // Cancelar envío, usando el evento
            e.preventDefault();
            // Mostrar mensaje de error, mostrar con saltos de línea \n
            alert('Errores en formulario, por favor corrija:\n' + errors.join('\n'));
            // Poner foco en el primer campo con error
            input.focus();
        }
}
