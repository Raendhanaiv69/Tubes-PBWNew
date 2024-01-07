/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            bk: "#FFC436",
            fx: "#FBEEAC",
            txt: "#ffffff",
            bl: "#0174BE",
            bll: "#0C356A",
            blk: "#1E1E1E",
            abu: "#F7F4F4",
        },
        fontFamily: {
            ultra: "Space Grotesk",
        },
    },

    plugins: [],
};
