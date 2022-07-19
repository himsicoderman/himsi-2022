/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById("nav-menu"),
  navToggle = document.getElementById("nav-toggle"),
  navClose = document.getElementById("nav-close");

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
  });
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
  });
}

/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll(".nav__link");

function linkAction() {
  const navMenu = document.getElementById("nav-menu");
  // When we click on each nav__link, we remove the show-menu class
  navMenu.classList.remove("show-menu");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader() {
  const header = document.getElementById("header");
  // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
  if (this.scrollY >= 80) header.classList.add("scroll-header");
  else header.classList.remove("scroll-header");
}
window.addEventListener("scroll", scrollHeader);

/*=============== QUESTIONS ACCORDION ===============*/
const accordionItems = document.querySelectorAll(".questions__item");

accordionItems.forEach((item) => {
  const accordionHeader = item.querySelector(".questions__header");

  accordionHeader.addEventListener("click", () => {
    const openItem = document.querySelector(".accordion-open");

    toggleItem(item);

    if (openItem && openItem !== item) {
      toggleItem(openItem);
    }
  });
});

const toggleItem = (item) => {
  const accordionContent = item.querySelector(".questions__content");

  if (item.classList.contains("accordion-open")) {
    accordionContent.removeAttribute("style");
    item.classList.remove("accordion-open");
  } else {
    accordionContent.style.height = accordionContent.scrollHeight + "px";
    item.classList.add("accordion-open");
  }
};

/*=============== SHOW SCROLL UP ===============*/
function scrollUp() {
  const scrollUp = document.getElementById("scroll-up");
  // When the scroll is higher than 400 viewport height, add the show-scroll class to the a tag with the scroll-top class
  if (this.scrollY >= 400) scrollUp.classList.add("show-scroll");
  else scrollUp.classList.remove("show-scroll");
}
window.addEventListener("scroll", scrollUp);

/*=============== DARK LIGHT THEME ===============*/
const themeButton = document.getElementById("theme-button");
const darkTheme = "dark-theme";
const iconTheme = "ri-sun-line";

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem("selected-theme");
const selectedIcon = localStorage.getItem("selected-icon");

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () =>
  document.body.classList.contains(darkTheme) ? "dark" : "light";
const getCurrentIcon = () =>
  themeButton.classList.contains(iconTheme) ? "ri-moon-line" : "ri-sun-line";

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === "dark" ? "add" : "remove"](
    darkTheme
  );
  themeButton.classList[selectedIcon === "ri-moon-line" ? "add" : "remove"](
    iconTheme
  );
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener("click", () => {
  // Add or remove the dark / icon theme
  document.body.classList.toggle(darkTheme);
  themeButton.classList.toggle(iconTheme);
  // We save the theme and the current icon that the user chose
  localStorage.setItem("selected-theme", getCurrentTheme());
  localStorage.setItem("selected-icon", getCurrentIcon());
});

/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
  origin: "top",
  distance: "60px",
  duration: 2500,
  delay: 400,
  // reset: true
});

sr.reveal(`.home__data, .blog-box, .blog-box-s, .blog-box-m`, { delay: 1100 });
sr.reveal(`.home__img `, { delay: 1200 });
sr.reveal(`.home__social`, { delay: 1300 });
sr.reveal(`.img-profile-staff`);
sr.reveal(`.about__img, .contact__box, img.banner_dinas,`, {
  delay: 1000,
  origin: "left",
});

sr.reveal(`.header-coming-soon, .logo__img`, {
  delay: 1500,
  origin: "left",
});

sr.reveal(`.dinas__logo, .follow-ig,`, {
  delay: 1000,
  origin: "left",
});

sr.reveal(`.desktop-banner, .title-sp`, {
  delay: 1500,
  origin: "left",
});

sr.reveal(`.title-sp`, {
  delay: 1200,
  origin: "left",
});

sr.reveal(
  `.about__data, .contact__form, .profile__header, .post__data, .row-2`,
  {
    origin: "right",
  }
);

sr.reveal(`.row-1, .new-thumb, .about__img`, {
  origin: "left",
});

sr.reveal(
  `.steps__card, .product__card, .questions__group, .footer, .aka-card`,
  {
    interval: 100,
  }
);

sr.reveal(`.aka-card`, {
  interval: 800,
});

sr.reveal(`.visi-misi_img, .ekspresi__header`, {
  delay: 1500,
  origin: "left",
});

// sr.reveal(`.img__banner__home`, {
//   origin: "left",
// });

sr.reveal(`.logo__data, .visi-misi`, {
  delay: 1500,
  origin: "right",
});

sr.reveal(`.video`, { interval: 1000 });

/* ==================== GREETING ==================== */

var swiper = new Swiper(".decoration__container", {
  //   slidesPerView: 3,
  loop: true,
  spaceBetween: 48,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
  breakpoints: {
    568: {
      slidesPerView: 2,
    },
    820: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".home__img", {
  //   slidesPerView: 3,
  loop: true,
  spaceBetween: 48,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
  breakpoints: {
    568: {
      slidesPerView: 1,
    },
    820: {
      slidesPerView: 1,
    },
  },
});

// var swiperProker = new Swiper(".post", {
//   //   slidesPerView: 3,
//   loop: true,
//   spaceBetween: 48,
//   grabCursor: true,
//   pagination: {
//     el: ".swiper-pagination",
//     dynamicBullets: true,
//   },
//   breakpoints: {
//     568: {
//       slidesPerView: 1,
//     },
//     820: {
//       slidesPerView: 1,
//     },
//   },
// });

var swiper = new Swiper(".pojokHIMSI__container", {
  loop: true,
  spaceBetween: 100,
  centeredSlides: true,
  grabCursor: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

let swiperGreeting = new Swiper(".greeting__container", {
  loop: true,
  grabCursor: true,
  spaceBetween: 48,

  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
});

/*=============== PRELOADER ===============*/
let preloader = document.getElementById("preloader-active");
let elem = document.querySelector(".preloader");

function loader(params) {
  setTimeout(function () {
    elem.style.display = "none";
  }, 2000);
}

loader();

// Get all elements with class="closebtn"
var close = document.getElementsByClassName("closebtn");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
  // When someone clicks on a close button
  close[i].onclick = function () {
    // Get the parent of <span class="closebtn"> (<div class="alert">)
    var div = this.parentElement;

    // Set the opacity of div to 0 (transparent)
    div.style.opacity = "0";

    // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
    setTimeout(function () {
      div.style.display = "none";
    }, 600);
  };
}

/* ==================== POJOK HIMSI SWIPER ==================== */
// let swiperPojok = new Swiper(".pojokHIMSI__container", {
//   cssMode: true,
//   loop: true,
//   grabCursor: true,
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//     dynamicBullets: true,
//   },
// });
