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
      fontFamily: {
       
      },
      colors: {
        pallette: {
          "primary-pink": "#d39888",
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