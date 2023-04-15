
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";

document.addEventListener('DOMContentLoaded', function () {
    let splide = new Splide('.splide', {
        type: 'slide',
        perPage: 4,
        focus: 'center',
        gap: '1em',
        rewind: true,
        autoScroll: {
            speed: 2,
            autoStart: true,
            rewind: true
        },
    });

    var bar = splide.root.querySelector('.my-carousel-progress-bar');
    let nodeList = document.querySelectorAll('.splide__slide');

    // Bugfix for the 'fewer element is available than the setup option'
    splide.on('mounted', function () {
        if (splide.length <= splide.options.perPage) {
            splide.options.perPage = splide.length;
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