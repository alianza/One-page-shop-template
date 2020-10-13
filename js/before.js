$(document).ready(function(){
    document.querySelectorAll('a[href^="#products_div_container"], a[href^="#info_div_container"]').forEach(anchor => {anchor.addEventListener('click', function (e) {
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
    const elemParentHeight = elemParent.innerHeight();
    const extraSpacingBecauseOfBorderBottoms = 2;
    const extra = extraSpacingBecauseOfBorderBottoms;

    if (elem.getAttribute('open') == null) {
        document.body.style.overflowX = 'hidden';

            setTimeout(() => {
                elemParent.get(0).animate([
                    { height: elemParentHeight + "px" },
                    { height: elemParent.innerHeight() + "px" }
                ], {
                    duration: 250,
                    easing: 'ease-in-out'
                });
            }, 0);
    } else {
        document.body.style.overflowX = 'inherit';

            elemParent.get(0).animate([
                { height: elemParent.innerHeight() + "px" },
                { height: elemParentHeight + "px" }
            ], {
                duration: 250,
                easing: 'ease-in',
            });
    }

    setTimeout(() => {
        document.body.style.overflowX = 'inherit';
    }, 500);
}
