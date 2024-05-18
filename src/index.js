// Remmeber this is project entry point so we will list the css files we need here to make them
// available for bundling process.
import '../css/index.scss'
import '../css/style.css'

/** Mobile Menu Open-Close and Overlay Functionality starts */
// Mobile Menu Button
const mobileMenuButton = document.getElementById('mobile-menu-button')
// Close Button
const closeButton = document.getElementById('close-button')
// Mobile Menu Overlay
const mobileMenuOverlay = document.getElementById('mobile-menu-overlay')
// Mobile Menu
const mobileMenu = document.getElementById('mobile-menu')

// Function to toggle Mobile Menu and Its Overlay
const toggleMenu = () => {
    mobileMenu.classList.toggle('-translate-x-full')
    mobileMenuOverlay.classList.toggle('hidden')
}

mobileMenuButton.addEventListener('click', toggleMenu)
closeButton.addEventListener('click', toggleMenu)
mobileMenuOverlay.addEventListener('click', toggleMenu)
/** Mobile Menu Open-Close and Overlay Functionality ends */