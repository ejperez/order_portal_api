angular.module('orderPortalApp').controller('usersController', function($scope, $http, CONFIG, RolesService, UsersService){
	
	// Scope variables
	
	$scope.users = [];
	
	$scope.lastPage = 1;
	$scope.isLastPage = false;
	
	$scope.formData = {};
	$scope.formData._token = CONFIG.CSRF_TOKEN;
	
	$scope.roles = [];
	
	// Functions
	
	$scope.loadMore = function(){
		$scope.lastPage++;
		UsersService.get($scope.lastPage).success(function(data, status, headers, config){
			$scope.users = $scope.users.concat(data.data);
			
			// Hide load more button if this is last page of items
			if (data.last_page == $scope.lastPage){
				$scope.isLastPage = true;
			}
		});
	};
	
	$scope.storeUser = function(){
		UsersService.store($scope.formData).success(function(data, status, headers, config){
			console.log(data);
		});
	}
	
	// Initialization
	
	UsersService.get($scope.lastPage).success(function(data, status, headers, config){
		$scope.users = data.data;
		$scope.currentPage = data.current_page;
		$scope.total = data.total;
		$scope.perPage = data.per_page;
	});
	
	RolesService.getAll().success(function(data, status, headers, config){
		$scope.roles = data;
	}).error(function(data, status, headers, config){
		console.debug(data);
	});
});