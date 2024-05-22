/** @type {import('tailwindcss').Config} */
const { addDynamicIconSelectors } = require('@iconify/tailwind');

/** @type {import('tailwindcss').Config} */

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
  theme: {
    extend: {
        zIndex: {
            '1': '1',
            '2': '2',
        }
    },
  },
    plugins: [
        require('flowbite/plugin'),
        addDynamicIconSelectors()
    ],
}

