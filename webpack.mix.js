// Using Laravel Mix is optional as the styles you need to get started are already included.
// However, if you add new Tailwind classes, or any customizations, you can use Webpack to
// compile the assets. See https://hydephp.com/docs/1.x/managing-assets.html.

let mix = require('laravel-mix');

mix.js('resources/assets/app.js', 'app.js')
    .postCss('resources/assets/app.css', 'app.css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .setPublicPath('_media')
    .options({
        // Modern JavaScript without legacy polyfills
        babelConfig: {
            presets: [
                ['@babel/preset-env', {
                    targets: {
                        // Target modern browsers (last 2 versions, not IE)
                        browsers: [
                            'last 2 Chrome versions',
                            'last 2 Firefox versions',
                            'last 2 Safari versions',
                            'last 2 Edge versions',
                        ]
                    },
                    modules: false,
                    useBuiltIns: 'usage',
                    corejs: 3,
                    bugfixes: true,
                }]
            ]
        },
        terser: {
            terserOptions: {
                compress: {
                    drop_console: true, // Remove console.log in production
                    drop_debugger: true,
                    passes: 2, // Multiple optimization passes
                    pure_funcs: ['console.log', 'console.info', 'console.debug'],
                },
                mangle: true,
                output: {
                    comments: false, // Remove all comments
                },
                ecma: 2020, // Target modern JavaScript
            },
        },
        // Optimize CSS
        processCssUrls: false,
    })
    // Cache busting with versioning for production
    .version()
    .disableNotifications()
