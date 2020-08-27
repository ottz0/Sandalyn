module.exports = function (grunt) {


grunt.initConfig({


  /*=============================================
  =            Proxy server                    =
  =============================================*/
  // php: {
  //   dist: {
  //     options: {
  //       hostname: 'localhost',
  //       base: 'src', // Project root 
  //       keepalive: false,
  //       open: false
  //     }
  //   }
  // },
  
  // browserSync: {
  //   dev: {
  //     bsFiles: {
  //       src: [
  //         'src/*.html',
  //         'src/css/*.css'
  //       ]
  //     },
  //     options: {
  //       proxy: 'localhost',//<%= php.dist.options.hostname %>:<%= php.dist.options.port %>
  //           ghostMode: {
  //               clicks: false,
  //               forms: false,
  //               scroll: true
  //           },
  //           logLevel: 'info',//client
  //           logConnections: true,
  //           watchTask: true,
  //           open: 'ui',
  //           xip: true,
  //       }
  //   }
  // },
  /*=====  End of proxy server            ======*/

  
  /*=============================================
  =            Static server                    =
  =============================================*/
//   browserSync: {
//     bsFiles: {
//       src : [
//         'src/css/*.css',
//         'src/*.html',
//         'src/js/*.js',
//         'src/assets/scss/*.scss',
//         'src/assets/scss/*/*.scss',
//         'src/assets/scss/**/*.scss'
//       ]
//     },
//     options: {
//       watchTask: true,
//       host: "192.168.10.10",
//       open:false,
//       server: {
//           baseDir: "./"
//       }
//     }
//   },
  /*=====  End of Static server         ======*/
    clean: {
        build: {
            src: ['dist/*']
        }
    },
    sass: {                              
        src: {                            
            options: {                      
                style: 'expanded',
                sourcemap:false
            },
            files: {                         
                'sandalyn/style.css': 'scss/main.scss',
            }
        },
        // dist: {                            
        //     options: {                      
        //         style: 'compressed',
        //         sourcemap:false
        //     },
        //     files: {                         
        //         'dist/assets/css/sau-main.min.css': 'src/assets/scss/main.scss'
        //     }
        // }
    },
    watch: {
        // html: {
        //     files: [
        //         'src/*.html',
        //     ],
        // },
        sass:{
            files: [
                'scss/*.scss',
                'scss/*/*.scss',
                'scss/**/*.scss'
            ],
            tasks: ['sass:src'],
        }
    },
    usebanner: {
        dist: {
            options: {
                position: 'top',
                banner: 'monkeys',
                linebreak: true
            },
            files: {
                src: ['sau/style.css' ]
            }
        }
    }

    // uglify: {
    //     options: {
    //         mangle: false
    //     },
    //     dist: {
    //         files: {
    //             'dist/assets/js/sau-main.min.js': 
    //             [
    //                 'node_modules/jquery/dist/jquery.js',
    //                 'node_modules/zenscroll/zenscroll-min.js',
    //                 'node_modules/aos/dist/aos.js',
    //                 'node_modules/modaal/dist/js/modaal.min.js'
    //             ]
    //         }
    //     }
    // },
    // processhtml: {
    //     dist: {
    //         files: {
    //             'dist/index.html': ['src/index.html']
    //         }
    //     }
    // },
    // copy: {
    //     dist: {
    //         files: [
    //         // flattens results to a single level
    //             {expand: true, flatten: true, src: ['src/assets/img/**'], dest: 'dist/assets/img', filter: 'isFile'},
    //             {expand: true, cwd:'src', src: '**.ico', dest: 'dist'}
    //         ]
    //     }
    // }

});
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-sass');


//grunt.loadNpmTasks('grunt-browser-sync');


grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-banner');
//grunt.loadNpmTasks('grunt-contrib-copy');
//grunt.loadNpmTasks('grunt-contrib-uglify');
//grunt.loadNpmTasks('grunt-contrib-clean');
//grunt.loadNpmTasks('grunt-contrib-cssmin');
//grunt.loadNpmTasks('grunt-processhtml');
 


//Static Server
//grunt.registerTask('server', ['browserSync', 'watch']);
grunt.registerTask('server', ['watch']);
grunt.registerTask('dist', ['usebanner:dist']);
//grunt.registerTask('dist', ['clean','sass:dist','uglify:dist','copy:dist', 'processhtml:dist' ]);
};
