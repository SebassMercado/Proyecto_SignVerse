const images = [
    'http://surl.li/jhglig', 
    'http://surl.li/cerojv',  
    'http://surl.li/wpnizx',
];
let currentIndex = 0;

function changeBackground() {
    const container = document.getElementById('background');
    if (container) {
        
        container.style.opacity = 0;

        
        setTimeout(() => {
            
            container.style.backgroundImage = `url(${images[currentIndex]})`;

            
            container.style.transition = 'opacity 1.5s ease';
            container.style.opacity = 1; 
        }, 1500); 
    }


    currentIndex = (currentIndex + 1) % images.length;
}

window.onload = function() {
    changeBackground(); 
    setInterval(changeBackground, 20000); 
};







const usuarios = {
    "sebassmercado97@gmail.com": { contraseña: "admin123", rol: "admin" },
    "cliente@gmail.com": { contraseña: "cliente123", rol: "cliente" }
};

// Función que maneja la recuperación de la contraseña
function recuperarContraseña(event) {
    event.preventDefault(); // Evita que el formulario recargue la página

    // Captura el correo ingresado
    const correo = document.getElementById("email").value;

    // Oculta los mensajes de error y éxito inicialmente
    document.getElementById("error-message-email").style.display = "none";
    document.getElementById("success-message").style.display = "none";

    // Verifica si el correo existe en el sistema
    if (usuarios[correo]) {
        // Si el correo es válido, muestra el mensaje de éxito
        document.getElementById("success-message").style.display = "block";
    } else {
        // Si el correo no es válido, muestra el mensaje de error
        document.getElementById("error-message-email").style.display = "block";
    }
}

// Agrega un evento al formulario para manejar la recuperación de la contraseña
const form = document.getElementById("recoveryForm");
form.addEventListener("submit", recuperarContraseña);


