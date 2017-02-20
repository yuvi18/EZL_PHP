var app = angular.module('ezlGlobal', []);
app.controller('Verification', function($scope, $http) {
	var name = 3;
    $http.post("server_req.php",name).then(function(response) {
    	$http.get("user_data.json").then(function(response) {
    		$scope.id = response.data.id;
    		$scope.username = response.data.username;
    		$scope.level = response.data.access_level;
    		$scope.name = response.data.profile.first_name + response.data.profile.last_name;
    		$scope.age = response.data.profile.age;
    		$scope.bio = response.data.profile.about_me;
    		$scope.likes = response.data.profile.likes;
    		$scope.dislikes = response.data.profile.dislikes;
    		$scope.comments = response.data.profile.comments;
    		$scope.accounts = response.data.profile.linked_accounts;
    });
    });
});