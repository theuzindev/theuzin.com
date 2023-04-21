const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                figtree: ['Figtree', ...defaultTheme.fontFamily.sans],
                bangers: ['Bangers', ...defaultTheme.fontFamily.sans]
            },
        },
    },
    plugins: [],
}
