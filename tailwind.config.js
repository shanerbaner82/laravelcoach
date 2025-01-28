import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Lato', 'system-ui', 'sans'],
                'serif': ['Doto', 'system-ui', 'sans-serif'],
            }
        },
    },
}
