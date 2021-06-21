let formEmail = document.querySelector('.formEmail');
let emailIcon = document.querySelector('.emailIcon');

emailIcon.addEventListener('click', () => {
    formEmail.classList.toggle('is-visible');
}); 
console.log('ca marche');