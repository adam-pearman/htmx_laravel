/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin')

export default {
  content: ["./resources/**/*.blade.php"],
  theme: {
    extend: {
      spacing: {
        13: '3.25rem',
      },
    },
  },
  plugins: [
    plugin(function({ addVariant }) {
      addVariant('htmx-settling', ['&.htmx-settling'])
      addVariant('htmx-request',  ['&.htmx-request'])
      addVariant('htmx-swapping', ['&.htmx-swapping'])
      addVariant('htmx-added',    ['&.htmx-added'])
    }),
  ],
}

