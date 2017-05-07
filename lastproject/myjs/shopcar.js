angular.module("shopcarModule",[])
		.controller("shopcarCtrl",["$scope","shopcarList","$cookies","$state",function($scope,shopcarList,$cookies,$state){
			console.log(shopcarList)
			var getCookie = angular.fromJson($cookies.get("user"));
			if(JSON.stringify(shopcarList) == "{}" || !getCookie){
				$state.go("emptycar")
			}else{
		   		$scope.goodData = shopcarList;
			}
			// 点击购物车数量
			// 增加
			$scope.addNumber = function(value){
				value.number ++;
			}
			// 减少
			$scope.minusNumber = function(value){
	   			if (value.number <= 1) {
	   				value.number = 1;
	   			} else {
	   				value.number --;
	   			}
	   		}
	   		//删除购物车一条商品
	   		$scope.del = function(key){
	   			delete $scope.goodData[key];
	   			if(JSON.stringify($scope.goodData) == "{}"){
						$state.go("emptycar")
					}
	   		}
	   		//总计多少钱
	   		$scope.totalPrice = 0;
	   		$scope.$watch("goodData",function(value){
	   			var total = 0;
	   			angular.forEach(value,function(item){
	   				total += item.number * item.price;
	   			})
	   			$scope.totalPrice = total;
	   		},true)
		}])