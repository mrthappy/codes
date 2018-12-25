var app = angular.module("app", []);

app.controller("ctrl", ["$scope", function($scope) {
    $scope.arr = "this is the best o all";
}]);
app.component("compo", {
    template: `<li> how the <a href="#">{{arr}}</a></li>`,
    controller: "ctrl"
});