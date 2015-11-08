app.controller('EpisodeController', function($scope, $routeParams, EpisodeService){

	EpisodeService.find($routeParams.anime, $routeParams.episode).then(function(response){
		$scope.episode = response.data;
		console.log(response);
	});

});