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
                primary: '#F23005'
            },

            boxShadow: {
                'header': '0 4px 15px 0px rgb(0 0 0 / 0.08)',
            },
        },
    },
};
