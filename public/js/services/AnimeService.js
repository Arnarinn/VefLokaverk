app.service("AnimeService", function($http){

	return {

		get: function(){
			return $http.get("api/anime");
		},
		find: function(slug){
			return $http.get("api/anime/" + slug)
		}

	};

});