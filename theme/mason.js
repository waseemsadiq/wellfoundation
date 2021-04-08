const mason = require('@joomlatools/mason-tools-v1');
const revalidatorUrl = "https://files.joomlatools.com/pages@0.19.3/mason-revalidator.js";

async function postcss() {
  await mason.css.process(`css/input.css`, `css/output.css`, {
    tailwind: {    
      purge: {
        enabled: 0,
        content: [
          '../**/*.html.php',
        ],
        options: {
          safelist: [
          // These classes are used by MIX, let's add them to the safe list
          'lazyprogressive', 
          'bg-center', 
          'bg-cover', 
          'bg-right', 
          'object-center', 
          'object-right',
          // These classes are used by icons, let's add them to the safe list
          'w-5',
          'h-5',
          'mr-1',
          // These classes are used by buttons, let's add them to the safe list
          'bg-indigo-600',
          'bg-indigo-400',
          'bg-green-600',
          'bg-green-400',
          'bg-blue-600',
          'bg-blue-400',
          'bg-red-600',
          'bg-red-400',
          // These classes are used by buttons, let's add them to the safe list
          'md:w-1/2',
          'md:w-1/3',
          'md:w-1/4',
          'md:w-1/5',
          // These classes are used by food programme countries, let's add them to the safe list
          'lg:grid-cols-4',
          ],
        },
      },
      theme: {
        extend: {
          colors: {
            // Joomlatools blue
            'brand': '#51CC41',
            'green' : {
              50: '#F7FDF6',
              100: '#EEFAEC',
              200: '#D4F3D0',
              300: '#B8EBB2',
              400: '#86DC7A',
              500: '#51CC41',
              600: '#49B63A',
              700: '#317B27',
              800: '#255C1E',
              900: '#183C13'
            },
            'blue': {
              50: '#f3fbff',
              100: '#e6f7fe',
              200: '#c0ebfb',
              300: '#97def9',
              400: '#4dc6f4',
              500: '#00adef',
              600: '#009ad5',
              700: '#006890',
              800: '#004e6c',
              900: '#003346'
            },
          },
          height: {
            '104': '26em',
            '112': '28em',
            '120': '30em',
            '128': '32em',
          },
        }
      },
      variants: {
        opacity: ['responsive', 'hover'],
        borderWidth: ['responsive', 'hover', 'focus'],
      },
      plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
      ],
    },

    postcssPresetEnv: {
      stage: 2, // default is 2 (A Working Draft championed by a W3C Working Group.)
      autoprefixer: { cascade: true },
      features: {
          'focus-within-pseudo-class': false, // Uncomment this if purge is set to false
      },
    }

  });
}

async function sync() {
  mason.browserSync({
    watch: true,
    server: {
       baseDir: './sites/thewell.foundation/theme'
    },
    files: 'css/*.css',
  });
}

module.exports = {
  version: '1.0',
  tasks: {
    postcss,
    sync,
    watch: {
      path: ['.'],
      callback: async (path) => {
        if (path.endsWith('css/input.css')) {
          await postcss();
        }
      },
    },
  },
};
