const abecedario = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ".split("");
let preguntas = [];
let respuestasCorrectas = 0;
let preguntaActual = 0;

function generarPreguntas() {
    preguntas = abecedario
        .sort(() => Math.random() - 0.5)
        .slice(0, 10)
        .map((letra) => ({
            letra,
            imagen: `/img/abecedario/${letra}.jpg`,
        }));
}

function mostrarPregunta() {
    const { letra, imagen } = preguntas[preguntaActual];
    document.getElementById("imagen-pregunta").src = imagen;

    const opcionesContainer = document.getElementById("opciones-container");
    opcionesContainer.innerHTML = "";

    const opciones = abecedario.sort(() => Math.random() - 0.5).slice(0, 4);
    if (!opciones.includes(letra)) opciones[0] = letra;

    opciones.sort(() => Math.random() - 0.5).forEach((opcion) => {
        const boton = document.createElement("button");
        boton.className = "opcion-imagen";
        boton.textContent = opcion;
        boton.onclick = () => verificarRespuesta(opcion);
        opcionesContainer.appendChild(boton);
    });
}

function verificarRespuesta(respuesta) {
    if (respuesta === preguntas[preguntaActual].letra) {
        respuestasCorrectas++;
    }

    if (++preguntaActual < preguntas.length) {
        mostrarPregunta();
    } else {
        mostrarResultados();
    }
}

function mostrarResultados() {
    document.getElementById("pregunta-container").style.display = "none";
    document.getElementById("resultado").style.display = "block";
    document.getElementById("respuestas-correctas").textContent = respuestasCorrectas;
}

function reiniciarEvaluacion() {
    respuestasCorrectas = 0;
    preguntaActual = 0;
    generarPreguntas();
    document.getElementById("pregunta-container").style.display = "block";
    document.getElementById("resultado").style.display = "none";
    mostrarPregunta();
}

window.onload = () => {
    generarPreguntas();
    mostrarPregunta();
};





