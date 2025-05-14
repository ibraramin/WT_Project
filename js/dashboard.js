document.addEventListener('DOMContentLoaded', function() {
    console.log("Recipeezz Dashboard JavaScript loaded!");

    
    const scrollProgressBar = document.getElementById('scrollProgressBar');
    const headerElement = document.querySelector('header.page-header');

    function updateScrollProgressBar() {
        if (!scrollProgressBar) return;

        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        
        if (scrollHeight > 0) {
            const scrolled = (scrollTop / scrollHeight) * 100;
            scrollProgressBar.style.width = scrolled + '%';
        } else {
            scrollProgressBar.style.width = '0%'; 
        }
    }
    
    function adjustProgressBarPosition() {
        const progressBarContainer = document.querySelector('.scroll-progress-container');
        if (headerElement && progressBarContainer) {
            progressBarContainer.style.top = headerElement.offsetHeight + 'px';
        }
    }

    window.addEventListener('scroll', updateScrollProgressBar);
    window.addEventListener('resize', () => {
        updateScrollProgressBar();
        adjustProgressBarPosition();
    });
    
    
    if (headerElement) { 
        adjustProgressBarPosition();
    }
    updateScrollProgressBar(); 

});