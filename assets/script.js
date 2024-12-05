const typewriterElement = document.getElementById('typewriter');
const words = ['Kickstart It?', 'Get Started?', 'Launch Now?'];
let wordIndex = 0;
let letterIndex = 0;
let currentWord = '';
let isDeleting = false;

function type() {
    currentWord = words[wordIndex];
    if (isDeleting) {
        // Remove a character
        typewriterElement.textContent = currentWord.substring(0, letterIndex--);
    } else {
        // Add a character
        typewriterElement.textContent = currentWord.substring(0, letterIndex++);
    }

    if (!isDeleting && letterIndex === currentWord.length) {
        // Pause before deleting
        isDeleting = true;
        setTimeout(type, 500); // Longer pause after the full word, including the question mark
    } else if (isDeleting && letterIndex === 0) {
        // Move to the next word
        isDeleting = false;
        wordIndex = (wordIndex + 1) % words.length;
        setTimeout(type, 500); // Pause before typing the next word
    } else {
        setTimeout(type, isDeleting ? 200 : 150); // Adjust speeds for deleting and typing
    }
}

// Start the typewriter effect
type();

// FAQ Items
const faqItems = Array.from(document.querySelectorAll('.cs-faq-item'));
    for (const item of faqItems) {
        const onClick = () => {
        item.classList.toggle('active')
    }
    item.addEventListener('click', onClick)
    }