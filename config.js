var project     = 'domino',
    theme       = './theme/',
    build       = './build/',
    dist        = './dist/',
    assets      = theme + 'assets/'
    bower       = './bower_components/';

var path = require('path');

var includePaths = [
  __dirname + '/bower_components/' + 'bootstrap-sass/assets/stylesheets',
  __dirname + '/bower_components/' + 'fontawesome/scss'
];

module.exports = {

  bower: {
    normalize: { // Copies `normalize.css` from `bower_components` to `src/scss` and renames it to allow for it to imported as a Sass file
      src: bower+'normalize.css/normalize.css',
      dest: assets + 'scss',
      rename: '_normalize.scss'
    }
  },

  theme: {
    lang: {
      src: theme + "languages/**/*",
      dest: build + 'languages/'
    },
    php: {
      src: theme + "**/*.php",
      dest: build
    }
  },

  utils: {
    clean: [build + "**/.DS_Store"],
    wipe: [dist],
    dist: {
      src: [build + '**/*', '!' + build + "**/*.min.css*"],
      dest: dist
    }
  },

  styles: {
    build: {
      src: [assets + "scss/**/*scss", '!' + assets + "scss/_*.scss"],
      dest: build,
      ruby: {
        src: assets + "scss/"
      }
    },
    dist: {
      src: [dist + '**/*.css', '!' + dist + '**/*.min.css'],
      dest: dist
    },
    compiler: "libsass",
    autoprefixer: {
      browsers: ['> 3%', 'last 2 versions', 'ie 9', 'ios 6', 'android 4']
    },
    rename: { suffix: '.min' },
    minify: {
      keepSpecialComments: 1,
      roundingPrecision: 3
    },
    rubySass: {
      loadPath: includePaths,
      precision: 6,
      'sourcemap=none': true
    },
    libsass: {
      includePaths: includePaths,
      precision: 6,
      onError: function(err) {
        return console.log(err);
      }
    }
  },

  scripts: {
    dest: build + "assets/js/",
    lint: {
      src: [theme + 'assets/**/*.js']
    },
    minify: {
      src: [build + 'assets/js/**/*.js', '!' + build + 'assets/js/**/*.min.js'],
      rename: { suffix: '.min' },
      uglify: {},
      dest: build + 'assets/js/'
    },
    namespace: 'wp-'
  },

  browsersync: {
    files: [build + '/**', '!' + build + '/**.map'],
    notify: true,
    open: true,
    port: 3000,
    proxy: 'localhost:8080',
    watchOptions: {
      debounceDelay: 2000
    }
  },

  images: {
    build: {
      src: theme + "**/*(*.jpg|*.png|*.jpeg|*.gif)",
      dest: build
    },
    dist: {
      src: [dist + '**/*(*.jpg|*.png|*.jpeg|*.gif)', '!' + dist + 'screenshot.png'],
      imagemin: {
        optimizationLevel: 7,
        progressive: true,
        iterlaced: true
      },
      dest: build
    }
  },

  livereload: {
    port: 35729
  },

  watch: {
    src: {
      styles: assets + 'scss/**/*.scss',
      scripts: [assets + 'js/**/*.js', bower + '**/*.js'],
      images: assets + 'images/**/*(*.jpg|*.png|*.jpeg|*.gif)',
      theme: theme + '**/*.php',
      livereload: [build + '**/*']
    },
    watcher: 'livereload'
  },

  paths: {
    theme: "../",
    styles: "./styles/",
    tasks: "./tasks/",
    cssDest: "../assets/css"
  },

  ignoreGlobal: "!./styles/style.{less,scss,sass,css}",

}
