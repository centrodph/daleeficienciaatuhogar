module.exports = function() {
  var baseapp = "/";
  var lessfolder = "less/";

  var config = {
    libjsExport: "lib.js",
    libcssExport: "lib.min.css",
    cssfolder: "css/",
    fontfolder: "fonts/",
    jsfolder: "js/",

    serve: {
      base: baseapp,
      main: "index.php"
    },
    cssdependencies: ["css/nivo-slider.css", "sh/shadowbox.css"],
    jsdependencies: [
      "js/jquery-1.5.2.min.js",
      "js/cufon-yui.js",
      "js/myriad-pro.cufonfonts.js",
      "js/jquery.nivo.slider.pack.js",
      "sh/shadowbox.js"
    ],
    lessCompile: [lessfolder + "aque.less"],
    lessWatch: [
      lessfolder + "*.less",
      lessfolder + "modulos/*.less",
      lessfolder + "desktop/*.less"
    ],
    jsWatch: [this.jsfolder + "*.js"],
    htmlWatch: [baseapp + "*.html", baseapp + "inc/*.php", baseapp + "*.php"]
  };
  return config;
};
