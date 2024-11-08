document.addEventListener("DOMContentLoaded", function () {
  const carousel = document.querySelector(".carousel");
  const dots = document.querySelectorAll(".dot");
  let currentIndex = 0;

  function updateCarousel(index) {
    carousel.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach((dot) => dot.classList.remove("active"));
    dots[index].classList.add("active");
  }

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
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
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    for (let i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "flex";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 4 seconds
  }

  showSlides();
});

window.addEventListener("scroll", function () {
  const nav = document.querySelector("nav");
  if (window.scrollY > 50) {
    nav.classList.add("scrolled");
  } else {
    nav.classList.remove("scrolled");
  }
});

document.getElementById("menu-toggle").addEventListener("click", function () {
  const navLinks = document.getElementById("nav-links");
  navLinks.classList.toggle("show");
});

var typing = new Typed(".typing", {
  strings: ["Programmer", "Developer"],
  typeSpeed: 100,
  backSpeed: 50,
  backDelay: 1000,
  startDelay: 500,
  smartBackspace: true,
  loop: true,
});

// Mendeteksi beberapa media query
const smallScreen = window.matchMedia("(max-width: 600px)");
const mediumScreen = window.matchMedia(
  "(min-width: 601px) and (max-width: 1024px)"
);

function handleMediaQueries() {
  if (smallScreen.matches) {
    // Jika layar kecil (max 600px)
    document.body.style.fontSize = "14px";
    console.log("Layar kecil");
  } else if (mediumScreen.matches) {
    // Jika layar sedang (601px - 1024px)
    document.body.style.fontSize = "16px";
    console.log("Layar sedang");
  } else {
    // Jika layar besar (> 1024px)
    document.body.style.fontSize = "18px";
    console.log("Layar besar");
  }
}

// Panggil fungsi saat halaman dimuat
handleMediaQueries();

// Perbarui saat ukuran layar berubah
smallScreen.addListener(handleMediaQueries);
mediumScreen.addListener(handleMediaQueries);
