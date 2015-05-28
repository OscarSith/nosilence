module.exports = function(grunt) {
	grunt.initConfig({
		cssmin: {
			combine: {
				files: {
					'css/main.min.css': [
						'asset/css/bootstrap.min.css',
						'bower_components/fontawesome/css/font-awesome.min.css',
						'css/style.css',
						'css/responsive.css',
						'css/animate.css',
						'css/colors/blue.css',
					]
				}
			},
			admin: {
				files: {
					'css/admin.min.css': [
						'bower_components/bootstrap/dist/css/bootstrap.min.css',
						'css/font-awesome.min.css',
						'css/sb-admin.css'
					]
				}
			}
		}
	});

	//grunt.loadNpmTasks('grunt-contrib-requirejs');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.registerTask('css', ['cssmin:combine']);
	grunt.registerTask('cssAdmin', ['cssmin:admin']);
};