angular.module('orderPortalApp')
.factory('RolesService', function($http){
	return {
		getAll: function() {
			return $http({
				url:	'roles/all',
				method:	'get'
			});
		}
	}
});