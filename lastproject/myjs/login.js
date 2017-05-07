angular.module("loginModule",['ngCookies'])
		.controller("loginCtrl",["$scope","$http","$httpParamSerializer","$state","$cookieStore","$ionicPopup",function($scope,$http,$httpParamSerializer,$state,$cookieStore,$ionicPopup){
			$scope.userdata={};
			$scope.submitData = function(){
				var getdata = $httpParamSerializer($scope.userdata);
				$scope.num = 0;
				$http({
					url:"./shopApi/book/userInfoLogin.php?",
					method:"post",
					data:getdata,
					headers:{"content-type":"application/x-www-form-urlencoded"}
				}).then(function(res){
					$scope.id = res.data.data.user_id;
					$scope.num = res.data.code;
					console.log(res)
					if($scope.num==1){
						$scope.alertvalue = "用户名不存在"; 
					}else if($scope.num==2){
						$scope.alertvalue = "用户名或密码错误"
					}else if($scope.num==3){
						$scope.alertvalue = "请输入登录信息"
					}else{
						//储存
						$cookieStore.put('user',{
							username:$scope.userdata["username"],
							id:$scope.id,
						});
						$state.go("home")
						$ionicPopup.alert({
			   				title:"恭喜",
			   				template:"<p>登录成功</p>",
			   				okText:"确定",
			   				okType:"button-assertive"
			   			})
					}
				},function(error){
					console.log(error)
				})
			}
			
		}])