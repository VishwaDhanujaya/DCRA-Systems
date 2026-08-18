/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./includes/**/*.php",
    "./assets/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        white: '#FAFAFA',
        primary: {
          DEFAULT: '#4E0000',
          dark: '#3A0000',
          light: '#6B0000',
          soft: '#FAF0F0'
        },
        secondary: {
          DEFAULT: '#13273F',
          dark: '#0D1C2E',
          light: '#1D3B5E',
          soft: '#F0F4F8'
        },
        accent: {
          gold: '#D4AF37',
          'gold-dark': '#C5A059',
          'gold-light': '#F3E5AB'
        },
        surface: '#FDFBF9'
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'sans-serif'],
        heading: ['Montserrat', 'Inter', 'sans-serif'],
        montserrat: ['Montserrat', 'sans-serif'],
        inter: ['Inter', 'sans-serif']
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}
