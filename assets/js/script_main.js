'use strict';



/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const navLinks = document.querySelectorAll("[data-nav-link]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
}

addEventOnElem(navTogglers, "click", toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  overlay.classList.remove("active");
}

addEventOnElem(navLinks, "click", closeNavbar);



/**
 * header active when scroll down to 100px
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

const activeElem = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
}

addEventOnElem(window, "scroll", activeElem);


// for handlling the popup form code
const loginFormContainer = document.getElementById('loginFormContainer');
const openLoginFormBtn = document.getElementById('openLoginFormBtn');
const closeLoginformBtn = document.getElementById('closeLoginFromBtn');
const signupformcontainer = document.getElementById('signupformcontainer');
const opensignupFormBtn = document.getElementById('opensignupFormBtn');
const closesignupformbtn = document.getElementById('closesignupformbtn');


openLoginFormBtn.addEventListener('click', () => {
    loginFormContainer.style.display = 'block';
});

closeLoginFormBtn.addEventListener('click', () => {
    loginFormContainer.style.display = 'none';
});

opensignupFormBtn.addEventListener('click', () => {
    loginFormContainer.style.display = 'none';
});

function login() {
    alert('Welcome user');
}


//signup login

opensignupFormBtn.addEventListener('click', () => {
    signupformcontainer.style.display = 'block';
});

closesignupformbtn.addEventListener('click', () => {
    signupformcontainer.style.display = 'none';
});
openloginFormBtn.addEventListener('click', () => {
    signupformcontainer.style.display = 'none';
});

// dublle login here function
openloginFormBtn.addEventListener('click', () => {
    signupformcontainer.style.display = 'none';
    loginFormContainer.style.display ='block';
});



 