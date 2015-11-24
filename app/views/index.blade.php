<!doctype html>
<html ng-app="getanimu">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<link rel="stylesheet" type="text/css" href="#/css/foundation.min.css">
	<link rel="stylesheet" type="text/css" href="#/css/foundation.css">
	<link rel="stylesheet" type="text/css" href="#/css/CustomCSS.css">
	{{ HTML::style ("css/bootstrap.min.css") }}
</head>
<body>
	<div ng-view></div>

	{{ HTML::script ("js/lib/angular.min.js") }}
	{{ HTML::script ("js/lib/angular-route.min.js") }}
	{{ HTML::script ("js/lib/ui-bootstrap-tpls-0.14.3.min.js") }}
	{{ HTML::script ("js/app.js") }}
	{{ HTML::script ("js/services/AnimeService.js") }}
	{{ HTML::script ("js/services/EpisodeService.js") }}
	{{ HTML::script ("js/controllers/IndexController.js") }}
	{{ HTML::script ("js/controllers/AnimeController.js") }}
	{{ HTML::script ("js/controllers/EpisodeController.js") }}
</body>
</html>
