const questions = [...document.querySelectorAll('.faq__title')];
const answers = [...document.querySelectorAll('.faq__answer')];
const arrows = [...document.querySelectorAll('.faq__button')]

questions.forEach((question, i) => {
    question.addEventListener('click', function () {
        answers[i].classList.toggle('faq__answer--active')
        arrows[i].classList.toggle('faq__button--active')
    })
})

// Desktop naviagtion
const options = [...document.querySelectorAll('.nav__link')];
const aboutSection = document.querySelector('#about');
const servicesSection = document.querySelector('#services');
const portfolioSection = document.querySelector('#portfolio');
const faqSection = document.querySelector('#faq');
const contactSection = document.querySelector('#contact');


options.forEach(option => {
    option.addEventListener('click', function () {
        let offsetPosition;

        if (option.classList.contains('nav__link--about')) {
            offsetPosition = aboutSection.offsetTop - 200;
        } else if (option.classList.contains('nav__link--services')) {
            offsetPosition = servicesSection.offsetTop - 100;
        } else if (option.classList.contains('nav__link--portfolio')) {
            offsetPosition = portfolioSection.offsetTop - 100;
        } else if (option.classList.contains('nav__link--faq')) {
            offsetPosition = faqSection.offsetTop - 100;
        } else if (option.classList.contains('nav__link--contact')) {
            offsetPosition = contactSection.offsetTop - 100;
        }

        window.scrollTo({
            top: offsetPosition,
            behavior: "smooth"
        });
    });
});


// Mobile navigation
const hamburgerBtn = document.querySelector('.mobile-nav__hamburger-icon');
const mobileMenu = document.querySelector('.mobile-nav__menu');
const mobileOptions = [...document.querySelectorAll('.mobile-nav__link')];
const closeBtn = document.querySelector('.mobile-nav__close');

mobileOptions.forEach(option => {
    option.addEventListener('click', function () {
        let offsetPosition;

        if (option.classList.contains('mobile-nav__link--about')) {
            offsetPosition = aboutSection.offsetTop - 140;
        } else if (option.classList.contains('mobile-nav__link--services')) {
            offsetPosition = servicesSection.offsetTop - 100;
        } else if (option.classList.contains('mobile-nav__link--portfolio')) {
            offsetPosition = portfolioSection.offsetTop - 100;
        } else if (option.classList.contains('mobile-nav__link--faq')) {
            offsetPosition = faqSection.offsetTop - 100;
        } else if (option.classList.contains('mobile-nav__link--contact')) {
            offsetPosition = contactSection.offsetTop - 100;
        }

        window.scrollTo({
            top: offsetPosition,
            behavior: "smooth"
        });

        mobileMenu.classList.remove('mobile-nav__menu--active');
    });
});


hamburgerBtn.addEventListener('click', function () {
    mobileMenu.classList.toggle('mobile-nav__menu--active');
});

closeBtn.addEventListener('click', function () {
    mobileMenu.classList.remove('mobile-nav__menu--active');
});


const heroServices = document.querySelector('.hero__button--services');
const herContact = document.querySelector('.hero__button--contact');

heroServices.addEventListener('click', function () {
    window.scrollTo({
        top: servicesSection.offsetTop - 100,
        behavior: "smooth"
    });
});

herContact.addEventListener('click', function () {
    window.scrollTo({
        top: contactSection.offsetTop - 100,
        behavior: "smooth"
    });
});
