/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors : {
        'primary' : '#1D3566',
        'secondary' : '#89A9DE',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

