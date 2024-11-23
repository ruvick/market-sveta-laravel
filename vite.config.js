import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                
                "public/css/style.min.css", 
                "public/css/interface.css", 
                "public/css/filter.style.css",
                "public/css/mainsearch.css",
                "public/css/bascet.css",

                "resources/js/lib/lib.js",

                "public/js/modules/dynamic_adapt.js",
                "public/js/modules/forms.js",
                "public/js/modules/functions.js",
                "public/js/modules/map.js",
                "public/js/modules/regular.js",
                "public/js/modules/script.js",
                "public/js/modules/scroll.js",
                "public/js/modules/sliders.js",
                "public/js/modules/mainsearch.js",
                "public/js/modules/bascet.js",

                "public/js/libs/swiper.min.js",
            ],
            refresh: true,
            mode:'production'

        }),
    ],


});
