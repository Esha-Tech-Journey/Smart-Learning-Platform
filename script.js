// Function to randomly select a word from the array
function getRandomWord() {
    const words = ["learning", "education", "knowledge", "sparkle", "challenge"];
    return words[Math.floor(Math.random() * words.length)];
}

// Function to scramble the letters of a word
function scrambleWord(word) {
    return word.split('').sort(function(){return 0.5-Math.random()}).join('');
}

// Function to initialize the word puzzle
function initializeWordPuzzle() {
    const scrambledWordElement = document.getElementById("scrambled-word");
    const randomWord = getRandomWord();
    const scrambledWord = scrambleWord(randomWord);
    scrambledWordElement.textContent = scrambledWord;
    document.getElementById("result").textContent = ""; // Clear any previous result
}

// Function to check user's guess for the word puzzle
function checkGuess() {
    const userInputElement = document.getElementById("user-input");
    const userGuess = userInputElement.value.trim().toLowerCase();
    const scrambledWord = document.getElementById("scrambled-word").textContent.toLowerCase();
    
    const resultElement = document.getElementById("result");
    if (userGuess === scrambledWord) {
        resultElement.textContent = "Correct! Well done!";
        // You can add more actions for correct guess if needed
    } else {
        resultElement.textContent = "Incorrect. Try again!";
        // You can add more actions for incorrect guess if needed
    }
}

// Add event listener for the word puzzle submit button
document.getElementById("submit-button").addEventListener("click", checkGuess);

// Function for form validation
function formValidation(event) {
    const emailInput = document.querySelector('input[type="email"]');
    const passwordInput = document.querySelector('input[type="password"]');
    
    if (!isValidEmail(emailInput.value)) {
        alert('Please enter a valid email address.');
        event.preventDefault(); // Prevent form submission
    }

    if (passwordInput.value.length < 8) {
        alert('Password must be at least 8 characters long.');
        event.preventDefault(); // Prevent form submission
    }
}

// Add event listener for form submission
document.querySelector('form').addEventListener('submit', formValidation);

// Function to validate email format using regular expression
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Call the initializeWordPuzzle function to start the puzzle when the page loads
initializeWordPuzzle();

// JavaScript to toggle visibility of lessons content
function toggleLessons() {
    var lessonsContent = document.getElementById('lessons-content');
    lessonsContent.style.display = (lessonsContent.style.display === 'none') ? 'block' : 'none';
}

// Add event listener to toggle visibility of lessons content
document.getElementById('lessons').addEventListener('click', toggleLessons);

// JavaScript function to toggle visibility of list items
function toggleVisibility(id) {
    var article = document.getElementById(id);
    article.classList.toggle('active');
}
