import liveReload from 'vite-plugin-live-reload'
import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    // outDir に manifest.json を出力
    manifest: true,
    rollupOptions: {
      // デフォルトの .html エントリを上書き
      input: "/src/main.ts",
    },
  },
  plugins: [
  ]
});
