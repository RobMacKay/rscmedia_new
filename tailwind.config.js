import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const withMT = require("@material-tailwind/html/utils/withMT");

/** @type {import('tailwindcss').Config} */
export default withMT({
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                display: ['Titillium Web', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // 'primary': {
                //   100: '#404977',
                //   200: '#39416A',
                //   300: '#32395D',
                //   400: '#2B3150',
                //   500: '#242942',
                //   600: '#10131e',
                //   700: '#1D2135',
                //   800: '#161927',
                //   900: '#0F111A',
                //   950: '#07080D',
                // },
                'hook-green': '#4E6E58',
                'viridiran': '#4C8577',
                'tiff-blue': '#A6ECE0',
                'aquamarine': '#7ADFBB',
                primary: '#007b7c',
                secondary: '#6c757d',
                neutralDark: '#333333',
                neutralLight: '#f5f5f5',
                accent1: '#ffc857',
                accent2: '#00509e',
              },
        },
    },

    plugins: [forms, typography],
});
