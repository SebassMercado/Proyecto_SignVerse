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

        currentIndex = (currentIndex + 1) % images.length;
    }
}

window.onload = function() {
    changeBackground();
    setInterval(changeBackground, 20000);
};
