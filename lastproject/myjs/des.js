angular.module("desModule",["ngSanitize"])
		.controller("desCtrl",["$scope","$http","$stateParams","$httpParamSerializer","shopcarList","$state","$cookies","$ionicPopup",
			function($scope,$http,$stateParams,$httpParamSerializer,shopcarList,$state,$cookies,$ionicPopup){
			$scope.icon = "ion-ios-arrow-up icon";
			$scope.num = 0;
			var obj={};
			$http({
				url:"./shopApi/book/bookId.php?id="+$stateParams["id"],
				method:"GET",
			}).then(function(res){
				obj = res.data.data;
				$scope.goodId = obj.id;
				$scope.goodName = obj.title;
				$scope.goodPrice = obj.price;
				$scope.goodAuthor = obj.author;
				$scope.goodDes = obj.desc;
				// 定义对象传入购物车
				$scope.firstNumber = 1;
				$scope.max = function(){
					$scope.firstNumber++;
				}
				$scope.min = function(){
					
					if($scope.firstNumber<=1){
						$scope.firstNumber = 1;
					}else{
						$scope.firstNumber--;
					}
				}
				$scope.addGood = function(){
					var getCookie = angular.fromJson($cookies.get("user"));
					if(getCookie){
							$scope.goodObj = shopcarList;
							if($scope.goodObj[obj.id]){
								$scope.goodObj[obj.id]["number"]+=$scope.firstNumber;
							}else{
							$scope.goodObj[obj.id] = {
								imgId:obj.id,
								price:obj.price,
								name:obj.title,
								number:$scope.firstNumber
							}
						}
					}else{
						$ionicPopup.alert({
			    				title:"警告",
			    				template:"<p>请登录</p>",
			    				okText:"确定",
			    				okType:"button-assertive"
			    			})
						$state.go("login")
					}	
				}
				$scope.turn = function(){
					if($scope.icon=="ion-ios-arrow-up icon"){
						$scope.icon = "ion-ios-arrow-down";
						$scope.num = 1;
					}else{
						$scope.icon = "ion-ios-arrow-up icon";
						$scope.num = 0;
					}
				}
			})
			// 提交评论
			$scope.textObj = {};
			$scope.value = 0;
			$scope.comment = function(){
				$scope.comvalue = 0;
				if($scope.value==0){
					$scope.value = 1;
				}else{
					$scope.value = 0;
				}
			}
			// 发送评论信息
			$scope.submitData = function(){
				$scope.goodId = obj.id;
				$scope.textObj["id"] = $scope.goodId;
				$scope.textObj["user_id"] ="1";
				var getdata = $httpParamSerializer($scope.textObj);
				$http({
					url:"http://localhost/lastproject/shopApi/book/comment.php",
					method:"POST",
					data:getdata,
					headers:{"content-type":"application/x-www-form-urlencoded"}
				}).then(function(res){
					if(res.data.code==0){
						$scope.value = 0;
						$scope.comvalue = 1;
						$scope.text = $scope.textObj["content"];
						$scope.user_id = $scope.textObj["user_id"];
					}
				})
			}
			// 点击评论详情
			$scope.comvalue= 0;
			$scope.comtext = function(){
				$scope.value = 0;
				if($scope.icon=="ion-ios-arrow-up icon"){
					$scope.icon = "ion-ios-arrow-down";
					$scope.comvalue = 1;
				}else{
					$scope.icon = "ion-ios-arrow-up icon";
					$scope.comvalue = 0
				}
			}
		}])
