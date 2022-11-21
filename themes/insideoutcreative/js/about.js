// START OF FADE IN ANIMATIONS
isInViewport = function (elem) {
    distance = elem.getBoundingClientRect();
    return (
        distance.top >= 0 &&
        distance.left >= 0 &&
        distance.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        distance.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};

// START OF FADE IN ANIMATIONS
isAtTop = function (elem) {
    bounding = elem.getBoundingClientRect();
    return (
        bounding.top <= 0
    );
};
isNotAtTop = function (elem) {
    bounding = elem.getBoundingClientRect();
    return (
        bounding.top >= 0
    );
};

isActive = function (elem) {
    bounding = elem.getBoundingClientRect();
    return (
        bounding.bottom <= 0
    );
};

isAnchorAtTop = function (elem) {
    bounding = elem.getBoundingClientRect();
    return (
        bounding.top <= 200
    );
};
isAnchorNotAtTop = function (elem) {
    bounding = elem.getBoundingClientRect();
    return (
        bounding.top >= 200
    );
};

isAnchorActive = function (elem) {
    bounding = elem.getBoundingClientRect();
    return (
        bounding.bottom <= 200
    );
};

let scrollLength = window.scrollY;
window.addEventListener('scroll', function () {
    // fadeRight animation
    let fullHeight = document.querySelectorAll('.full-height');
    for (i = 0; i < fullHeight.length; i++) {

        id = fullHeight[i].getAttribute('id');
        anchor = document.querySelector('#anchor-' + id);
        // console.log(id);

        if (isAtTop(fullHeight[i])) {
            fullHeight[i].classList.add('active');
        }
        if (isNotAtTop(fullHeight[i])) {
            fullHeight[i].classList.remove('active');
        }
        if (isActive(fullHeight[i])) {
            fullHeight[i].classList.remove('active');
        }
        if (isAnchorAtTop(fullHeight[i])) {
            anchor.classList.add('active');
        }
        if (isAnchorNotAtTop(fullHeight[i])) {
            anchor.classList.remove('active');
        }
        if (isAnchorActive(fullHeight[i])) {
            anchor.classList.remove('active');
        }
    }

}, false);
// END OF FADE IN ANIMATIONS