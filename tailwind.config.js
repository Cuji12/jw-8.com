/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
  ],
    theme: {
        extend: {
            colors: {
                'blue': '#0a2f73',
                'light-blue': "#a7bedd",
                'light-grey': '#666666'
            },
        },
    },

    plugins: [],
}

