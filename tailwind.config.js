module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                blue: {
                    dark: "#291C60",
                    light: "#00B3D5",
                    DEFAULT: "#0068AE",
                },
                aqua: {
                    DEFAULT: "#56FBDB",
                    light: "#D6FEF6",
                },
                yellow: {
                    DEFAULT: "#F9F871",
                },
                red: {
                    DEFAULT: "#92201C",
                },
            },
            plugins: [],
        },
    },
};
