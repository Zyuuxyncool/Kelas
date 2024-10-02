document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector('.carousel');
    const dots = document.querySelectorAll('.dot');
    let currentIndex = 0;

    function updateCarousel(index) {
        carousel.style.transform = `translateX(-${index * 100}%)`;
        dots.forEach(dot => dot.classList.remove('active'));
        dots[index].classList.add('active');
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index;
            updateCarousel(currentIndex);
        });
    });

    let slideIndex = 0;
    function showSlides() {
        const slides = document.getElementsByClassName("carousel-item");
        const dots = document.getElementsByClassName("dot");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1; }
        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "flex";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 4 seconds
    }

    showSlides();
});

window.addEventListener('scroll', function() {
    const nav = document.querySelector('nav');
    if (window.scrollY > 50) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});

document.getElementById('menu-toggle').addEventListener('click', function() {
    const navLinks = document.getElementById('nav-links');
    navLinks.classList.toggle('show');
});

var typing = new Typed(".typing", {
        strings: ["Andreas (20)", "Rizky (29)"],
        typeSpeed: 100,    
        backSpeed: 50,       
        backDelay: 1000,     
        startDelay: 500,    
        smartBackspace: true,
        loop: true
    });