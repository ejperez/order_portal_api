angular.module('orderPortalApp').controller('ordersController', function($scope, $http, Orders){
	
	$scope.message = 'behold! this is the order controller.';
	
	/*
	$scope.orderData;
	
	$scope.loading = true;
	
	// Get orders
	Orders.get().success(function(data){
		$scope.orders = data;
		$scope.loading = false;
	});
	*/
});