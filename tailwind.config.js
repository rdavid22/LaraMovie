const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./node_modules/tw-elements/dist/js/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                'sans': 'netflix',
                'cheeky': 'cheeky',
                'roboto': 'roboto',
                'roboto-light': 'roboto-light',
                'roboto-bold': 'roboto-bold'
            },
            backgroundImage: {
                'hero-image': "linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)),url('/resources/img/hero.jpg')",
                'default-image': "url('/resources/img/default.webp')"
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require("tw-elements/dist/plugin")],
};
