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
            sans: ['Roboto', 'sans-serif'], // Para el texto del cuerpo
            display: ['Poppins', 'sans-serif'], // Para títulos y elementos destacados
        },
    },
  },
  plugins: [],
};