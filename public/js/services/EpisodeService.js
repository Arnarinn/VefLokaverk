app.service("EpisodeService", function($http){

	return {

		find: function(anime, episode){
			return $http.get("api/anime/" + anime + "/" + episode);
		}

	};

});