 var myApp = angular.module('myApp', ['ngRoute']);

 myApp.config(function ($routeProvider) {
     $routeProvider
         .when('/', {
             templateUrl: 'pages/home.html',
             controller: 'myCtrl'
         })

         .when('/book/:id', {
             templateUrl: 'book.html',
             controller: 'bookController',
            
            
         })

 });

 myApp.controller('mainController', function ($scope) {
     $scope.message = 'Everyone come and see how good I look!';
         });
 
     myApp.controller('bookController', function ($scope, $http, $routeParams) {
         $http.get("http://localhost/biblioteka/public/index/" + $routeParams.id)
             .then(function (response) {
                 $scope.book = response.data;
             });
     });



 myApp.controller('myCtrl', function ($scope, $http) {


     // aside categories 

     $http.get("http://localhost/biblioteka/public/index")
         .then(function (response) {
             $scope.books = response.data;
         });

     $http.get("http://localhost/biblioteka/public/index/categories")
         .then(function (response) {
             $scope.categories = response.data;
         });
 });







 // // configure our routes
 // myApp.config(function ($routeProvider) {
 //     $routeProvider
 //
 //         // route for the home page
 //         .when('/', {
 //             templateUrl: 'pages/home.html',
 //             controller: 'mainController'
 //         })
 //
 //         // route for the about page
 //         .when('/about', {
 //             templateUrl: 'pages/about.html',
 //             controller: 'aboutController'
 //         })
 //
 //         // route for the contact page
 //         .when('/contact', {
 //             templateUrl: 'pages/contact.html',
 //             controller: 'contactController'
 //         })
 //         .when('/book/:id', {
 //             templateUrl: 'book.html',
 //             controller: 'bookController'
 //         });
 // });
 //
 // // create the controller and inject Angular's $scope
 // myApp.controller('mainController', function ($scope) {
 //     // create a message to display in our view
 //     $scope.message = 'Everyone come and see how good I look!';
 // });
 //
 // myApp.controller('aboutController', function ($scope) {
 //     $scope.message = 'Look! I am an about page.';
 // });
 //
 // myApp.controller('contactController', function ($scope) {
 //     $scope.message = 'Contact us! JK. This is just a demo.';
 // });
 //         myApp.controller('bookController', function ($scope, $http, $routeParams) {
 //
 //                 $http.get("http://localhost/biblioteka/public/index/" + $routeParams.id)
 //                     .then(function (response) {
 //                         $scope.book = response.data;
 //                     });
 //                 //
 //     $scope.message = 'Contact us! JK. This is just a demo.';
 // });
