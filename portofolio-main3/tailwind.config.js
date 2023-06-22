/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class', // or 'media' or 'class'
  content: ["index.html"],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        primary: "#3DF1EF",
        second: "#64748b",
        dark: "#0f172a",
      },
      screens: {
        "2xl": "1320px",
      },
      animation: {
        "bounce-slow": "bounce 40s infinite;",
      },
    },
  },
  plugins: [],
};


