// Configure routes
angular.module('orderPortalApp').config(function($routeProvider){
	$routeProvider
		.when('/audit', {
			templateUrl: 	'views/audit/index.html',
			controller: 	'auditController'
		})
		.when('/orders', {
			templateUrl: 	'views/orders/index.html',
			controller: 	'ordersController'
		})
		.when('/users', {
			templateUrl: 	'views/users/index.html',
			controller: 	'usersController'
		})
		.when('/users/create', {
			templateUrl: 	'views/users/create.html',
			controller: 	'usersController'
		})
		.when('/', {
			templateUrl: 	'views/home/dashboard.html',
			controller: 	'mainController'
		});
});