module.exports = function(grunt) {
	grunt.initConfig({
		cssmin: {
			combine: {
				files: {
					'css/main.min.css': [
						'asset/css/bootstrap.min.css',
						'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css',
						'bower_components/fontawesome/css/font-awesome.min.css',
						'css/responsive.css',
						'css/animate.css',
						'css/colors/blue.css',
						'css/style.css',
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