import './bootstrap';
import.meta.glob(['../img/**']);
import Alpine from 'alpinejs';
import { Splide } from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';
import '@splidejs/splide/css';

window.Alpine = Alpine;
window.Splide = Splide;
window.AutoScroll = AutoScroll;

Alpine.start();
