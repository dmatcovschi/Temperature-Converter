

/**
 * Main AngularJS Web Application
 */
var app = angular.module('tutorialWebApp', [ 'ngRoute' ]);

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
    .when("/recruiters", {templateUrl: "partials/recruiters.html", controller: "PageCtrl", controller: "searchCompany"})
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

app.controller("searchCompany", function($scope){
	$scope.query = {};
	$scope.queryBy = '$';
	$scope.companies = [
		{
			"name" : "KPMG",
			"description" : "KPMG is one of the largest professional services companies in the world and one of the Big Four auditors, along with Deloitte, EY and PwC. Its global headquarters are located in Amsterdam, the Netherlands. KPMG employs 162,000 people and has three lines of services: audit, tax, and advisory. Its tax and advisory services are further divided into various service groups.",
			"link" : "http://www.nrc.nl/wp-content/uploads/2013/11/kpmg-logo.jpg",
			"facebook" : "https://www.facebook.com/KPMG",
			"linkedin" : "https://www.linkedin.com/company/kpmg",
			"twitter" : "https://twitter.com/kpmg",
			"googleplus" : "https://plus.google.com/106458718593123764181/posts"
		},
		{
			"name" : "Deloitte",
			"description" : "Deloitte is the brand under which tens of thousands of dedicated professionals in independent firms throughout the world collaborate to provide audit, consulting, financial advisory, risk management, tax and related services to select clients.",
			"link" : "http://farm4.staticflickr.com/3417/3369025249_62387e7d1e_z.jpg?zz=1",
			"facebook" : "https://www.facebook.com/deloitte",
			"linkedin" : "https://www.linkedin.com/company/deloitte",
			"twitter" : "https://twitter.com/deloitte",
			"googleplus" : "https://plus.google.com/+Deloitte/posts"
		},
		{
			"name" : "Symantec",
			"description" : "Symantec helps consumers and organizations secure and manage their information-driven world. Learn about the company, read what media and analysts have to say about Symantec, or find positions open in our team.",
			"link" : "http://cdn5.triplepundit.com/wp-content/uploads/2013/05/Symantec-Headquarters.jpg",
			"facebook" : "https://www.facebook.com/Symantec",
			"linkedin" : "https://www.linkedin.com/company/symantec",
			"twitter" : "https://twitter.com/symantec",
			"googleplus" : "https://plus.google.com/+symantec/posts"
		},
		{
			"name" : "Amazon",
			"description" : "With a mission to be Earth’s most customer-centric company, where customers can find and discover anything they might want to buy online, and endeavors to offer its customers the lowest possible prices, Amazon.com and other sellers offer millions of unique new, refurbished, and used items in categories such as books; movies; music & games; digital downloads; electronics & computers.",
			"link" : "http://a.abcnews.com/images/Business/AP_amazon_kab_140425_16x9_608.jpg",
			"facebook" : "https://www.facebook.com/Amazon",
			"linkedin" : "https://www.linkedin.com/company/amazon",
			"twitter" : "https://twitter.com/amazon",
			"googleplus" : "https://plus.google.com/+amazon/posts"
		},
		{
			"name" : "VMWare",
			"description" : "The pace of business is melting away rigid structures and requires a new model of IT—one that is fluid, instant and secure. VMware offers that model—Brave New IT, empowering customers to rapidly develop, automatically deliver and safely consume all applications, from traditional to cloud-native, on any device and to manage them through a unified platform.",
			"link" : "http://cdn.arstechnica.net/wp-content/uploads/2011/11/vmware_headquarters-4eb4083-intro.jpg",
			"facebook" : "https://www.facebook.com/vmware",
			"linkedin" : "https://www.linkedin.com/company/vmware",
			"twitter" : "https://twitter.com/VMware?",
			"googleplus" : "https://plus.google.com/+vmware/posts"
		},
		{
			"name" : "Oracle",
			"description" : "At Oracle, we want to help you shift that spending balance. We help you simplify your IT environment so that you can free up money, time, and resources to invest in innovation. We do this by providing hardware and software that’s engineered to work together, in the cloud or on premises.",
			"link" : "http://news.doddleme.com/wp-content/uploads/2012/09/oracle-building.jpg",
			"facebook" : "https://www.facebook.com/Oracle",
			"linkedin" : "https://www.linkedin.com/company/oracle",
			"twitter" : "https://twitter.com/oracle",
			"googleplus" : "https://plus.google.com/+Oracle/posts"
		}
	];
	$scope.companies = [
		{
			"company" : "Deloitte",
			"name" : "Karen Waldmann",
			"email" : "kwaldmann@deloitte.com"
		},
		{
			"company" : "Symantec",
			"name" : "Monica Ipong",
			"email" : "monica_ipong@symantec.com"
		},
		{
			"company" : "Symantec",
			"name" : "David Sambrano",
			"email" : "David_Sambrano@symantec.com"
		},
		{
			"company" : "Amazon",
			"name" : "Tiffany Casey",
			"email" : "tiffanca@amazon.com"
		},
		{
			"company" : "KPMG",
			"name" : "McKenzie Campana",
			"email" : "mcampana@kpmg.com"
		},
		{
			"company" : "Deloitte",
			"name" : "Monica Anne Giflewski",
			"email" : "mfiglewski@deloitte.com"
		},
		{
			"company" : "VMWare",
			"name" : "Shawn Sigona",
			"email" : "ssigona@vmware.com"
		},
		{
			"company" : "VMWare",
			"name" : "Audrey Pietrzak",
			"email" : "apietrzak@vmware.com"
		}
	];
});
