// Remmeber this is project entry point so we will list the css files we need here to make them
// available for bundling process.
import '../css/index.scss'
import '../css/style.css'

document.addEventListener("DOMContentLoaded", () => {
    /** Mobile Menu Open-Close and Overlay Functionality starts */
    // Mobile Menu Button
    const mobileMenuButton = document.getElementById("mobile-menu-button")
    // Close Button
    const closeButton = document.getElementById("close-button")
    // Mobile Menu Overlay
    const mobileMenuOverlay = document.getElementById("mobile-menu-overlay")
    // Mobile Menu
    const mobileMenu = document.getElementById("mobile-menu")

    // Function to toggle Mobile Menu and Its Overlay
    const toggleMenu = () => {
        mobileMenu.classList.toggle("-translate-x-full")
        mobileMenuOverlay.classList.toggle("hidden")
    }

    mobileMenuButton.addEventListener("click", toggleMenu)
    closeButton.addEventListener("click", toggleMenu)
    mobileMenuOverlay.addEventListener("click", toggleMenu)
    /** Mobile Menu Open-Close and Overlay Functionality ends */

    /** Lightbox feature for the Project images starts */
    // Open the lightbox with the intended image as the source
    // VERY IMPORTANT: If javascript functions to be in the global scope, then
    // they won't be accessible from INLINE EVENT HANDLERS like in this project.
    // This file is being generated Webpack (which is a module bundler).
    // Solution: Explicitly attach the functions to the WINDOW object. 
    window.openLightbox = (imageSrc) => {
        // Get lightbox modal
        const lightbox = document.getElementById("lightbox")
        // Get lightbox image
        const lightboxImage = document.getElementById("lightbox-image")
        lightboxImage.src = imageSrc
        lightbox.classList.remove("hidden")
        lightbox.classList.add("flex")
    }

    // Close the lightbox
    window.closeLightbox = () => {
        // Get lightbox modal
        const lightbox = document.getElementById("lightbox")
        lightbox.classList.add("hidden")
        lightbox.classList.remove("flex")
    }

    // Optional Feature: Close lightbox on outside click
    const lightbox = document.getElementById("lightbox")
    lightbox.addEventListener("click", (event) => {
        if (event.target !== event.currentTarget) return false
        closeLightbox()
    })
    /** Lightbox feature for the Project images ends */
})