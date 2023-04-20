import './bootstrap';
import.meta.glob(['../img/**']);
import Alpine from 'alpinejs';

// Splide-Scroll
import { Splide } from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';
import '@splidejs/splide/css';

// Tailwind-Elements
import * as tw from 'tw-elements';
// import { Collapse, initTE } from "tw-elements";
// initTE({ Collapse });

window.Alpine = Alpine;
window.Splide = Splide;
window.AutoScroll = AutoScroll;

Alpine.start();
