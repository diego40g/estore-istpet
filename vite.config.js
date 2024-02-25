import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.sass', 'resources/js/app.js'],
            refresh: true,
            css: {
                outputPath: `resources/css/${process.env.MIX_CSS_DIR}`,
              },
        }),
    ],
});
