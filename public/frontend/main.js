var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
  });

document.addEventListener("DOMContentLoaded", function () {
    (document.getElementById("preloader").style.display = "none"),
        (document.getElementById("app").style.display = "block");
});
