document.addEventListener('DOMContentLoaded', () => {
    const scrollItems = document.querySelectorAll('.scroll-item');
    const scrollImg = document.querySelectorAll('.scroll-img')
    const scrollItemForBackground = document.querySelectorAll('.scroll-item')[0]

    const scrollAnimation = () => {
        let windowCenter = (window.innerHeight / 2) + window.scrollY;
        console.log('WindowCenter: ', windowCenter);

        let scrollOffset = window.scrollY + scrollItemForBackground.getBoundingClientRect().top;
        
        const backgroundElement = document.getElementById("img-background");

        console.log(scrollOffset);
        
        if (windowCenter >= scrollOffset) {
            backgroundElement.classList.add('background-anim');
        }
        else {
            backgroundElement.classList.remove('background-anim');
        }

        scrollItems.forEach(el => {
            let scrollOffset = window.scrollY + el.getBoundingClientRect().top;

            // console.log("scrollOffset: ", scrollOffset);

            if (windowCenter >= scrollOffset) {
                el.classList.add('scroll-anim');
            }
            else {
                el.classList.remove('scroll-anim');
            }

        });

        scrollImg.forEach(el => {
            let scrollOffset = window.scrollY + el.getBoundingClientRect().top;

            // console.log("scrollOffset: ", scrollOffset);

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