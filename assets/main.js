window.addEventListener('DOMContentLoaded', () => {
    // Custom coded desktop and mobile dropdown functionality
    // This code is important for the Bootstrap navbar to behave diffrent for desktop and mobile
    // Managing the dropdown for navbar for both mobile and desktop views
    const parentMenuItemLink = jQuery('a.nav-link.dropdown-toggle')
    if (jQuery(window).width() > 768) {
        jQuery('.navbar .dropdown').off('mouseover').off('mouseout')
        parentMenuItemLink.on('click', (event) => {
            location.href = event.target.href
        })
    } else {
        // window size mobile
        // Custom Mobile Parent menu icon is only visible on browser size less than 768px 
        const parentMenuItemIcon = jQuery('.navbar .dropdown i')
        // The code below is important to remove the default toggling functionalty from parent links
        parentMenuItemLink.removeAttr('data-toggle')
        parentMenuItemLink.on('click', (event) => {
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

        parentMenuItemIcon.on('click', (event) => {
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