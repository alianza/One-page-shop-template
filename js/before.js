$(document).ready(function(){
    document.querySelectorAll('a[href^="#products_container"], a[href^="#info_container"]').forEach(anchor => {anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
    // Details tag animation handler listener
    document.querySelectorAll('details summary').forEach(elem => {
        elem.addEventListener("click", function() { animateDetailsTag(elem) });
    })

});

function animateDetailsTag(elem) {
    const elemParent = $(elem).parent();
    const detailsContent = $(':not(:first-child', elemParent);

    document.body.style.overflowX = 'hidden';

    if (!elemParent.attr('open')) {
        setTimeout(() => {

            const height = detailsContent.height();

            detailsContent.each(function () {
                $(this).css('height', 0);

                $(this).animate({
                    height: height + "px"
                }, 250, function () {
                    detailsContent.each(function () {
                        $(this).css('height', 'auto');
                    });
                });
            });
        });
    } else {
        const height = $(elem).outerHeight(true);

        elemParent.animate({
            height: height + "px"
        }, 250, function () {
            elemParent.css('height', 'auto');
        });
    }

    setTimeout(() => {
        document.body.style.overflowX = 'inherit';
    }, 500);
}
