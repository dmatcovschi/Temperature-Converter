

/**
 * Main AngularJS Web Application
 */
var app = angular.module('tutorialWebApp', [
  'ngRoute'
]);

/**
 * Configure the Routes
 */
app.config(['$routeProvider', function ($routeProvider) {
  $routeProvider
    // Home
    .when("/", {templateUrl: "partials/about.html", controller: "PageCtrl"})
    .when("/about", {templateUrl: "partials/about.html", controller: "PageCtrl"})
    // Pages
    .when("/faq", {templateUrl: "partials/faq.html", controller: "PageCtrl"})
    .when("/recruiters", {templateUrl: "partials/recruiters.html", controller: "PageCtrl"})
    .when("/companies", {templateUrl: "partials/companies.html", controller: "PageCtrl"})
    .when("/people", {templateUrl: "partials/people.html", controller: "PageCtrl"})
    .when("/contact", {templateUrl: "partials/contact.html", controller: "PageCtrl"})
    .when("/feedbacklogin", {templateUrl: "partials/feedbacklogin.html", controller: "PageCtrl"})
    
    
    // else 404
    .otherwise("/404", {templateUrl: "partials/404.html", controller: "PageCtrl"});
}]);

/**
 * Controls all other Pages
 */
app.controller('PageCtrl', function (/* $scope, $location, $http */) {
  console.log("Page Controller reporting for duty.");

  // Activates the Carousel
  $('.carousel').carousel({
    interval: 5000
  });

  // Activates Tooltips for Social Links
  $('.tooltip-social').tooltip({
    selector: "a[data-toggle=tooltip]"
  })
});

function HeaderController($scope, $location) 
{ 
    $scope.isActive = function (viewLocation) { 
        return viewLocation === $location.path();
    };
}

app.controller('searchCompany',function($scope){
	$scope.query = {}
	$scope.queryBy = '$'
	$scope.companies = [
		{
			"name" : "Google",
			"description" : "Since the beginning, we’ve focused on providing the best user experience possible. Whether we’re designing a new Internet browser or a new tweak to the look of the homepage, we take great care to ensure that they will ultimately serve you, rather than our own internal goal or bottom line.",
			"link" : "http://www.artificialbrains.com/images/google/google-building-44.jpg",
			"facebook" : "https://www.facebook.com/Google",
			"linkedin" : "https://www.linkedin.com/company/google",
			"twitter" : "https://twitter.com/google",
			"googleplus" : "https://plus.google.com/+google/posts"
		},
		{
			"name" : "Deloitte",
			"description" : "Deloitte is the brand under which tens of thousands of dedicated professionals in independent firms throughout the world collaborate to provide audit, consulting, financial advisory, risk management, tax and related services to select clients.",
			"link" : "http://farm4.staticflickr.com/3417/3369025249_62387e7d1e_z.jpg?zz=1",
			"facebook" : "https://www.facebook.com/deloitte",
			"linkedin" : "https://www.linkedin.com/company/deloitte",
			"twitter" : "https://twitter.com/deloitte",
			"googleplus" : "https://plus.google.com/+Deloitte/posts"
		}
	];
});
