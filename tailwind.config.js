/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './assets/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        navy: {
          900: '#001f3f',
        },
        orange: {
          500: '#ff851b',
        },
        'muted-slate': {
          900: '#1a202c',
        },
      },
      borderRadius: {
        '4xl': '2rem',
      },
    },
  },
  plugins: [],
};
