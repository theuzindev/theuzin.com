/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./app.vue', './components/**/*.vue'],
  theme: {
    extend: {}
  },
  plugins: [require('daisyui')]
}
