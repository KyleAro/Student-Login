const container = document.getElementById('container');
const registerBtn = document.getElementById('registerBtn');
const loginBtn = document.getElementById('loginBtn');

// Event listener for the Register button (to show the sign-up form)
registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

// Event listener for the Login button (to show the sign-in form)
loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

// Optional: Add a text-changing effect for the toggle section on the left
const textsLeft = ["Welcome!", "Willkommen!", "Bienvenue!", "¡Bienvenido!"];
let currentIndexLeft = 0;

function changeTextLeft() {
    const headingLeft = document.querySelector(".toggle-panel.toggle-left h1");
    headingLeft.textContent = textsLeft[currentIndexLeft];
    currentIndexLeft = (currentIndexLeft + 1) % textsLeft.length; // Loop through texts
}

setInterval(changeTextLeft, 1000);

// Optional: Add a text-changing effect for the toggle section on the right (Hello, Friend!)
const textsRight = ["Hello, Friend!", "Hola, Amigo!", "Bonjour, Mon Ami!", "Kamusta, Kaibigan!"];
let currentIndexRight = 0;

function changeTextRight() {
    const headingRight = document.querySelector(".toggle-panel.toggle-right h1");
    headingRight.textContent = textsRight[currentIndexRight];
    currentIndexRight = (currentIndexRight + 1) % textsRight.length; // Loop through texts
}

setInterval(changeTextRight, 1000);


document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');
    
    form.addEventListener("keydown", function(event) {
        // Check if Enter key is pressed
        if (event.key === 'Enter') {
            event.preventDefault(); // Prevent the form from submitting
        }
    });
});
