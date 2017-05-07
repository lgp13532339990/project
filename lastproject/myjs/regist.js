angular.module("registModule",[])
		.controller("registCtrl",function($scope,$httpParamSerializer,$http,$ionicPopup,$state){
			$scope.userdata = {};
			$scope.value = 0;
			$scope.submitData = function(){
				$scope.userData = {};
				$scope.userData["name"] = $scope.userdata["name"];
				$scope.userData["password"] = $scope.userdata["password"];
				$scope.userData["tel"] = $scope.userdata["tel"];
				if($scope.userdata["sex"]=="男"){
					$scope.userData["sex"] = "w";
				}else{
					$scope.userData["sex"] = "m";
				}
				var getdata = $httpParamSerializer($scope.userData);
				$http({
					url:"./shopApi/book/userRegist.php",
					method:"POST",
					data:getdata,
					headers:{"content-type":"application/x-www-form-urlencoded"}
				}).then(function(res){
					console.log(res)
					var num = res.data.code;
					console.log(num)
					if(num==0){
						$ionicPopup.alert({
			   				title:"恭喜",
			   				template:"<p>注册成功</p>",
			   				okText:"确定",
			   				okType:"button-assertive"
			   			})
			   			$state.go("login")
					}
				})
			}
		})