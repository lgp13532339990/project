angular.module("personalModule",[])
		.controller("personalCtrl",function($scope,$ionicPopup,$cookies,$cookieStore,$state,$http,shopcarList,localStorageService){
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
            // 点击注销
            $scope.shopcarList = shopcarList;
            $scope.goback = function(){
            	 $cookieStore.remove("user");
                  angular.forEach($scope.shopcarList, function(val, key){
                        delete $scope.shopcarList[key];
                     })
            	 $state.go("home");
            }
            // 发送请求
            $http({
            	url:"./shopApi/book/orderQuery.php?user_id="+$scope.id,
            	method:"get",
            }).then(function(res){
            	$scope.code = res.data.code;
            	$scope.goodData = res.data.data;
            })
            $scope.openN = 0
            $scope.openOrder = function(){
            	if($scope.openN == 0 && getCookie){
            		$scope.openN = 1
            	}else{
            		$scope.openN = 0;
            		if(!getCookie){
            			$ionicPopup.alert({
			   				title:"警告",
			   				template:"<p>请登录</p>",
			   				okText:"确定",
			   				okType:"button-assertive"
			   			})
			   			$state.go("login")
            		}
            	}
            }	
		})