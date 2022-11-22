import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/root.css",
                "resources/js/app.js",
                "resources/js/checkContact.js",
                "resources/js/buttonScroll.js",
                "resources/js/checkRegister.js",
                "resources/js/checkCreate.js",
                "resources/js/checkLogin.js",
                "resources/js/map.js",
            ],
            refresh: true,
        }),
    ],
});
