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
    theme: {
        extend: {
            // colors:{
            //     primary:"#EB5160",
            //     secondary:"#080936",
            //     accent:"#071013"
            // }
            colors:{
                background: "#13171C",
                primary: "#031930",
                secondary: "#3684DB",
                flamePea: "#DB5A36",
                accent:"#29324A",
                accentGray: "#808080",
                textColor: "#D1E8FF",
            },
            fontFamily: {
                hanken: ['Hanken Grotesk', 'sans-serif'],
                montserrat : ['Montserrat', 'sans-serif']
            },
        },
    },
    plugins: [],
};
