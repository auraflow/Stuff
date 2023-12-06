document.addEventListener('DOMContentLoaded', () => {
    const scrollItems = document.querySelectorAll('.scroll-item');
    const scrollImg = document.querySelectorAll('.scroll-img')

    const scrollAnimation = () => {
        let windowCenter = (window.innerHeight / 2) + window.scrollY;
        // console.log('WindowCenter: ', windowCenter);

        scrollItems.forEach(el => {
            let scrollOffset = window.scrollY + el.getBoundingClientRect().top;

            // console.log("scrollOffset", scrollOffset);

            if (windowCenter >= scrollOffset) {
                el.classList.add('scroll-anim');
            }
            else {
                el.classList.remove('scroll-anim');
            }
        });

        scrollImg.forEach(el => {
            let scrollOffset = window.scrollY + el.getBoundingClientRect().top;

            // console.log("scrollOffset", scrollOffset);

            if (windowCenter >= scrollOffset) {
                el.classList.add('img-anim');
            }
            else {
                el.classList.remove('img-anim');
            }
        });
    };

    scrollAnimation();
    window.addEventListener('scroll', () => {
        scrollAnimation();
    });
});