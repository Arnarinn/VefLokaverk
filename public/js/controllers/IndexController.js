app.controller('IndexController', function($scope, AnimeService){

	AnimeService.get().then(function(response){
		$scope.anime = response.data;
	});

});