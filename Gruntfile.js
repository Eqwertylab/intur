module.exports = function(grunt) {

  grunt.initConfig({



    useminPrepare: {

      html: 'src/index.php',
      options: {

        dest: 'build'
      } 
    },



    usemin:{

      html: 'build/*.php'
    },



    // uglify: {
    //   target: {
    //     files: {
    //       'build/js/script.js': [
    //         'js/jquery-2.1.4.min.js', 
    //         'js/countdown.min.js',
    //         'js/tooltipster/js/jquery.tooltipster.min.js',
    //         'js/bootstrap-scrollspy.min.js',
    //         'js/jquery.smooth-scroll.js',
    //         'js/jquery-validation/dist/jquery.validate.min.js',
    //         'js/jquery.form.min.js',
    //         'js/modal/js/modal.js',
    //         'video-js/video.js',
    //         'js/app.js'
    //       ]
    //     }
    //   }
    // },



    // cssmin: {
    //   target: {
    //     files: [{
    //       'build/css/style.css': ['css/style.css']
    //     }]
    //   }
    // },



    imagemin: {

      dynamic: {     

        options: {

          optimizationLevel: 5
        },

        files: [  

          {
            expand: true,
            cwd: 'src/', 
            src: ['img/**/*.{png,jpg,gif}'],
            dest: 'build/',
            // flatten: true
          },

          {
            expand: true,
            cwd: 'src/', 
            src: ['js/**/*.{png,jpg,gif}'],
            dest: 'build/js/images/',
            flatten: true
          }
        ]
      }
    },



    copy: {

      task0: {

        files: [

          {
            expand: true,
            src: ['src/*.{html,json,php,}', 'src/favicon.png'],
            dest: 'build/',
            filter: 'isFile',
            flatten: true
          }
        ]
      }
    }
  });

  
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-usemin');
  grunt.loadNpmTasks('grunt-newer');

  grunt.registerTask('default', ['cssmin']);
  grunt.registerTask('build_js_css', ['uglify', 'cssmin']);
  grunt.registerTask('build_image', ['imagemin']);
  grunt.registerTask('build_copy', ['copy:html']);

  grunt.registerTask('build_all',[
    
    'copy:task0',
    'useminPrepare',
    'concat',
    'cssmin',
    'uglify',
    'usemin',
    'imagemin',
  ]);

};