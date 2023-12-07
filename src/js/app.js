document.addEventListener('DOMContentLoaded', () => {
    const scrollItems = document.querySelectorAll('.scroll-item');
    const scrollImg = document.querySelectorAll('.scroll-img')
    const scrollItemForBackground = document.querySelectorAll('.scroll-item')[1]

    const scrollAnimation = () => {
        let windowCenter = (window.innerHeight / 2) + window.scrollY;
        console.log('WindowCenter: ', windowCenter);

        let scrollOffset = window.scrollY + scrollItemForBackground.getBoundingClientRect().top;
        
        const backgroundElement = document.getElementById("body");

        console.log(scrollOffset);
        
        if (windowCenter >= scrollOffset) {
            backgroundElement.style.background = 'url(img/cookies-bg.jpg) no-repeat';
        }
        else {
            backgroundElement.style.background = 'linear-gradient(rgba(241, 200, 141, 0.8), rgba(214, 178, 128, 0.1)) no-repeat';
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