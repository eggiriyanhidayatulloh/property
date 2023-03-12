/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    
    extend: {
      backgroundImage: {
        'sumarecon': "url('/public/image/sumarecon1.jpg')",
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
