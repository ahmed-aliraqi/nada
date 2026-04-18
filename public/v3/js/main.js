// Loading screen
setTimeout(function () {
    document.getElementById('loading-screen')?.classList.add('hidden');

    setTimeout(function () {
        document.querySelector('.page-wrapper')?.classList.add('loaded');
    }, 100);

}, 800);
