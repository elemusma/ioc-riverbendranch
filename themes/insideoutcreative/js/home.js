// start of icons
let introIcons = document.querySelectorAll('.tab-icon');

for (i = 0; i < introIcons.length; i++) {
    introIcons[i].addEventListener('click', showContent);

    function showContent() {
        showIconsContent(this);
    }
}


let showIconsContent = (elem) => {

    // console.log(elem);
    let ID = elem.id;
    // console.log(ID);

    // needs to be before command adding class
    elemActive = document.querySelector('.tab-icon-active');

    // makes clicked element active
    if (!elem.classList.contains('tab-icon-active')) {
        elem.classList.add('tab-icon-active');
    }

    // makes all other elements inactive
    elemActive.classList.remove('tab-icon-active');

    // bgImg element
    bgImgActive = document.querySelector('.tab-bg-img-active');
    let bgImg = ID.replace("icon", "bg-img");
    let bgImgID = document.querySelector('#' + bgImg)
    // console.log(bgImgID)

    // makes bgImg element active
    if (!bgImgID.classList.contains('tab-bg-img-active')) {
        bgImgID.classList.add('tab-bg-img-active');
    }

    // makes all other bgImg elements inactive
    bgImgActive.classList.remove('tab-bg-img-active');

    tabContentActive = document.querySelector('.tab-content-active');
    let tabContent = ID.replace("icon", "content");
    let tabContentID = document.querySelector('#' + tabContent);
    // console.log(tabContentID);

    // makes clicked element active
    if (!tabContentID.classList.contains('tab-content-active')) {
        tabContentID.classList.add('tab-content-active');
    }

    // makes all other elements inactive
    tabContentActive.classList.remove('tab-content-active');
}
// end of icons

// start of bars
let colFullBackground = document.querySelectorAll('.col-full-background');

// Create a media condition that targets viewports at least 768px wide
const mediaQuery = window.matchMedia('(min-width: 1200px)')


if (mediaQuery.matches) {
    for (i = 0; i < colFullBackground.length; i++) {
        let parentRow = colFullBackground[i].parentElement;
        let innerContentOuter = colFullBackground[i].querySelector('.inner-content-outer');
        let innerContent = innerContentOuter.querySelector('.inner-content');
        let backgroundImage = colFullBackground[i].querySelector('.img-full-background');

        // console.log(colFullBackground[i].getBoundingClientRect().x);

        backgroundImage.style.left = `-${colFullBackground[i].getBoundingClientRect().x}px`;
        // console.log(backgroundImage.getBoundingClientRect());
        // let imageTitle = innerContentOuter.querySelector('.image-title');
        // let transformHeight = innerContentOuter.offsetHeight - imageTitle.offsetHeight;

        innerContentOuter.style.transform = `translate(0px, ${(innerContent.offsetHeight) + 10}px)`;

        // window.addEventListener('resize', function () {
        innerContentOuter.addEventListener('mouseenter', function () {
            parentRow.classList.add('active-inner-col');
            innerContentOuter.parentElement.classList.add('active');
            innerContentOuter.style.transform = `translate(0px, 0px)`;
        })

        innerContentOuter.addEventListener('mouseleave', function () {
            innerContentOuter.parentElement.classList.remove('active');
            parentRow.classList.remove('active-inner-col');
            innerContentOuter.style.transform = `translate(0px, ${(innerContent.offsetHeight) + 10}px)`;
        })
        // });

    }
}
// end of bars