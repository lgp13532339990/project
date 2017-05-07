angular.module("tabsModule",[])
	   .controller("tabsCtrl",function($scope,shopcarList,localStorageService,$cookies){
	   		$scope.totalNumber = 0;
	   		$scope.shopcarList = shopcarList;
	   		var getCookie = angular.fromJson($cookies.get("user"));
	   		$scope.$watch("shopcarList",function(){
				var totalNumber = 0;
				angular.forEach(shopcarList,function(item){
					totalNumber += item.number;
				})
				$scope.totalNumber = totalNumber; 
				localStorageService.setObj("shopcarList",shopcarList)
			},true)
		 
	   })