angular.module("homeModule",['ngCookies'])
				.controller("homeCtrl", ["$scope","$http","$stateParams","$cookies", function($scope,$http,$stateParams,$cookies) {
                  //读取cookie
                  var getCookie = angular.fromJson($cookies.get("user"));
                  if(getCookie){
                    $scope.name = getCookie["username"];
                  }else{
                    $scope.name = "";
                  }
                  var span = document.querySelectorAll(".run-t");
                   var th = span[0].innerHTML;
                   var tm = span[1].innerHTML;
                   var ts = span[2].innerHTML;
                   var t_timer = setInterval(running,1000);
                   function running(){
                       ts--;
                       if(ts<0){
                           ts=59;
                           tm--;
                          if(tm==0){
                           th--;
                           tm=59;
                           if(th==0){
                               ts=0;
                               tm=0;
                               clearInterval(t_timer)
                           }
                          }
                       }
                       ts<10?span[2].innerHTML = "0"+ts:span[2].innerHTML = ts;
                       tm<10?span[1].innerHTML = "0"+tm:span[1].innerHTML = tm;
                       th<10?span[0].innerHTML = "0"+th:span[0].innerHTML = th;
                   }
                   var n=-1;
                   setInterval(play,2000);
                   function play(){
                     n++;
                     if(n>4){
                        n=0
                     }
                      $(".hot").find("li").eq(n).fadeIn().siblings().fadeOut()
                   }
			   		      $scope.pageClick = function(index){
                     $scope.model.activeIndex = index;
                  }
                  $http({
                  	url:"./shopApi/book/book.php?start=20&length=4",
                  }).then(function(res){
                  	$scope.goodsData = res.data.data;
                  },function(error){})
                  $http({
                     url:"./shopApi/book/book.php?cateid=3&start=4&length=6",
                  }).then(function(res){
                     $scope.goodsList = res.data.data;
                  },function(error){})
                  $http({
                     url:"./shopApi/book/book.php?cateid=1&start=0&length=6",
                  }).then(function(res){
                     $scope.goodsList1 = res.data.data;
                  },function(error){})
                  //加载
                  $scope.start=6;
                  $scope.loadMore = function(){
                     $scope.start+=3;
                     if($scope.start>40){
                        $scope.$broadcast('scroll.infiniteScrollComplete');
                        return;
                     }
                     load($scope.start);
                     $scope.$broadcast('scroll.infiniteScrollComplete');
                  }
                  load($scope.start);
                  function load(start){
                    $http({
                       url:"./shopApi/book/book.php?start=0&length="+start,
                    }).then(function(res){
                       $scope.moregoods = res.data.data;
                       angular.forEach($scope.moregoods,function(item){
                          item.new_price = 9.9;
                       })
                    },function(error){})
                  }
			   	}])


