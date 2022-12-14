const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    mode: "jit",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.jsx",
    ],
    theme: {
        extend: {
            transitionProperty: {
                height: "height",
                spacing: "margin, padding",
            },
            fontFamily: {},
            colors: {
                pallette: {
                    "light-blue": "#43c3ea",
                    "text-gray": "#999",
                    "light-light-blue": "#6c81bd",
                },
            },
        },
        screens: {
            xxs: "350px",
            xs: "475px",
            ...defaultTheme.screens,
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
