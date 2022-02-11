/***** Hide Notification Container Starts *****/
const notification = document.querySelector('#notification');

function HideNotification() {
    notification.style.transition = 'visibility 0.6s ease';
    notification.style.visibility = 'hidden';
}

setTimeout(function () {
    HideNotification();
}, 6000);
/***** Hide Notification Container Ends *****/

/***** Change Between Login And Register Form Starts *****/
const loginForm = document.querySelector('#login__form');
const regiterForm = document.querySelector('#register__form');
const formsContainer = document.querySelector('#forms__container');
const loginBox = document.querySelector('#login__box');
const registerBox = document.querySelector('#register__box');

/*** General Styles ***/
function PageWidth() {
    regiterForm.style.display = 'none';
    loginForm.style.display = 'block';
    registerBox.style.display = 'block';
    registerBox.style.opacity = '1';

    if (window.innerWidth > 850) {
        formsContainer.style.left = '10px';
        loginBox.style.display = 'block';
        loginBox.style.opacity = '0';
    } else {
        formsContainer.style.left = '0px';
        loginBox.style.display = 'none';
        loginBox.style.opacity = '1';
    }
}

window.addEventListener('resize', PageWidth);

/*** Show Register Form ***/
function showRegisterForm() {
    loginForm.style.display = 'none';
    regiterForm.style.display = 'block';
    registerBox.style.opacity = '0';
    loginBox.style.opacity = '1';

    if (window.innerWidth > 850) {
        formsContainer.style.left = '380px';
    } else {
        formsContainer.style.left = '0px';
        registerBox.style.display = 'none';
        loginBox.style.display = 'block';
    }
}

/*** Show Login Form ***/
function showLoginForm() {
    regiterForm.style.display = 'none';
    loginForm.style.display = 'block';
    loginBox.style.opacity = '0';
    registerBox.style.opacity = '1';
    
    if (window.innerWidth > 850) {
        formsContainer.style.left = '10px';
    } else {
        formsContainer.style.left = '0px';
        loginBox.style.display = 'none';
        registerBox.style.display = 'block';
    }
}

document.querySelector('#btn__register').addEventListener('click', showRegisterForm);
document.querySelector('#btn__login').addEventListener('click', showLoginForm);
/***** Change Between Login And Register Form Ends *****/