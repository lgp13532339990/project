angular.module("localStorageServiceModule", [])
 	   .factory("shopcarList", function(localStorageService){
            return  localStorageService.getObj("shopcarList") ? localStorageService.getObj("shopcarList") : {};
       })
	   .service("localStorageService", function($window){
	   		//设置 字符串
	   		this.set = function(key, value){
	   			$window.localStorage[key] = value;
	   		}
	   		//读取 字符串
	   		this.get = function(key){
	   			return $window.localStorage[key];
	   		}
	   		//设置 对象
	   		this.setObj = function(key, obj) {
	   			$window.localStorage[key] = angular.toJson(obj)
	   		}
	   		//读取 对象
	   		this.getObj = function(key) {
	   			return angular.fromJson($window.localStorage[key])
	   		}

	   })