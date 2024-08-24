import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "public/assets/css/styles.css",
                "public/assets/js/datatables-simple-demo.js",
                "public/assets/js/scripts.js",
                'public/assets/demo/chart-area-demo.js',
                'public/assets/demo/chart-bar-demo.js',
                'public/assets/demo/chart-pie-demo.js',
                'public/assets/demo/datatables-demo.js'
            ],
            refresh: true,
        }),
    ],
});
