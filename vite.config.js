import { defineConfig } from "vite";
import path from "path";
import liveReload from 'vite-plugin-live-reload'

export default defineConfig(async () => {
  return {
    base: process.env.NODE_ENV === 'development' ? '/' : '/dist/',
    css: {
      devSourcemap: true
    },
    server: {
      cors: true,
      strictPort: true,
      https: false,
    },
    resolve: {
      alias: {
        '@': path.resolve(__dirname, './'),
        '@assets': path.resolve(__dirname, './src/assets/'),
        '@global': path.resolve(__dirname, './src/assets/scss/global/')
      }
    },
    build: {
      outDir: path.resolve(__dirname, './dist'),
      emptyOutDir: true,
      manifest: true,
      target: 'es2018',
      minify: true,
      write: true,
      rollupOptions: {
        input: {
          app: path.resolve(__dirname, "src/assets/js/app.js"),
        },
        output: {
          entryFileNames: "js/app.min.js",
          assetFileNames: "css/app.min.css",
        },
      },
      terserOptions: {
        format: {
          comments: false
        }
      }
    },
    plugins: [
      liveReload(__dirname + '/**/*.php'),
    ]
  };
});