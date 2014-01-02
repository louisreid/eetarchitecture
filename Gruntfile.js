module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        compass: {
            dist: {
                options: {
                    sassDir: 'scss',
                    cssDir: 'css',
                    environment: 'production',
                    outputStyle: 'expanded'
                }
            },
        },

        watch: {
            files: ['scss/*.scss','scss/**/*.scss'],
            tasks: 'compass'
        },

        browser_sync: {
            dev: {
                bsFiles: {
                    src: ['css/*.css','**/*.html']
                },
                options: {
                    watchTask: true,
                    debugInfo: true,
                    server: {
                        baseDir: "."
                    }
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');

    // Default task(s).
    grunt.registerTask('default', ["browser_sync", "watch"]);

};
