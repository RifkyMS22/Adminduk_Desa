/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resource/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {},
    },
    plugins: [require("@tailwindcss/form"), require("flowbite/plugin")],
};
