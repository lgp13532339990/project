angular.module("formorderModule",[])
	   .controller("formorderCtrl",function($scope,shopcarList,$http,$ionicPopup,$state,$cookies){
	   	$scope.goodOder = shopcarList;
	   	$scope.totalPrice = 0;
	   	$scope.totalNumber = 0;
   		$scope.$watch("goodOder",function(value){
   			var number = 0;
   			var total = 0;
   			angular.forEach(value,function(item){
   				total += item.number * item.price;
   				number += item.number;
   			})
   			$scope.totalPrice = total;
   			$scope.totalNumber = number;
   		},true)
	   	//当点击提交订单
	   $scope.formOrder = function(){
	   		var arr = [];
	   		angular.forEach($scope.goodOder,function(value){
	   			var itemObj = {};
	   			itemObj.id = value.imgId;
	   			itemObj.num = value.number;
	   			arr.push(itemObj);
	   		})
	   		var getCookie = angular.fromJson($cookies.get("user"));
                  if(getCookie){
                  	$scope.backnum = 1;
                    $scope.name = getCookie["username"];
                    $scope.id = getCookie.id;
                  }else{
                  	$scope.backnum = 0;
                    $scope.name = "";
                    $scope.id = "";
                  }
	   		var getData = {"user_id":$scope.id,"cart":arr};
	   		if(getData.cart.length==0){
	   			$ionicPopup.alert({
	   				title:"警告",
	   				template:"<p>没有商品,无法提交</p>",
	   				okText:"确定",
	   				okType:"button-assertive"
	   			})
		   		}else{
			   		$http({
			   			url:"./shopApi/book/order.php?",
			   			method:"POST",
			   			data:getData
			   		}).then(function(res){
			   			console.log(res)
			   			if(res.data.code==0){
			   				// 点击提交订单的时候清空购物车
			   				angular.forEach($scope.goodOder, function(val, key){
		                        delete $scope.goodOder[key];
		                     })
			   				$ionicPopup.alert({
					   				title:"恭喜",
					   				template:"<p>订单提交成功</p>",
					   				okText:"确定",
					   				okType:"button-assertive"
					   			})
			   				$state.go("personal")
			   			}
			   		})
		   		}
	   		}
		})
