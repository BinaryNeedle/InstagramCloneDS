/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                insta: "Insta",
            },
            // aspectRatio: {
            //     "2/3": "480px / 720px",
            // },
            // spacing: {
            //     "23r": "480px",
            // },
            // height: {
            //     "23r": "720px",
            // },
        },
    },
    plugins: [],
};
