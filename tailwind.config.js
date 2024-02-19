/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      colors : {
        'primary' : '#00558F',
        'secondary' : '#89A9DE',
      },
      fontFamily : {
        'poppins' : ["Poppins", "sans-serif"],
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

