document.addEventListener('DOMContentLoaded', () => {
    const scrollItems = document.querySelectorAll('.scroll-item');
    const scrollImg = document.querySelectorAll('.scroll-img')
    const scrollItemForBackground = document.querySelectorAll('.scroll-item')[0]

    const scrollAnimation = () => {
        let windowCenter = (window.innerHeight / 2) + window.scrollY;
        console.log('WindowCenter: ', windowCenter);

        let scrollOffsetBacground = window.scrollY + scrollItemForBackground.getBoundingClientRect().top;
        
        const backgroundElement = document.getElementById('img-background');

        var body = document.body,
            html = document.documentElement;

        docHeight = Math.max( body.scrollHeight, body.offsetHeight,
                              html.clientHeight, html.scrollHeight, html.offsetHeight );

        // console.log(scrollOffsetBacground);
        
        // Появление бэкграунда при прокрутке
        if (window.scrollY > 0) {
            backgroundElement.classList.add('background-anim');
        }
        else {
            backgroundElement.classList.remove('background-anim');
        }

        // Движение фона за скролл баром
        if (windowCenter >= scrollOffsetBacground) {
            console.log(window.scrollY);

            backgroundElement.style.backgroundPositionY = (-20 + (window.scrollY/docHeight)*20 + '%');
        }

        // Появление блоков
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

        // Появление изображений
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