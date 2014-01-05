module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        compass: {
            dist: {
                options: {
                    sassDir: 'wp-content/themes/eetarchitecture/scss',
                    cssDir: 'wp-content/themes/eetarchitecture/css',
                    environment: 'production',
                    outputStyle: 'expanded'
                }
            },
        },

        watch: {
            files: ['wp-content/themes/eetarchitecture/scss/*.scss','wp-content/themes/eetarchitecture/scss/**/*.scss'],
            tasks: 'compass'
        },

        browser_sync: {
            dev: {
                bsFiles: {
                    src: ['wp-content/themes/eetarchitecture/css/*.css','wp-content/themes/eetarchitecture/**/*.html']
                },
                options: {
                    watchTask: true,
                    debugInfo: true,
                    host: "192.168.0.33"
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
