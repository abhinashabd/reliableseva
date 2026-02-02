/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: '#0056b3', // Example blue from the reference
                secondary: '#ffc107', // Example yellow accent
            }
        },
    },
    plugins: [],
};
