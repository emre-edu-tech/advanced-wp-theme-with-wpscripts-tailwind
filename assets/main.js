window.addEventListener('DOMContentLoaded', () => {
    // Custom coded desktop and mobile dropdown functionality for Bootstrap 5
    // This code is important for the Bootstrap navbar to behave different for desktop and mobile
    // Managing the dropdown for navbar for both mobile and desktop views
    const parentMenuItemLink = document.querySelector('a.nav-link.dropdown-toggle')
    if (window.innerWidth > 768) {
        // Desktop view
        // This code block makes the parent menu item clickable on Desktop View
        const desktopDropdown = document.querySelector('.navbar .dropdown')
        parentMenuItemLink.addEventListener('click', (event) => {
            location.href = event.target.href
        })
    } else {
        // Mobile View
        // Custom Mobile Parent menu icon is only visible on browser size less than 768px 
        const parentMenuItemIcon = document.querySelector('.navbar .dropdown i')
        // The code below is important to remove the default toggling functionalty from parent links
        parentMenuItemLink.removeAttribute('data-bs-toggle')
        parentMenuItemLink.addEventListener('click', (event) => {
            event.preventDefault()
            if(event.target.tagName == 'A') {
                if(event.target.getAttribute('href') == '#' || event.target.getAttribute('href') == '') {
                    toggleDropdown(event)
                } else {
                    location.href = event.target.href
                    return
                }
            }
        })

        parentMenuItemIcon.addEventListener('click', (event) => {
            toggleDropdown(event)
        })
    }

    function toggleDropdown(event) {
        const parentItem = event.target.parentNode
        const dropDownDiv = parentItem.querySelector('.navbar-nav .dropdown-menu')
        if(parentItem.classList.contains('show') && dropDownDiv.classList.contains('show')) {
            parentItem.classList.remove('show')
            dropDownDiv.classList.remove('show')
        } else {
            parentItem.classList.add('show')
            dropDownDiv.classList.add('show')
        }
    }
})