var app = angular.module("getanimu", [
	'ngRoute',
	'ui.bootstrap'
]);

app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: 'templates/index.html',
        controller: 'IndexController'
      }).
      when('/:slug',{
      	templateUrl: 'templates/anime.html',
      	controller: 'AnimeController'
      }).
      otherwise({
        redirectTo: '/404.html'
      });
  }
]);