const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
        customGray: '#dad5d2', // Называем наш цвет удобным именем
        'custom-color': '#51667f',
        'custom-color-darker': '#667283' // Немного затемнённая версия
      },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
