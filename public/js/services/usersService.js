angular.module('orderPortalApp')
.factory('UsersService', function($http){
	return {		
		get: function(page) {
			return $http({
				url:	'users',
				method:	'get',
				params: {
					page: page
				}
			})
		},
		
		store: function(formData) {
			return $http({
				url:	'users/store',
				method:	'post',
				data: $.param(formData),
				headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
			})
		}
	}
});