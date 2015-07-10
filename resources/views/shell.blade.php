@extends('layout.master')

@section('head')
	<link rel="stylesheet" href="{{ url('css/sidebar.css') }}">
	<script src="{{ url('js/angular.min.js') }}"></script>	
	<script src="{{ url('js/angular-route.min.js') }}"></script>	
	<!-- MODULES -->
	<script src="{{ url('js/app.js') }}"></script>	
	<!-- CONTROLLERS -->
	<script src="{{ url('js/controllers/mainController.js') }}"></script>	
	<script src="{{ url('js/controllers/ordersController.js') }}"></script>	
	<script src="{{ url('js/controllers/auditController.js') }}"></script>	
	<script src="{{ url('js/controllers/usersController.js') }}"></script>	
	<!-- SERVICES -->
	<script src="{{ url('js/services/rolesService.js') }}"></script>	
	<script src="{{ url('js/services/ordersService.js') }}"></script>
	<script src="{{ url('js/services/usersService.js') }}"></script>
	<!-- ROUTING -->
	<script src="{{ url('js/routes/routes.js') }}"></script>
	<!-- CONSTANTS -->
	<script>
		angular.module("orderPortalApp").constant('CONFIG', {
			'CSRF_TOKEN': '{{ csrf_token() }}'
		});
	</script>
	<style>
		div.row{
			margin-bottom: 20px;
		}
	</style>
@endsection

@section('master-content')
	<div ng-app="orderPortalApp" ng-controller="mainController">
			
		<!-- HEADER -->
		<div class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Order Portal SPA</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="">{{ Auth::user()->name }}</a></li>
				<li><a href="auth/logout">Log out</a></li>
			</ul>
		</div>	   
		</div>
		
		<div class="container">	
			<div class="row row-offcanvas row-offcanvas-left">			
				<!-- SIDEBAR NAVIGATION -->
				<div class="col-md-2 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
					<ul class="nav">
						<li class="active"><a href="#/">Dashboard</a></li>
						<li><a href="#orders">Orders</a></li>
						<li><a href="#users">Users</a></li>
						<li><a href="#audit">Audit Log</a></li>              
					</ul>
				</div>
				
				<!-- MAIN CONTENT -->
				<div class="col-md-10 col-sm-10 " id="main">
					<!-- THIS IS WHERE CONTENT WILL APPEAR -->
					<div ng-view></div>
				</div>			
			</div>		
		</div>
	</div>	
@endsection

@section('body')
	<script src="{{ url('js/sidebar.js') }}"></script>
@endsection