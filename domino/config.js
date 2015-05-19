module.exports = {

  paths: {
    theme: "../",
    styles: "./styles/",
    tasks: "./tasks/",
    cssDest: "../assets/css"
  },

  theme: {
    name: "Domino",
    uri: "http://underscores.me/",
    author: "Themazing Themes",
    authorUri: "http://folsomcreative.com/",
    description: "Description",
    version: "1.0.0",
    license: "GNU General Public License v2 or later",
    licenseUri: "http://www.gnu.org/licenses/gpl-2.0.html",
    textDomain: "domino",
    tags: "domino,themazing,theme,tags"
  },

  sass: {
    srcPath: "./styles/sass/**/*.{scss,sass}",
    ignore: "!./styles/sass/**/_*.{scss,sass}"
  },

  postcss: {
    srcPath: "./styles/css/**/*.css"
  },

  less: {
    srcPath: "./styles/less/**/*.less",
    ignore: "!./styles/less/**/_*.less"
  }

}