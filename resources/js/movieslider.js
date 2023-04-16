
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";

document.addEventListener('DOMContentLoaded', function () {
    let splide = new Splide('.splide', {
        type: 'slide',
        focus: 'center',
        perPage: 7,
        autoWidth: true,
        trimSpace  : false,
        gap: '1em',
        rewind: true,
        autoScroll: {
            speed: 1,
            autoStart: false,
            rewind: true
        },
        breakpoints: {
            
            300: {
                perPage: 1,
            },
            600: {
                perPage: 2,
            },
            860: {
                perPage: 3,
            },
            1024: {
                perPage: 4,
            },
            1300: {
                perPage: 5,
            },
            1536: {
                perPage: 6,
            }
        }
    });

    var bar = splide.root.querySelector('.my-carousel-progress-bar');
    let nodeList = document.querySelectorAll('.splide__slide');

    // Bugfix for the 'fewer element is available than the setup option' error & pause auto scroll
    splide.on('mounted', function () {
        if (splide.length <= splide.options.perPage) {
            splide.options.perPage = splide.length;
            splide.Components.AutoScroll.pause();
        }
    });

    // Pause AutoScroll animation on mobile
    splide.on('mounted updated', function () {
        var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        if (width < 768) {
            splide.Components.AutoScroll.pause();
        }
        else{
            splide.Components.AutoScroll.play();
        }
    });

    splide.on('mounted active', function () {

        // Update progress bar whenever the carousel moves:
        var end = splide.Components.Controller.getEnd() + 1;
        var rate = Math.min((splide.index + 1) / end, 1);
        bar.style.width = String(100 * rate) + '%';

        if (nodeList.length > 1) {

            // Remove all color
            for (let i = 0; i < nodeList.length; i++) {
                document.getElementById(nodeList[i].id).classList.remove('bg-yellow-500');
                document.getElementById(nodeList[i].id).classList.add('hover:bg-gray-600');
            }

            // Add color to currently active element
            nodeList[splide.index].classList.add('bg-yellow-500');
            nodeList[splide.index].classList.remove('hover:bg-gray-600');
        }
    })

    splide.mount({ AutoScroll });
});