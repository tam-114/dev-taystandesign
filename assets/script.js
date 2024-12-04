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


//Carousel
const customCarousel = document.querySelector('.custom-carousel');
const images = document.querySelectorAll('.carousel-image');
const totalImages = images.length;

// Clone the images to create a seamless loop
images.forEach(image => {
    const clone = image.cloneNode(true);
    customCarousel.appendChild(clone);
});

let scrollPosition = 0;

function scrollCarousel() {
    // Move the carousel leftward
    scrollPosition -= 1; // Adjust speed by changing this value
    customCarousel.style.transform = `translateX(${scrollPosition}px)`;

    // Reset position if it reaches the end of the original images
    if (Math.abs(scrollPosition) >= totalImages * (images[0].offsetWidth + 10)) {
        scrollPosition = 0;
    }

    // Continue scrolling
    requestAnimationFrame(scrollCarousel);
}

// Start scrolling
scrollCarousel();
