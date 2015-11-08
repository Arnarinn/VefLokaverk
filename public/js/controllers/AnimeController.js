app.controller('AnimeController', function($scope, $routeParams, AnimeService){

	console.log($routeParams);

	AnimeService.find($routeParams.anime).then(function(response){
		$scope.anime = response.data;
		console.log(response);
	});

});