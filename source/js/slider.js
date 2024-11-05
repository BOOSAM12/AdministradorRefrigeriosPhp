let currentSlide = 0;
const slides = document.querySelectorAll('.slides img');
const totalSlides = slides.length;
function showSlide(index) {
    if (index >= totalSlides) currentSlide = 0;
    if (index < 0) currentSlide = totalSlides - 1;
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(${-currentSlide * 100}%)`;
    });
}
function moveSlide(direction) {
    currentSlide += direction;
    showSlide(currentSlide);
}
function autoSlide() {
    moveSlide(1);
}
document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentSlide);
    setInterval(autoSlide, 5000); // Cambia de imagen cada 3 segundos
})