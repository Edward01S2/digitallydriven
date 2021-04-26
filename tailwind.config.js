module.exports = {
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
      './resources/**/*.scss',
    ],
  },
  mode: 'jit',
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'c-blue' : {
          100: '#55A7E1',
          150: '#12809C',
          200: '#194198',
          300: '#2D3F68',
          400: '#0C1E43',
          500: '#294071',
          600: '#254777',
        },
        'c-orange' : {
          100: '#F6A75D',
        },
        'c-gray' : {
          700: '#707070',
        },
        'c-green' : {
          100: '#14AE56',
        }
      },
      fontFamily: {
        'open' : ['Open Sans', 'sans-serif'],
        'prag' : ['Pragati Narrow', 'sans-serif'],
      },
      maxWidth: {
        'sm/2' : '320px',
        'md/2' : '384px',
        'lg/2' : '512px',
        'lg-2/3' : '682.666667px',
        'xl/2' : '640px',
      },
      width: {
        'sm/2' : '320px',
        'md/2' : '384px',
        'lg/2' : '512px',
        'lg-2/3' : '682.666667px',
        'xl/2' : '640px',
        '2xl/2': '768px',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
};
