const defaultTheme = require('tailwindcss/defaultTheme');
const { addDynamicIconSelectors } = require("@iconify/tailwind")

module.exports = {
    darkMode: 'class',
    content: [
        './_pages/**/*.blade.php',
        './resources/views/**/*.blade.php',
        './vendor/hyde/framework/resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'sans-serif'],
                heading: ['system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'sans-serif'],
                mono: ['ui-monospace', 'SFMono-Regular', 'SF Mono', 'Menlo', 'Consolas', 'Liberation Mono', 'monospace'],
            },
            typography: {
                DEFAULT: {
                    css: {
                        lineHeight: '1.5em',
                        maxWidth: '96ch',
                        h2: {
                            marginBottom: '0.75em',
                            marginTop: '1.5em',
                        },
                        a: {
                            color: '#5956eb',
                            '&:hover': {
                                color: '#4f46e5',
                            },
                            textDecoration: 'none'
                        },
                        blockquote: {
                            backgroundColor: '#80808020',
                            borderLeftColor: '#d1d5db',
                            color: 'unset',
                            fontWeight: 500,
                            fontStyle: 'unset',
                            lineHeight: '1.25em',
                            paddingLeft: '0.75em',
                            paddingTop: '.25em',
                            paddingBottom: '.25em',
                            marginTop: '1em',
                            marginBottom: '1em',
                            p: {
                                paddingRight: '.25em',
                                marginTop: '.25em',
                                marginBottom: '.25em',
                            },
                            'p::before': {
                                content: 'unset',
                            },
                            'p::after': {
                                content: 'unset',
                            },
                        },
                        code: {
                            font: 'unset',
                            backgroundColor: '#80808033',
                            paddingLeft: '4px',
                            paddingRight: '4px',
                            marginLeft: '-2px',
                            marginRight: '1px',
                            borderRadius: '4px'
                        },
                        'code::before': {
                            content: 'unset',
                        },
                        'code::after': {
                            content: 'unset',
                        },
                        pre: {
                            code: {
                                fontFamily: "'Fira Code Regular', Consolas, Monospace, 'Courier New'",
                            }
                        },
                    },
                },
                invert: {
                    css: {
                        a: {
                            color: '#818cf8',
                            '&:hover': {
                                color: '#6366f1',
                            },
                        },
                    },
                },
            },
            colors: {
                indigo: {
                    500: '#5956eb',
                },
                primary: "#003366",
                "primary-dark": "#99ccff",
                secondary: "#a9bacb",
                "secondary-dark": "#344556",
                accent: {
                    500: "#0080ff80",
                    700: "#007fff"
                },
                "text-normal": "#eeeff1",
                "text-normal-dark": "#0e0f11",
                "gray-normal": "#f4f5f6",
                "dark-normal": "#090a0b",
                "black-normal": "#0f1012",
                "gray-light-solid": "#191c1f",
                "gray-light": {
                    500: "#a9bacb1a",
                    600: "#a9bacb33",
                    700: "#0033660d"
                },
                drupal: {
                    50: '#f0f9ff',
                    100: '#e0f2fe',
                    200: '#bae6fd',
                    300: '#7dd3fc',
                    400: '#38bdf8',
                    500: '#0ea5e9',
                    600: '#0284c7',
                    900: '#0c4a6e',
                },
                dark: {
                    800: '#1e293b',
                    900: '#0f172a',
                    950: '#020617',
                }
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'hero-glow': 'conic-gradient(from 90deg at 50% 50%, #0f172a 0%, #1e293b 50%, #0f172a 100%)',
            }
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        addDynamicIconSelectors()
    ],
};
