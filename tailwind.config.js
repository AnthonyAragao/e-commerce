import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                orange: {
                  400: '#fb923c', // Tailwind orange-400
                },
                purple: {
                  600: '#9333ea', // Tailwind purple-600
                },
                // primary: '#FF6500'
                primary: '#F23005',
                secondary: '#7364db',
                hovPrimary: '#E22D05',
                hovSecondary: '#6361db',
            },

            boxShadow: {
                'header': '0 4px 15px 0px rgb(0 0 0 / 0.08)',
                'card-reviews': 'rgba(40, 41, 61, 0.04) 0px 1px 2px, rgba(96, 97, 112, 0.16) 0px 2px 4px;',
            },

        },
    },
};
