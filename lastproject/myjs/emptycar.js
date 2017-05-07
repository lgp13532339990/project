angular.module("emptycarModule",[])
		.controller("emptycarCtrl",function($scope,$state){
			$scope.toHome = function(){
				$state.go("home")
			}
		})