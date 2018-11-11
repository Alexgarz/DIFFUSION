/* globals module, require,
 |
 |------------------------------------------------------------------------------
 | Grunt Setup
 |------------------------------------------------------------------------------
 |
 | Define Grunt settings and tasks.
 |
 */

const sass = require('node-sass');

module.exports = function (grunt) {
    "use strict";

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            options: {
                implementation: sass,
                outputStyle: 'compact'
            },
            browse: {
                files: {
                    // destination : // Source
                    'style.css': 'assets/scss/style.scss'
                }
            }
        },
        postcss: {
            options: {
                // Inline sourcemaps
                map: false,
                processors: [
                    require('autoprefixer')({browsers: 'last 2 versions'})
                ]
            },
            dist: {
                // destination : // Source
                src: ['*.css', '*.css']
            }
        },
        // Project configuration.
        concat: {
          options: {
            separator: ';',
            stripBanners: true,
            banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' + '<%= grunt.template.today("yyyy-mm-dd") %> */',
          },
          dist: {
            src: [
                  'assets/js/scripts.js'],
            dest: 'assets/js/scripts.build.js',
          },
        },
        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'images/build/'
                }]
            }
        },
        watch: {
            scripts: {
                files: ['assets/js/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: false
                }
            },
            styles: {
                files: ['assets/scss/*.scss'],
                tasks: ['sass', 'postcss'],
                options: {
                    spawn: false
                }
            }
          }
        //}
    });

    // Load the plugins
    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
};
