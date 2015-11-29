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
      when('/:anime',{
      	templateUrl: 'templates/anime.html',
      	controller: 'AnimeController'
      }).
      when('/:anime/:episode', {
        templateUrl: 'templates/episode.html',
        controller: 'EpisodeController'
      }).
      otherwise({
        redirectTo: '/404.html'
      });
  }
]);