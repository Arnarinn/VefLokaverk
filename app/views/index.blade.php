<!doctype html>
<html ng-app="getanimu">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/CustomCSS.css">
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	{{ HTML::style ("css/bootstrap.min.css") }}
</head>
<body>
	<div class="top-bar">
	  <div class="top-bar-left">
	    <ul class="dropdown menu" data-dropdown-menu>
	      <li class="menu-text">GetAnimu</li>
	      <li class="has-submenu">
	        <a href="#/">Home</a>
	      </li>
	    </ul>
	  </div>
	  <div class="top-bar-right">
	    <ul class="menu">
	      <li><input type="search" placeholder="Search"></li>
	      <li><button type="button" class="button">Search</button></li>
	    </ul>
	  </div>
	</div>
	<div ng-view></div>

	{{ HTML::script ("js/lib/angular.min.js") }}
	{{ HTML::script ("js/foundation.min.js") }}
	{{ HTML::script ("js/lib/angular-route.min.js") }}
	{{ HTML::script ("js/lib/ui-bootstrap-tpls-0.14.3.min.js") }}
	{{ HTML::script ("js/myapp.js") }}
	{{ HTML::script ("js/services/AnimeService.js") }}
	{{ HTML::script ("js/services/EpisodeService.js") }}
	{{ HTML::script ("js/controllers/IndexController.js") }}
	{{ HTML::script ("js/controllers/AnimeController.js") }}
	{{ HTML::script ("js/controllers/EpisodeController.js") }}
</body>
</html>
