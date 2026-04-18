import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

    theme: {
        extend: {
            colors: {
                surface: '#f7f9fb',
                'surface-container-low': '#f2f4f6',
                'surface-container-lowest': '#ffffff',
                'on-surface': '#191c1e',
                'outline-variant': '#bbcabd',
                primary: '#006d40',
                'primary-container': '#1dcf81',
                secondary: '#515e81',
                'on-secondary-fixed': '#0c1a3a',
                'inverse-on-surface': '#eff1f3',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                headline: ['Plus Jakarta Sans', ...defaultTheme.fontFamily.sans],
                body: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                'fade-up': {
                    '0%': { opacity: '0', transform: 'translateY(18px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
            },
            animation: {
                'fade-up': 'fade-up 700ms ease-out forwards',
            },
        },
    },

    plugins: [forms],
};
