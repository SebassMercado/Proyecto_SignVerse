let abecedarioCompletado = false; // Estado de la evaluación de abecedario

// 1. Comprobar si el usuario ha completado la evaluación de abecedario
function iniciarActividad(actividad, event) {
    let actividadElemento = document.getElementById(actividad); // Seleccionamos el elemento de la actividad

    if (actividad === 'abecedario') {
        // Si está desbloqueada, muestra la ventana de evaluación
        document.getElementById('windowAbecedario').style.display = 'block';
        // Evitar que se recargue la página
        event.preventDefault();
    } else if ((actividad === 'colores' || actividad === 'animales') && !abecedarioCompletado) {
        // Si no ha completado la de abecedario, muestra alerta
        document.getElementById('alertaOverlay').style.display = 'block';
        // Evitar que se recargue la página
        event.preventDefault();
    } else if (actividad === 'bloqueado') {
        // Si la actividad está bloqueada, muestra la ventana de nivel no disponible
        mostrarNivelNoDisponible();
        
        // Añadir efecto de opacidad a la actividad bloqueada
        actividadElemento.style.opacity = '0.5'; // Reducir la opacidad para mostrar que está bloqueada
        
        event.preventDefault(); // Evita que se recargue la página
    }
}

// 2. Cerrar la ventana emergente
function cerrarWindow(id) {
    document.getElementById(id).style.display = 'none';
}

// 3. Redirigir a la evaluación de colores cuando se haga clic en "Vamos"
function redirigirEvaluacion() {
    window.location.href = "/cliente/evaluaciones/evaluacionAbc"; // Ruta de Laravel
}

// 4. Nueva función para mostrar la ventana de nivel no disponible
function mostrarNivelNoDisponible() {
    document.getElementById('alertaNivelNoDisponible').style.display = 'block';
}








