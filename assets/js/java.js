let slideIndex = 0;
let slideInterval;

// Llamar a showSlides() cuando se carga la página
document.addEventListener("DOMContentLoaded", function() {
    showSlides();
});

function showSlides() {
    let slides = document.getElementsByClassName("carousel-item");
    let dots = document.getElementsByClassName("dot");

    // Validar que existan elementos para evitar errores en consola
    if (slides.length === 0 || dots.length === 0) return;

    // 1. Limpiar todos los slides y resetear los puntos al color gris
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
        
        // Quitamos el naranja y la clase active, volvemos al gris neutro
        dots[i].classList.remove("bg-orange-500", "active");
        dots[i].classList.add("bg-slate-300");
    }

    // 2. Lógica del índice
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    // 3. Mostrar el slide actual con flex (para que Tailwind centre bien)
    slides[slideIndex - 1].style.display = "flex";  

    // 4. Pintar el punto actual de Naranja (Color J&MD Cleaning)
    dots[slideIndex - 1].classList.remove("bg-slate-300");
    dots[slideIndex - 1].classList.add("bg-orange-500", "active");

    // 5. Reiniciar el intervalo (usamos clearTimeout por si acaso se dispara doble)
    clearTimeout(slideInterval);
    slideInterval = setTimeout(showSlides, 5000); 
}

// Función para cuando el usuario hace clic manual en los puntos
function currentSlide(n) {
    slideIndex = n - 1; // Ajustamos el índice
    clearTimeout(slideInterval); // Frenamos el auto-avance momentáneamente
    showSlides();
}