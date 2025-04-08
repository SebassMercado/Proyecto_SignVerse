const images = [
    'http://surl.li/jhglig', 
    'http://surl.li/cerojv',  
    'http://surl.li/wpnizx',
];
let currentIndex = 0;

document.addEventListener("DOMContentLoaded", function () {
    changeBackground(); 
    setInterval(changeBackground, 20000);

    const form = document.getElementById("registrationForm");
    if (form) {
        form.addEventListener("submit", function (event) {
            event.preventDefault();
            submitForm(event.target);
        });
    } else {
        console.error("El formulario 'registrationForm' no se encontró.");
    }

    // Enfoque en el campo de entrada cuando el iframe haya cargado
    const iframe = document.getElementById('myIframe'); 
    if (iframe) {
        iframe.onload = function() {
            const inputField = iframe.contentWindow.document.getElementById('inputField');
            if (inputField) {
                inputField.focus();
            }
        };
    }
});

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

function submitForm(form) {
    const formData = new FormData(form);
    const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');

    if (!csrfTokenMeta) {
        console.error("CSRF token no encontrado en la meta etiqueta.");
        showMessage("Error", "No se encontró el token CSRF, recarga la página.");
        return;
    }

    fetch(form.action, {
        method: "POST",
        body: formData,
        credentials: "include", // Asegura que se envíen cookies, incl. el CSRF token
        headers: {
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": csrfTokenMeta.content,
            "Accept": "application/json"
        }
    })
    .then(response => response.json().catch(() => ({ success: false, message: "Respuesta no válida del servidor" })))
    .then(data => {
        if (data.success) {
            showMessage("Usuario creado satisfactoriamente", "Redirigiendo en <span id='countdown'>8</span> segundos...");
            startCountdown();
        } else if (data.errors) {
            let errorMsg = Object.values(data.errors).flat().join('<br>');
            showMessage("Error de validación", errorMsg);
        } else {
            showMessage("Error", data.message || "No se pudo registrar. Verifica los datos.");
            console.error("Error del servidor:", data);
        }
    })
    .catch(error => {
        showMessage("Error", "Hubo un problema al enviar el formulario.");
        console.error("Error en la solicitud:", error);
    });
}

function showMessage(title, message) {
    let messageBox = document.getElementById("messageBox");
    if (!messageBox) {
        messageBox = document.createElement("div");
        messageBox.id = "messageBox";
        document.body.appendChild(messageBox);
    }
    messageBox.innerHTML = `<h3>${title}</h3><p>${message}</p>`;
    
    Object.assign(messageBox.style, {
        position: "fixed",
        top: "50%",
        left: "50%",
        transform: "translate(-50%, -50%)",
        padding: "20px",
        borderRadius: "10px",
        boxShadow: "0 4px 8px rgba(0, 0, 0, 0.2)",
        backgroundColor: "#f0f8ff",
        color: "#333",
        textAlign: "center",
        zIndex: "1000"
    });
}

function startCountdown() {
    let countdown = 8;
    const countdownElement = document.getElementById("countdown");
    if (!countdownElement) return;
    
    const countdownInterval = setInterval(() => {
        countdown--;
        countdownElement.textContent = countdown;
        if (countdown <= 0) {
            clearInterval(countdownInterval);
            document.getElementById("messageBox").remove();
            window.location.href = "/iniciarSesion"; 
        }
    }, 1000);
}
