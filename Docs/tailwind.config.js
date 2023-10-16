/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}", "./!(build|dist|.*)/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        white: "#fff",
        black: "#000",
        gray: {
          "100": "#1e1e1e",
          "200": "#161414",
        },
        sienna: "#844b4b",
      },
      spacing: {},
      fontFamily: {
        "bebas-neue": "'Bebas Neue'",
      },
      borderRadius: {
        xl: "20px",
        "2xs": "11px",
      },
    },
    fontSize: {
      "17xl": "36px",
      "13xl": "32px",
      base: "16px",
      xl: "20px",
      xs: "12px",
      "21xl": "40px",
      "45xl": "64px",
      inherit: "inherit",
    },
  },
  corePlugins: {
    preflight: false,
  },
};
