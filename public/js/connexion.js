
const connexionButton = document.getElementById("connexionButton");
const popup = document.getElementById("popup");
const closeButton = document.getElementById("closeButton");
const blurBackground = document.getElementById("blur-background");

const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#mdp');
connexionButton.addEventListener("click", () => {
    popup.style.display = "flex";
    blurBackground.style.display = "flex";
});

closeButton.addEventListener("click", () => {
    popup.style.display = "none";
    blurBackground.style.display = "none";
});

togglePassword.addEventListener('click', function (e) {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
});