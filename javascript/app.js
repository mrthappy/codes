var app = angular.module("myApp", [ "ngMessages"]);
// the controller allows one to add services from angular to be used on the viewed
// directives allows you to change what happens on the webpage

app.controller("controller", ["$scope", "$http", function($scope, $http) {


}]);


app.directive("formArea", function() {
    return {
        templateUrl: "form.php",
        controller: "controller"
    }
});
app.config(["$routeProvider", function($routeProvider) {

    $routeProvider.
    when("/", {
        templateUrl: "form.php",
        controller: "controller"

    }).when("/register", {
        templateUrl: "register.php",
        controller: "controller"

    }).
    when("/password", {
        templateUrl: "password.php"
    }).

    otherwise({
        redirectoTo: "form.php"
    });
}]);
