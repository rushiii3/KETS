/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./College/src/js/*.js",
    "./College/src/js/**/*.js",
    "./College/src/main/Components/**/*.{html,js,php}",
    "./College/src/main/Components/*.{html,js,php}",
    "./College/src/main/Layouts/*.{html,js,php}",
    "./College/src/main/Pages/**/*.{html,js,php}",
    "./College/src/main/Pages/*.{html,js,php}",

    "./College/src/main/Samples_Prototypes/**/*.{html,js,php}",
    "./College/src/main/Utils/*.{html,js,php}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
