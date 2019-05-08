const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    extend: {
      padding: {
        '11': '2.75rem'
      },
      colors: {
        brand: {
          100: '#e0eeff',
          200: '#b6d2ff',
          300: '#80a3ff',
          400: '#5483ff',
          500: '#3453f9',
          600: '#2740c2',
          700: '#1b2d87',
          800: '#121d59',
          900: '#090e2b'
        }
      },
      boxShadow: {
        outline: '0 0 0 4px rgba(52, 83, 249, 0.35)'
      }
    }
  },
  variants: {},
  plugins: []
}
