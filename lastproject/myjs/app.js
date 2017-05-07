angular.module("myApp",["ionic","homeModule","ui.router","desModule","loginModule","registModule",
	"shopcarModule","localStorageServiceModule","tabsModule","formorderModule",
	"searchModule","personalModule","emptycarModule"])
		.config(function($stateProvider, $urlRouterProvider, $locationProvider,$ionicConfigProvider){
			$ionicConfigProvider.platform.android.tabs.style('standard');
			$ionicConfigProvider.platform.android.tabs.position('bottom');
			$locationProvider.hashPrefix("");
			$urlRouterProvider.otherwise("/home");
			$stateProvider
	   		.state("home", {
	   			url:"/home?name",
	   			templateUrl:"demo/home.html",
	   			controller:"homeCtrl"
	   		})
	   		.state("des", {
	   			url:"/des?id",
	   			templateUrl:"demo/des.html",
	   			controller:"desCtrl"
	   		})
	   		.state("login", {
	   			url:"/login",
	   			templateUrl:"demo/login.html",
	   			controller:"loginCtrl"
	   		})
	   		.state("regist", {
	   			url:"/regist",
	   			templateUrl:"demo/regist.html",
	   			controller:"registCtrl"
	   		})
	   		.state("shopcar", {
	   			url:"/shopcar",
	   			templateUrl:"demo/shopcar.html",
	   			controller:"shopcarCtrl"
	   		})
	   		.state("formorder", {
	   			url:"/formorder",
	   			templateUrl:"demo/formorder.html",
	   			controller:"formorderCtrl"
	   		})
	   		.state("search", {
	   			url:"/search",
	   			templateUrl:"demo/search.html",
	   			controller:"searchCtrl"
	   		})
	   		.state("personal", {
	   			url:"/personal",
	   			templateUrl:"demo/personal.html",
	   			controller:"personalCtrl"
	   		})
	   		.state("emptycar", {
	   			url:"/emptycar",
	   			templateUrl:"demo/emptycar.html",
	   			controller:"emptycarCtrl"
	   		})
		})













