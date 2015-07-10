angular.module('orderPortalApp')
.factory('OrdersService', function($http){
	return {		
		get: function(page) {
			return $http({
				url:	'users',
				method:	'get',
				params: {
					page: page
				}
			})
		}
	}
});