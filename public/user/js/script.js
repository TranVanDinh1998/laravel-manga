var app = angular.module('app', []);
app.config(function($interpolateProvider) {
    // To prevent the conflict of `{{ ` and ` }}` symbols
    // between Blade template engine and AngularJS templating we need
    // to use different symbols for AngularJS.
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('myCtrl', function($scope) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
    $scope.changeName = function() {
        $scope.firstname = "Nelly";
    };
    $scope.fullName = function() {
        return $scope.firstName + " " + $scope.lastName;
    };
});
app.controller('myCtrl2', function($scope) {
    $scope.firstName = "Dinh";
    $scope.lastName = "Tran";
});