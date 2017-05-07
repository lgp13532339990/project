angular.module("searchModule",[])
	   .controller("searchCtrl",function($scope,$http){
	   	$scope.num = 6
	   	$scope.searchMore = function(){
	   		$scope.num +=3;
	   		if($scope.num>30){
	   			$scope.$broadcast('scroll.infiniteScrollComplete');
	   			return;
	   		}
	   		searchMore($scope.num)
	   		$scope.$broadcast('scroll.infiniteScrollComplete');
	   	}
	   	searchMore($scope.num)
	   	function searchMore(startNumber){
		   	$http({
		   		url:"./shopApi/book/book.php?start=0&length="+startNumber,
		   	}).then(function(res){
		   		$scope.productData = res.data.data;
		   		$scope.searchName = function(){
					$scope.keytext = $scope.keyword;
				}
		   	})
		}
		// 按标题搜索
		// $scope.keywrod = "";
		// $scope.searchName = function(){
		// 	$scope.keytext = $scope.keyword;
		// }
		// 价格排序
		$scope.priceNum = 0;
		$scope.icon = "ion-arrow-down-b";
		$scope.turnPrice = function(){
			$scope.priceNum = 1
			if($scope.icon=="ion-arrow-down-b"){
				$scope.icon = "ion-arrow-up-b";
				$scope.price = "price";
			}else{
				$scope.icon = "ion-arrow-down-b"
				$scope.price = "price*-1";
			}
		}
	})