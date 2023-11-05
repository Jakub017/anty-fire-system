const questions = [...document.querySelectorAll('.faq__title')];
const answers = [...document.querySelectorAll('.faq__answer')];
const arrows = [...document.querySelectorAll('.faq__button')]

questions.forEach((question, i) => {
    question.addEventListener('click', function () {
        answers[i].classList.toggle('faq__answer--active')
        arrows[i].classList.toggle('faq__button--active')
    })
})
