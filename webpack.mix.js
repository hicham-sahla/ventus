const mix = require("laravel-mix");
require("tailwindcss");

mix
  .setPublicPath("assets")
  .sass("src/scss/main.scss", "css/")
  .options({
    processCssUrls: false,
    postCss: [require("tailwindcss")],
  })
  .js("src/js/main.js", "js/")
  .minify(["assets/css/main.css", "assets/js/main.js"])
  .copyDirectory("node_modules/font-awesome/fonts", "assets/fonts");
