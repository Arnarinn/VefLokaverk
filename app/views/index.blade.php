<!doctype html>
<html ng-app="getanimu">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	{{ HTML::style ("css/bootstrap.min.css") }}
</head>
<body>
	<div ng-view></div>

	{{ HTML::script ("js/lib/angular.min.js") }}
	{{ HTML::script ("js/lib/angular-route.min.js") }}
	{{ HTML::script ("js/lib/ui-bootstrap-tpls-0.14.3.min.js") }}
	{{ HTML::script ("js/app.js") }}
	{{ HTML::script ("js/services/AnimeService.js") }}
	{{ HTML::script ("js/controllers/IndexController.js") }}
	{{ HTML::script ("js/controllers/AnimeController.js") }}
</body>
</html>